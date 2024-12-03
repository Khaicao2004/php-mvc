<?php

namespace App\Controllers;


use App\Models\UserModel;

class UserController extends BaseController
{
   //hiển thị danh sách sản phẩm
   public function index()
   {
      $users = UserModel::all();
      //lay thong tin message
      $message = $_COOKIE['message']  ?? "";
      return $this->view("admin/user/list", ['message' => $message, 'users' => $users]);
   }
   public function register()
   {
      $data = $_POST;
      UserModel::insert($data);
      setcookie("message", "Đăng ký tài khoản thành công", time() + 2);
      header("Location: " . ROOT_PATH . "login");
      die;
   }
   public function login(){
      $data = $_POST;
      $user_name = $data['user_name'];
      if (empty($user_name)) {
          setcookie("message", "Không được bỏ trống user_name", time() + 2);
          header("location: " . ROOT_PATH . "login");
          die;
      }
      $passw = $data['pass'];
      if (empty($passw)) {
          setcookie("message", "Không được bỏ trống pass", time() + 2);
          header("location: " . ROOT_PATH . "login");
          die;
      }
      //Kiểm tra xem có tồn tại user_name hay không
      $taikhoan = UserModel::firstWhere('user',' LIKE ', $user_name);
      if (!$taikhoan) {
          setcookie("message", "Tài khoản không tồn tại", time() + 2);
          header("location: " . ROOT_PATH . "login");
          die;
      }
      //Kiểm tra xem pass có đúng hay không
      $pw = $taikhoan->pass;
      if ($pw != $passw) {
          setcookie("message", "Mật khẩu không đúng", time() + 2);
          header("location: " . ROOT_PATH . "login");
          die;
      }
      $role = $taikhoan->role;
      $iduser = $taikhoan->id;
      if ($role == 1) {
          //Lưu thông tin vào cookie
          setcookie("message", "Đăng nhập thành công", time() + 2);
          setcookie("user_name", $user_name, time() + 99999);
          setcookie("iduser", $iduser, time() + 99999);
          header("location: " . ROOT_PATH);
          die;
      }else{
          setcookie("message", "Đăng nhập thành công", time() + 2);
          setcookie("user_name", $user_name, time() + 99999);
          setcookie("role", $role, time() + 99999);
          setcookie("iduser", $iduser, time() + 99999);
          header("location: " . ROOT_PATH . "user/list");
          die;
      }
  }
   //hiển thị form thêm sản phẩm
   public function create()
   {
      $users = UserModel::all();
      $message = $_COOKIE['message']  ?? "";
      return $this->view("admin/user/create", ['users' => $users]);
   }
   //thêm dữ liệu vào database
   public function store()
   {
      $data = $_POST;
      // xử lý ảnh
      //   $file = $_FILES['img'];
      //   //lấy tên ảnh
      //   $image = $file['name'];
      //   //upload
      //   move_uploaded_file($file['tmp_name'], "images/" . $image);
      //   $data['img'] = $image;
      $errors = [];
      if ($data['hoten'] == "") {
         $errors['hoten'] = "Bạn cần nhập họ tên";
      }
      if ($data['user'] == "") {
         $errors['user'] = "Bạn cần nhập user";
      }
      if ($data['pass'] == "") {
         $errors['pass'] = "Bạn cần nhập mật khẩu";
      }
      if ($data['address'] == "") {
         $errors['address'] = "Bạn cần nhập tên địa chỉ";
      }
      if ($data['email'] == "") {
         $errors['email'] = "Bạn cần nhập email";
      }
      if ($data['tel'] == "") {
         $errors['tel'] = "Bạn cần nhập sđt";
      }
      if ($errors) {
         return $this->view("admin/user/create", ['errors' => $errors, 'data' => $data]);
      }
      //isert
      UserModel::insert($data);
      setcookie("message", "Thêm tài khoản thành công", time() + 2);

      header("Location: " . ROOT_PATH . "user/list");
      die;
   }
   public function edit()
   {
      $id = $_GET['id'];
      $userkh = UserModel::find($id);

      return $this->view(
         "admin/user/edit",
         [
            'userkh' => $userkh
         ]
      );
   }
   //phương thức cập nhật dữ liệu
   public function update()
   {
      $data = $_POST;
      // xử lý ảnh
      //   $file = $_FILES['img'];
      //   //kiểm tra xem có cập nhật ảnh không
      //   if($file['size'] > 0){
      //      $image = $file['name'];
      //      //upload
      //      move_uploaded_file($file['tmp_name'], "images/" . $image);
      //      $data['img'] = $image;
      //   }
      // cap nhat du lieu
      UserModel::update($data['id'], $data);
      setcookie("message", "Cập nhật tài khoản thành công", time() + 2);

      // chuyen huong website ve lai form edit
      header("Location: " . ROOT_PATH . "user/list");
      //   header("Location: " . ROOT_PATH . "product/edit?id=". $data['id']);
      die;
   }
   //xóa dữ liệu
   public function delete()
   {
      $id = $_GET['id'];
      UserModel::delete($id);
      setcookie("message", "Xóa tài khoản thành công", time() + 2);
      header("Location: " . ROOT_PATH . "user/list");
      die;
   }
}
