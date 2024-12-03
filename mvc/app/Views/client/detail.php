<?php require "header.php" ?>
<div class="row">
  <div class="col-12">
    <img src="images/anh8.jpg" alt="" width="100%" height="200px">
  </div>
</div>
<div class="container">
  <div class="row mt-5">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
      <div class="img-lienhe">
        <img src="images/<?= $product->img ?>" alt="" width="300px" height="300px" />
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
      <div class="lh-text text-center box_process pb-5">
        <h1><?= $product->name ?></h1>
        <div class="price-sp d-flex " style="margin-left: 140px;">
          <h4 style="color: red;" class="me-2"><?= $product->price ?>VNĐ </h4>
          <h5 style="text-decoration: line-through;color: grey;"><?= $product->price ?>VNĐ</h5>
        </div>

        <p>Mô tả: <?= $product->mota ?></p>
        <div class="custom custom-btn-numbers clearfix input_number_product">
          <h6>Số lượng:</h6>
          <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty) && qty > 1) result.value--;return false;" class="btn-minus btn btn-outline-danger" type="button">
            -
          </button>
          <input aria-label="Số lượng" type="text" class="qty input-text" id="qty" name="quantity" size="10" value="1" maxlength="3" style="padding: 3px 10px 5px;" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;" />
          <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" class="btn-plus btn btn-outline-success" type="button">
            +
          </button>
        </div>

        <button class="btn btn-success me-2 mt-2" type="button">Mua ngay</button>
      </div>
      <!-- <div class="form-group mt-5">
    <label for="comment">Bình luận:</label>
    <textarea class="form-control" id="comment"></textarea>
  </div>

  <button type="submit" class="btn btn-primary mt-2">Gửi</button> -->
      <div class="box-right-ctsp mb-5">
        <div class="row">
          <div class="col"></div>
          <div class="col-9">
            <div class="">
              <?php
              $co = 0;
              foreach ($binhluan as $bl) {
                foreach ($users as $userr) {
                  if ($userr->id == $bl->iduser) {
                    echo "<h5>$userr->user</h5><br>";
                    $co = 1;
                  }
                }
                echo "<p>$bl->noidung</p><hr>";
              }
              if ($co == 0) {
                echo "<h5>Chưa có bình luận nào</h5>";
              }
              ?>
            </div>
          </div>
          <div class="col"></div>
        </div>
      </div>
      <!-- form comment -->
      <form action="" method="post">
        <label for="floatingTextarea2">Comments</label>
        <input class="form-control" type="text" placeholder="Nhập nội dung bình luận" id="floatingTextarea2" style="height: 100px" name="noidung">
        <input type="hidden" name="idpro" id="" value="<?= $product->id ?>">
        <input type="hidden" name="iduser" id="" value="<?= $iduser ?>">
      </form>
    </div>
  </div>
</div>
<?php require "footer.php" ?>