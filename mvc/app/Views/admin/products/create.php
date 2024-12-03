<?php include_once "./app/Views/admin/header.php";?>

              <div class="col-md-9 mt-3">
                <h1 class="text-center">Thêm sản phẩm</h1>
                <form action="<?= ROOT_PATH ?>product/create" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm">
            <span style="color: red;"><?= $errors['name']?? '' ?></span><br>
        </div>

        <div class="form-group mt-3">
            <label>Danh mục</label>
            <select class="form" name="iddm">
        <?php foreach($categories as $category):?>
            <option value="<?=$category->id?>"><?=$category->name?></option>
        <?php endforeach;?>  
            </select>
        </div>

        <div class="form-group mt-3">
            <label>Ảnh sản phẩm</label>
            <input type="file" class="form-control-file" name="img">
        </div>
        <div class="form-group">
            <label>Giá</label>
            <input type="number" class="form-control" name="price" placeholder="Nhập giá sản phẩm">
            <span style="color: red;"><?= $errors['price']?? '' ?></span><br>

        </div>
        <div class="form-group">
            <label>Số lượng</label>
            <input type="number" class="form-control" name="soluong" placeholder="Nhập số lượng sản phẩm">
            <span style="color: red;"><?= $errors['soluong']?? '' ?></span><br>

        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control" name="mota" placeholder="Nhập mô tả"></textarea>
            <span style="color: red;"><?= $errors['mota']?? '' ?></span><br>

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