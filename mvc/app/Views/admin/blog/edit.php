<?php include_once "./app/Views/admin/header.php";?>

            <div class="col-md-9 mt-3">
                <h1 class="text-center">Thêm blog</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input type="text" class="form-control" name="tieu_de" value="<?= $blogbv->tieu_de ?>">
                    </div>
                    <div class="form-group">
                        <label>Tác giả</label>
                        <input type="text" class="form-control" name="tac_gia" value="<?= $blogbv->tac_gia ?>">
                    </div>

                    <div class="form-group mt-3">
                        <label>Ảnh sản phẩm</label><br>
                        <img src="<?= ROOT_PATH . "/images/" . $blogbv->anh_blog ?>" width="100" alt="" class="mt-2 mb-2"><br>
                        <input type="file" class="form-control-file" name="anh_blog">
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <input type="text" class="form-control" name="noi_dung" value="<?= $blogbv->noi_dung ?>">
                    </div>
                    <input type="hidden" name="id" value="<?= $blogbv->id ?>">
                    <button type="submit" class="btn btn-primary mt-2">Cập nhật</button>

                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>