<?php

namespace App\Controllers;

use App\Models\CommentModel;

class CommentController extends BaseController
{
   //hiển thị danh sách sản phẩm
   public function index()
   {
      $comments = CommentModel::all();
      //lay thong tin message
      $message = $_COOKIE['message']  ?? "";
      return $this->view("admin/comment/list", ['message' => $message, 'comments' => $comments]);
      
   }

   //xóa dữ liệu
   public function delete(){
      $id = $_GET['id'];
      CommentModel::delete($id);
      setcookie("message", "Xóa commnet thành công", time() + 2);
      header("Location: " . ROOT_PATH . "comment/list");
      die;
   }
}
