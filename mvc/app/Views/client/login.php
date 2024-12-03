<?php require "header.php" ?>

<div class="row">
        <div class="col-12">
          <img src="images/anh8.jpg" alt="" width="100%" height="200px">
        </div>
      </div>
<div class="container w-50">
  <form class="text text-start" method="post" action="<?= ROOT_PATH ?>login">>
    <h2 class="text-center mt-5">Đăng nhập</h2>
    <div class="form-group mt-4">
          <label for="text">Tên đăng nhập</label>
          <input type="text" class="form-control" name="user_name" />
        </div>

    <div class="form-group">
      <label for="password">Mật khẩu</label>
      <input type="password" class="form-control" name="pass"/>
    </div>
    <!-- <div class="row d-flex">
      <div class="col-7">
        <h5>Bạn chưa có tài khoản?<a href="dangky.html"> Đăng ký</a></h5>
      </div>
      <div class="col-1"></div>
      <div class="col-4">
        <h5><a href="">Quên mật khẩu</a></h5>
      </div>
    </div> -->
    <button type="submit" name="login" class="btn btn-primary mt-3">Đăng nhập</button>
  </form>
</div>
<?php require "footer.php" ?>
