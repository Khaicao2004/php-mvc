<?php include_once "./app/Views/admin/header.php";?>

              <div class="col-md-9 mt-3">
                <h1 class="text-center">Thêm sản phẩm</h1>
                <form action="<?= ROOT_PATH ?>categories/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục">
            <span style="color: red;"><?= $errors['name'] ?? '' ?></span><br>

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