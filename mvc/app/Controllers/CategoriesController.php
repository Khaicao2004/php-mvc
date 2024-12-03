<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class CategoriesController extends BaseController
{
   //hiển thị danh sách sản phẩm
   public function index()
   {
      $categories = CategoryModel::all();
      //lay thong tin message
      $message = $_COOKIE['message']  ?? "";
      return $this->view("admin/categories/list", ['message' => $message, 'categories' => $categories]);
      
   }
   //hiển thị form thêm sản phẩm
   public function create()
   {
      $categories = CategoryModel::all();
      $message = $_COOKIE['message']  ?? "";
      return $this->view("admin/categories/create", ['categories' => $categories]);
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
      //isert
      $errors = [];
      if ($data['name'] == "") {
         $errors['name'] = "Bạn cần nhập tên danh mục";
      }
      
     
      if ($errors) {
         return $this->view("admin/categories/create", ['errors' => $errors, 'data' => $data]);
      }
      CategoryModel::insert($data);
      setcookie("message", "Thêm danh mục thành công", time() + 2);
      header("Location: " . ROOT_PATH . "categories/list");
   }
   public function edit()
   {
      $id = $_GET['id'];
      $category = CategoryModel::find($id);
      $message = $_COOKIE['message']  ?? "";
      return $this->view(
         "admin/categories/edit",
         [
            'category' => $category
         ]
      );
   }
   //phương thức cập nhật dữ liệu
   public function update(){
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
      CategoryModel::update($data['id'],$data);
      setcookie("message", "Cập nhật danh mục thành công", time() + 2);
     // chuyen huong website ve lai form edit
     header("Location: ". ROOT_PATH . "categories/list");
   //   header("Location: " . ROOT_PATH . "product/edit?id=". $data['id']);
     die;
   }
   //xóa dữ liệu
   public function delete(){
      $id = $_GET['id'];
      CategoryModel::delete($id);
      setcookie("message", "Xóa danh mục thành công", time() + 2);
      header("Location: " . ROOT_PATH . "categories/list");
      die;
   }
}
