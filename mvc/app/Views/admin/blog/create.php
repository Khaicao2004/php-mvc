<?php include_once "./app/Views/admin/header.php"; ?>

<div class="col-md-9 mt-3">
    <h1 class="text-center">Thêm blog</h1>
    <form action="<?= ROOT_PATH ?>blog/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Tiêu đề</label>
            <input type="text" class="form-control" name="tieu_de" placeholder="Nhập tiêu đề blog">
            <span style="color: red;"><?= $errors['tieu_de'] ?? '' ?></span><br>
        </div>
        <div class="form-group">
            <label>Tác giả</label>
            <input type="text" class="form-control" name="tac_gia" placeholder="Nhập tên tác giả">
            <span style="color: red;"><?= $errors['tac_gia'] ?? '' ?></span><br>
        </div>

        <div class="form-group">
            <label>Ảnh</label>
            <input type="file" class="form-control" name="anh_blog">
        </div>
        <div class="form-group">
            <label>Nội dung</label>
            <input type="text" class="form-control" name="noi_dung" placeholder="Nhập nội dung blog">
            <span style="color: red;"><?= $errors['noi_dung'] ?? '' ?></span><br>

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