<?php include_once "./app/Views/admin/header.php";?>

            <div class="col-md-9">
                <h1 class="text-center">Cập nhật sản phẩm</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" class="form-control" name="name" value="<?= $product->name ?>">
                    </div>

                    <div class="form-group mt-3">
                        <label>Danh mục</label>
                        <select class="form" name="iddm">
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category->id ?>" <?= $category->id == $product->iddm ? "selected" : '' ?>>
                                    <?= $category->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group mt-3">
                        <label>Ảnh sản phẩm</label><br>
                        <img src="<?= ROOT_PATH . "/images/" . $product->img ?>" width="100" alt="" class="mt-2 mb-2"><br>
                        <input type="file" class="form-control-file" name="img">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="number" class="form-control" name="price" value="<?= $product->price ?>">
                    </div>
                    <div class="form-group">
                        <label>Số lượng</label>
                        <input type="number" class="form-control" name="soluong" value="<?= $product->soluong ?>">
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="mota"><?= $product->mota ?></textarea>
                    </div>
                    <input type="hidden" name="id" value="<?= $product->id ?>">
                    <button type="submit" class="btn btn-primary mt-2">Cập nhật</button>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>