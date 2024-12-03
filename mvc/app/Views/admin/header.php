<?php 
if(!isset($_COOKIE['user_name']) || !isset($_COOKIE['role'])){
  setcookie("message", "Vui lòng đăng nhập tài khoản Admin", time() + 2);
  header("location: ".ROOT_PATH."login");
  die;
}
?>
<?php if(!empty($message)):?>
<script>
    alert(
        '<?= $message?>'
    );
</script>
<?php endif;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/PHP2/BTVN/ASS2/mvc/app/Views/admin/assets/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/78e4473a65.js" crossorigin="anonymous"></script>
</head>
<style>
    .list-group-item {
  border-radius: 0;
}

.list-group-item:hover {
  background: #f5f5f5;
}
a{
    text-decoration: none;
}
/* Mũi tên cho đường dẫn con */
.list-group .sub-menu {
  padding-left: 20px;  
}
.anh_user{
    border-radius: 100px;
}
/* Sidebar */
.app-sidebar {
background: #fff;
box-shadow: 0px 0px 10px rgba(0,0,0,0.05);
}

/* User avatar */
.app-sidebar__user {
padding: 20px;
}

.anh_user {
width: 50px;
height: 50px;
object-fit: cover;
border-radius: 50%;
}

/* User info */
.app-sidebar__user-name,
.app-sidebar__user-designation {
margin: 0;
color: #555;
}

/* Menu */
.list-group {
margin-bottom: 0;
}

.list-group-item {
padding: 15px 20px;
border: none;
border-radius: 0;
}

.list-group-item i {
margin-right: 10px;
}

.list-group-item:hover {
background: #f5f5f5;
}

@media(max-width: 768px) {
.app-sidebar__user {
padding: 15px;
}

.anh_user {
width: 40px;
height: 40px;
}
}
</style>
<body>
    <div class="container-fluid">
        <div class="row ">
        <div class="col-md-3 " style="background-color: aqua; height: 100vh;">
                <!-- <div class="app-sidebar__user  ">
                    <img class="anh_user d-flex mx-auto" src="../images/anh1.jpg" style="height: 70px; width: 70px; background-repeat: no-repeat; background-size: cover;" alt="Hình ảnh người dùng">
                      <div>
                        <p class="app-sidebar__user-name text-center">
                          <b>
                            <font style="vertical-align: inherit">
                              <font style="vertical-align: inherit">khaiem406</font>
                            </font>
                          </b>
                        </p>
                        <p class="app-sidebar__user-designation text-center">
                          <font style="vertical-align: inherit">
                            <font style="vertical-align: inherit">Chào mừng trở lại</font>
                          </font>
                        </p>
                      </div>
                    </div><hr> -->
                <ul class="list-group mt-5">
                  <li class="list-group-item"><i class="fa-solid fa-user"></i>
                    <a href="<?= ROOT_PATH . "user/list" ?>">Quản lý tài khoản</a>
                  </li>
                  <li class="list-group-item"><i class="fa-brands fa-product-hunt"></i>
                    <a href="<?= ROOT_PATH . "product/list" ?>">Quản lý sản phẩm</a>
                  </li>
                  <li class="list-group-item"><i class="fa-solid fa-newspaper"></i>
                    <a href="<?= ROOT_PATH . "blog/list" ?>">Quản lý bài viết</a> 
                  </li>
              
                  <li class="list-group-item"><i class="fa-solid fa-list"></i>
                    <a href="<?= ROOT_PATH . "categories/list" ?>">Quản lý danh mục</a>
                  </li>
                  <li class="list-group-item"><i class="fa-solid fa-comment"></i>
                    <a href="<?= ROOT_PATH . "comment/list" ?>">Quản lý bình luận</a>
                  </li>
                  <li class="list-group-item"><i class="fa-solid fa-newspaper"></i>
                    <a href="<?= ROOT_PATH . "home" ?>">Quay lại trang User</a> 
                  </li>
                  <li class="list-group-item"><i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <a href="<?= ROOT_PATH . "logout" ?>">Đăng xuất</a> 
                  </li>
                </ul>
              
              </div>