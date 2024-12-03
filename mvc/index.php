<?php

use App\Controllers\BlogController;
use App\Controllers\CategoriesController;
use App\Controllers\CommentController;
use App\Router;
use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\UserController;

require_once __DIR__ . "/env.php";
require_once __DIR__ . "/config.php";

require_once __DIR__ . "/vendor/autoload.php";


$router = new Router;
Router::get("/", [HomeController::class,'index']);
Router::get("/home", [HomeController::class,'index']);


Router::get("/detail", [HomeController::class, 'detail']);
Router::post("/detail", [HomeController::class,'binhluan']);


Router::get("/register", [HomeController::class, 'register']);
Router::post("/register", [UserController::class, 'register']);
Router::get("/logout", [HomeController::class, 'logout']);  


Router::get("/login", [HomeController::class, 'login']);
Router::post("/login", [UserController::class, 'login']);
Router::get("/gioithieu", [HomeController::class, 'gioithieu']);
Router::get("/lienhe", [HomeController::class, 'lienhe']);
Router::get("/danhmuc", [HomeController::class, 'danhmuc']);
Router::get("/tintuc", [HomeController::class, 'tintuc']);


//router admin(product)
Router::get("/product/list",[ProductController::class, 'index']);
Router::get("/product/create",[ProductController::class, 'create']);
Router::post("/product/create",[ProductController::class, 'store']);
Router::get("/product/edit",[ProductController::class, 'edit']);
Router::post("/product/edit",[ProductController::class, 'update']);

//xoa du lieu
Router::get("/product/delete",[ProductController::class, 'delete']);

//category
Router::get("/categories/list",[CategoriesController::class, 'index']);
Router::get("/categories/create",[CategoriesController::class, 'create']);
Router::post("/categories/create",[CategoriesController::class, 'store']);
Router::get("/categories/edit",[CategoriesController::class, 'edit']);
Router::post("/categories/edit",[CategoriesController::class, 'update']);

//xoa du lieu
Router::get("/categories/delete",[CategoriesController::class, 'delete']);

//khachhang
Router::get("/user/list",[UserController::class, 'index']);
Router::get("/user/create",[UserController::class, 'create']);
Router::post("/user/create",[UserController::class, 'store']);
Router::get("/user/edit",[UserController::class, 'edit']);
Router::post("/user/edit",[UserController::class, 'update']);

//xoa du lieu
Router::get("/user/delete",[UserController::class, 'delete']);

//blog
//khachhang
Router::get("/blog/list",[BlogController::class, 'index']);
Router::get("/blog/create",[BlogController::class, 'create']);
Router::post("/blog/create",[BlogController::class, 'store']);
Router::get("/blog/edit",[BlogController::class, 'edit']);
Router::post("/blog/edit",[BlogController::class, 'update']);

//xoa du lieu
Router::get("/blog/delete",[BlogController::class, 'delete']);

//bình luận
Router::get("/comment/list",[CommentController::class, 'index']);


//xoa du lieu
Router::get("/comment/delete",[CommentController::class, 'delete']);
$router->resolve();



