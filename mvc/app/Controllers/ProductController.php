<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
   //hiển thị danh sách sản phẩm
   public function index()
   {
      $categories = CategoryModel::all();
      $products = ProductModel::all();
      //lay thong tin message
      $message = $_COOKIE['message']  ?? "";
      return $this->view("admin/products/list", ['products' => $products, 'message' => $message, 'categories' => $categories]);
      
   }
   //hiển thị form thêm sản phẩm
   public function create()
   {
      $categories = CategoryModel::all();
      $message = $_COOKIE['message']  ?? "";
      return $this->view("admin/products/create", ['categories' => $categories]);
   }
   //thêm dữ liệu vào database
   public function store()
   {
      $data = $_POST;
      // xử lý ảnh
      $file = $_FILES['img'];
      //lấy tên ảnh
      $image = $file['name'];
      //upload
      move_uploaded_file($file['tmp_name'], "images/" . $image);
      $data['img'] = $image;
      $errors = [];
      if ($data['name'] == "") {
         $errors['name'] = "Bạn cần nhập tên sản phẩm";
      }
      if ($data['price'] == "") {
         $errors['price'] = "Bạn cần nhập giá";
      }
      if ($data['soluong'] == "") {
         $errors['soluong'] = "Bạn cần nhập số lượng";
      }
      if ($data['mota'] == "") {
         $errors['mota'] = "Bạn cần nhập mô tả";
      }
      if ($errors) {
         return $this->view("admin/products/create", ['errors' => $errors, 'data' => $data]);
      }
      //isert
      ProductModel::insert($data);
      setcookie("message", "Thêm sản phẩm thành công", time() + 2);
      header("Location: " . ROOT_PATH . "product/list");
   }
   public function edit()
   {
      $id = $_GET['id'];
      $product = ProductModel::find($id);
      $categories = CategoryModel::all();
      $message = $_COOKIE['message']  ?? "";
      return $this->view(
         "admin/products/edit",
         [
            'product' => $product,
            'categories' => $categories
         ]
      );
   }
   //phương thức cập nhật dữ liệu
   public function update(){
      $data = $_POST;
      // xử lý ảnh
      $file = $_FILES['img'];
      //kiểm tra xem có cập nhật ảnh không
      if($file['size'] > 0){
         $image = $file['name'];
         //upload
         move_uploaded_file($file['tmp_name'], "images/" . $image);
         $data['img'] = $image;
      }
      // cap nhat du lieu
      ProductModel::update($data['id'],$data);
      setcookie("message", "Sửa sản phẩm thành công", time() + 2);

     // chuyen huong website ve lai form edit
     header("Location: ". ROOT_PATH . "product/list");
   //   header("Location: " . ROOT_PATH . "product/edit?id=". $data['id']);
     die;
   }
   //xóa dữ liệu
   public function delete(){
      $id = $_GET['id'];
      ProductModel::delete($id);
      setcookie("message", "Xóa sản phẩm thành công", time() + 2);
      header("Location: " . ROOT_PATH . "product/list");
      die;
   }
}
