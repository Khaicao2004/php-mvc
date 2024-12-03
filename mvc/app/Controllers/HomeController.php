<?php
namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\GetCategoryId;
use App\Models\ProductModel;
use App\Models\TinTucModel;
use App\Models\UserModel;

class HomeController extends BaseController{
    public function index(){
        // echo static::class;
        $products = ProductModel::all();
        $categories = CategoryModel::all();
        return $this->view(
            "client/home",
            ['products' => $products,
            'categories' => $categories]

        );
    }
    public function danhmuc(){
        // search

        if(isset($_GET['iddm']) && !empty($_GET['iddm'])){
            $id = $_GET['iddm'];
            $products = ProductModel::getAll()
            ->Where("iddm",'=',$id)
            ->get();
            $categories = CategoryModel::all();
            return $this->view("client/danhmuc",["products" => $products,"categories" => $categories]);
        }else{
            $products = ProductModel::all();
            $categories = CategoryModel::all(); 
            return $this->view("client/danhmuc",["products" => $products,"categories" => $categories]);
        }
    }
    public function detail(){
        $iduser = $_COOKIE['iduser']  ?? "";
        $message = $_COOKIE['message']  ?? "";
        $id = $_GET['id'];
        $product = ProductModel::find($id);
        $binhluan = CommentModel::getAll()
        ->Where("idpro",'=',$id)
        ->get();
        $users = UserModel::all();
        return $this->view(
            "client/detail",
            ['product' => $product, 'binhluan' => $binhluan, 'users' => $users, 'iduser' => $iduser,'message' => $message]
        );
       
    }
    
    public function login(){
        return $this->view("client/login"
        );
    }
    public function logout(){
        setcookie("user_name", "", time() - 3600);
        header("location: ".ROOT_PATH ."home");
        die;
    }
    public function register(){
        return $this->view("client/register"
        );
    }
    public function lienhe(){
        return $this->view("client/lienhe"
        );
    }
    public function gioithieu(){
        return $this->view("client/gioithieu"
        );
    }
    public function tintuc(){
        $tintucblog = BlogModel::all();
        return $this->view(
            "client/tintuc",
            ['tintucblog' => $tintucblog]
        );
    }
    public function binhluan(){
        $data = $_POST;
        $idsp = $data['idpro'];
        $noidung = $data['noidung'];
        if (!isset($_COOKIE['user_name'])) {
            setcookie("message", "Bạn cần đăng nhập để thực hiện bình luận", time() + 2);
            header("location: ".ROOT_PATH."login");
            die;
        }
        if (empty($noidung)) {
            setcookie("message", "Nội dung bình luận không được để trống", time() + 2);
            header("location: ".ROOT_PATH."detail?id={$idsp}");
            die;
        }else{
            $data['ngaybinhluan'] = date("Y-m-d");
            CommentModel::insert($data);
            header("location: ".ROOT_PATH."detail?id={$idsp}");
            die;
        }
    }
}
