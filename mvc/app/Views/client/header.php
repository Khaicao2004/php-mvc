<?php if (!empty($message)) : ?>
  <script>
    alert(
      '<?= $message ?>'
    );
  </script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="app/Views/client/assets/style.css" />
</head>

<body>
  <div class="container-fluid text-center ">
    <nav class="navbar navbar-expand-lg  bg-dark  "  data-bs-theme="dark">
      <div class="container-fluid ">
        <a class="navbar-brand ms-4" href="<?= ROOT_PATH ?>home"><img src="images/logo1.png" alt="" class="" width="60" height="60" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= ROOT_PATH ?>home" style="color: white;">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= ROOT_PATH ?>gioithieu" style="color: white;">Giới thiệu</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="<?= ROOT_PATH ?>danhmuc" style="color: white;">
                Sản phẩm
              </a>
              <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider" />
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul> -->
            </li>
            <li class="nav-item">
              <a href="<?= ROOT_PATH ?>lienhe" class="nav-link " style="color: white;">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a href="<?= ROOT_PATH ?>tintuc" class="nav-link " style="color: white;">Tin tức</a>
            </li>
          </ul>
         

          <?php
              if (isset($_COOKIE['user_name'])):?>
                <li class="nav-but ms-lg-4 me-2 mt-md-3 mt-lg-0">
                  <a class="btn btn btn-success" href="<?= ROOT_PATH . 'logout' ?>">Đăng xuất</a>
                </li>
              <?php endif;
            ?>
            <?php
              if (!isset($_COOKIE['user_name'])):?>
               <a href="<?= ROOT_PATH ?>login"><button class="btn btn-success me-2 mt-1" type="button">Đăng nhập</button></a>
          <a href="<?= ROOT_PATH ?>register"><button class="btn btn-success me-2 mt-1" type="button">Đăng ký</button></a>
              <?php endif;
            ?>

        </div>
      </div>
    </nav>