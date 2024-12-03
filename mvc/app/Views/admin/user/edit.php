<?php include_once "./app/Views/admin/header.php";?>

              <div class="col-md-9 mt-3">
                <h1 class="text-center">Cập nhật tài khoản</h1>
                <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Tên khách hàng</label>
            <input type="text" class="form-control" name="hoten" value="<?=$userkh->hoten?>">
        </div>
        <div class="form-group">
        <label>Username</label>
            <input type="text" class="form-control" name="user" value="<?=$userkh->user?>">
        </div>

        <div class="form-group">
        <label>Password</label>
            <input type="text" class="form-control" name="pass" value="<?=$userkh->pass?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="<?=$userkh->email?>">
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input type="text" class="form-control" name="address" value="<?=$userkh->address?>">
        </div>
        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="tel" class="form-control" name="tel" value="<?=$userkh->tel?>"></input>
        </div>
        <input type="hidden" name="id" value="<?= $userkh->id ?>">
        <button type="submit" class="btn btn-primary mt-2">Cập nhật</button>

    </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>