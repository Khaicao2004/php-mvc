
<?php require "header.php" ?>

<div class="row">
        <div class="col-12">
          <img src="images/anh8.jpg" alt="" width="100%" height="200px">
        </div>
      </div>
    <div class="container w-50">
      <form class="text text-start" method="post" action="">
        <h2 class="text-center mt-5">Đăng ký</h2>
        <div class="form-group mt-4">
          <label for="text">Họ tên</label>
          <input type="text" class="form-control" name="hoten" />
        </div>
        <div class="form-group mt-4">
          <label for="text">Tên đăng nhập</label>
          <input type="text" class="form-control" name="user" />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" />
        </div>

        <div class="form-group">
          <label for="password">Mật khẩu</label>
          <input type="password" class="form-control" name="pass" />
        </div>
        <!-- <div class="form-group">
          <label for="password">Nhập lại mật khẩu</label>
          <input type="password" class="form-control" name="repass" />
        </div> -->
        <div class="form-group mt-4">
          <label for="text">Địa chỉ</label>
          <input type="text" class="form-control" name="address" />
        </div>
        <div class="form-group mt-4">
          <label for="text">Số điện thoại</label>
          <input type="number" class="form-control" name="tel" />
        </div>
        <!-- <div class="row d-flex">
          <div class="col-7">
            <h5>Bạn đã có tài khoản?
            <a href="#"> Đăng nhập</a>
            </h5>
          </div>
        </div> -->
        <button type="submit" class="btn btn-primary mt-3" >Đăng ký</button>
      </form>
    </div>

  
    <?php require "footer.php" ?>
