<?php include_once "./app/Views/admin/header.php";?>

              <div class="col-md-9 mt-3">
                <h1 class="text-center">Thêm sản phẩm</h1>
                <form action="" method="post" enctype="multipart/form-data">
           <div class="form-group">
            <label>Tên danh mục</label>
            <input type="text" class="form-control" name="name" value="<?= $category->name?>" >
        </div>
        <input type="hidden" name="id" value="<?= $category->id ?>">
        <button type="submit" class="btn btn-primary mt-2">Cập nhật</button>

    </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>