<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
   //hiển thị danh sách sản phẩm
   public function index()
   {
      $blogs = BlogModel::all();
      //lay thong tin message
      $message = $_COOKIE['message']  ?? "";
      return $this->view("admin/blog/list", ['message' => $message, 'blogs' => $blogs]);
   }
   //hiển thị form thêm sản phẩm
   public function create()
   {
      $blogs = BlogModel::all();
      $message = $_COOKIE['message']  ?? "";
      return $this->view("admin/blog/create", ['blogs' => $blogs]);
   }
   //thêm dữ liệu vào database
   public function store()
   {
      $data = $_POST;
      //   xử lý ảnh
      $file = $_FILES['anh_blog'];
      //lấy tên ảnh
      $image = $file['name'];
      //upload
      move_uploaded_file($file['tmp_name'], "images/" . $image);
      $data['anh_blog'] = $image;
      //validate

      $errors = [];
      if ($data['tieu_de'] == "") {
         $errors['tieu_de'] = "Bạn cần nhập tiêu đề";
      }
      if ($data['tac_gia'] == "") {
         $errors['tac_gia'] = "Bạn cần nhập tên tác giả";
      }
      if ($data['noi_dung'] == "") {
         $errors['noi_dung'] = "Bạn cần nhập nội dung";
      }
      if ($errors) {
         return $this->view("admin/blog/create", ['errors' => $errors, 'data' => $data]);
      }
      //isert
      BlogModel::insert($data);
      setcookie("message", "Thêm blog thành công", time() + 2);
      header("Location: " . ROOT_PATH . "blog/list");
      die;
   }
   public function edit()
   {
      $id = $_GET['id'];
      $blogbv = BlogModel::find($id);
      $message = $_COOKIE['message']  ?? "";
      return $this->view(
         "admin/blog/edit",
         [
            'blogbv' => $blogbv
         ]
      );
   }
   //phương thức cập nhật dữ liệu
   public function update()
   {
      $data = $_POST;
      // xử lý ảnh
      $file = $_FILES['anh_blog'];
      //kiểm tra xem có cập nhật ảnh không
      if ($file['size'] > 0) {
         $image = $file['name'];
         //upload
         move_uploaded_file($file['tmp_name'], "images/" . $image);
         $data['anh_blog'] = $image;
      }

      // cap nhat du lieu
      BlogModel::update($data['id'], $data);
      setcookie("message", "Cập nhật blog thành công", time() + 2);
      // chuyen huong website ve lai form edit
      header("Location: " . ROOT_PATH . "blog/list");
      //   header("Location: " . ROOT_PATH . "product/edit?id=". $data['id']);
      die;
   }
   //xóa dữ liệu
   public function delete()
   {
      $id = $_GET['id'];
      BlogModel::delete($id);
      setcookie("message", "Xóa blog thành công", time() + 2);
      header("Location: " . ROOT_PATH . "blog/list");
      die;
   }
}
