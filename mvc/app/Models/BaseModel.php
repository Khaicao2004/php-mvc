<?php

//Quy tắc đặt tên namespace: đặt tên theo tên thư mục (Pascal Case)
//Ký tự đầu của từ viết hoa
//nhiều thư mục thì cách nhau bởi dấu \

namespace App\Models;

use PDO;

//Đặt tên class theo tên file

class BaseModel{
    protected $conn;
    protected $sqlBuilder;
    protected $tableName;
    //đặt tên cột khóa chính
    protected $primaryKey = "id";
    public function __construct(){
        $host = HOSTNAME;
        $dbname = DBNAME;
        $username = USERNAME;
        $password = PASSWORD;
        try {
            $this->conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8",$username,$password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(\PDOException $e){
            echo "Lỗi kết nối CSDL:" . $e->getMessage();
        }
    }
    //function all dùng để lấy toàn bộ dữ liệu của bảng
    public static function all(){
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    //load sản phẩm danh mục
    public static function getAll(){
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName";
        return $model;
    }
    public function thisWhere($table,$foreignKey,$id){
        $this->sqlBuilder .= " WHERE $table.$foreignKey = $id";
        return $this;
    }
public function innerJoin($table, $foreignKey, $primaryKey)
    {   
        $this->sqlBuilder .= " INNER JOIN $table ON $this->tableName.$foreignKey = $table.$primaryKey";
        return $this;
    }
    
    //method find: tìm kiếm dữ liệu theo id
    // @id: tham số truyên vào
    public static function find($id){
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName
         WHERE $model->primaryKey =:$model->primaryKey";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $data = ["$model->primaryKey" => $id];
        $stmt->execute($data);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        //kiểm tra xem có lấy được dữ liệu không
        if($result){
            return $result[0];//lấy phần tử đầu tiên
        }
        return $result;
    }
    /**
     * Method where : tìm kiếm  dữ liệu theo điều kiện, xây dưng câu lệnh SQL
     * @$column: tên cột làm điều kiện
     * @$condition: điều kiện = , > , <,...
     * @$value: là giá trị của điều kiện
     */
    public static function where($column, $condition, $value){
        $model  = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE `$column` $condition '$value'";
        return $model;
    }
    // Method andWhere : dùng để thêm tiếp điều kiện cho câu lệnh sqlBuilder
    public function andWhere($column, $condition, $value){
        $this->sqlBuilder .= "AND `$column` $condition '$value'";
        return $this;
    }
    //Method orWhere:  dùng để thêm tiếp điều kiện cho câu lệnh sqlBuilder
    public function orWhere($column, $condition, $value){
        $this->sqlBuilder .= "OR `$column` $condition '$value'";
        return $this;
    }
    public static function firstWhere($column,$codition, $value){
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE `$column` $codition '$value' LIMIT 1";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if ($result) {
            return $result[0]; //Lấy phần tử đầu tiên
        }
        return $result;
    }

    //Method get: dùng để thực thi câu lệnh điều kiện
    public function get(){
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    /**
     * method insert: dùng để thêm dữ liệu vào bảng
     * @$data: tham số là 1 mảng gồm có key là tên cột
     */
    public static function insert($data){
        $model = new static;
        $model->sqlBuilder = "INSERT INTO $model->tableName(";

        //Biến $values để lưu trữ tham số value của câu lệnh sqlBuilder
        $values = "";
        foreach($data as $column=>$val){
            $model->sqlBuilder .= " `{$column}`, ";
            $values .= " :$column, ";
        }
        //Xóa ký tự ", " bên phải chuỗi
        $model->sqlBuilder = rtrim($model->sqlBuilder, ", ") . ") ";
        $values = "VALUE( " . rtrim($values, ", "). ") ";
        //Nối chuỗi sqlBuilder
        $model->sqlBuilder .= $values;
        // echo $model

        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute($data);
        return $model->conn->lastInsertId();
    }

    /**
     * method update: dùng để cập nhật dữ liệu
     * @$id: giá trị của khóa chính
     * @$data: dữ liệu cần cập nhật
     */
    public static function update($id,$data){
        $model = new static;
        $model->sqlBuilder = "UPDATE $model->tableName SET ";
        foreach ($data as $column => $value) {
            $model->sqlBuilder .= " `{$column}` =:$column,";
        }
        $model->sqlBuilder = rtrim($model->sqlBuilder, ", ");
        //thêm điều kiện cho câu lệnh sql
        $model->sqlBuilder .= " WHERE `$model->primaryKey` =:$model->primaryKey";

        $stmt = $model->conn->prepare($model->sqlBuilder);
        //thêm id vào data
        $data["$model->primaryKey"] = $id;
        return $stmt->execute($data);
    }

    //method delete: dùng để xóa dữ liệu
    public static function delete($id){
       $model = new static;
       $model->sqlBuilder = "DELETE FROM $model->tableName WHERE
       `$model->primaryKey`=:$model->primaryKey";
       $stmt = $model->conn->prepare($model->sqlBuilder);
       return $stmt->execute(["$model->primaryKey" =>$id]);
    }
}