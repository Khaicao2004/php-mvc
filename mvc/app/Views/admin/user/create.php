<?php include_once "./app/Views/admin/header.php";?>

              <div class="col-md-9 mt-3">
                <h1 class="text-center">Thêm tài khoản</h1>
                <form action="<?= ROOT_PATH ?>user/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Tên khách hàng</label>
            <input type="text" class="form-control" name="hoten" placeholder="Nhập tên khách hàng">
            <span style="color: red;"><?= $errors['hoten'] ?? '' ?></span><br>

        </div>
        <div class="form-group">
        <label>Username</label>
            <input type="text" class="form-control" name="user" placeholder="Nhập username">
            <span style="color: red;"><?= $errors['user'] ?? '' ?></span><br>

        </div>

        <div class="form-group">
        <label>Password</label>
            <input type="text" class="form-control" name="pass" placeholder="Nhập password">
            <span style="color: red;"><?= $errors['pass'] ?? '' ?></span><br>

        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="Nhập email">
            <span style="color: red;"><?= $errors['email'] ?? '' ?></span><br>

        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ">
            <span style="color: red;"><?= $errors['address'] ?? '' ?></span><br>

        </div>
        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="tel" class="form-control" name="tel" placeholder="Nhập số điện thoại"></input>
            <span style="color: red;"><?= $errors['tel'] ?? '' ?></span><br>

        </div>

        <button type="submit" class="btn btn-primary mt-2">Thêm mới</button>

    </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>