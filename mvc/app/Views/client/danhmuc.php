<?php require "header.php" ?>

<main>
  <div class="row">
    <div class="col-12">
      <img src="images/anh8.jpg" alt="" width="100%" height="200px">
    </div>
  </div>
  <div class="container text-center ">

    <div class="col-12 mt-5">
      <h2>Tất cả sản phẩm</h2>
    </div>

    <div class="row mt-4">
      <div class="col-3 mt-4">
     
        <div class="box-left">
          <ul class="nav flex-column">
            <?php foreach ($categories as $cate) : ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= ROOT_PATH ?>danhmuc?iddm=<?= $cate->id ?>" style="color: black;"><?= $cate->name ?></a>
              </li>
            <?php endforeach ?>
            
            <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" style="color: black;">LIKE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;">ADIDAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;">CONVERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;">PUMA</a>
        </li>  -->
          </ul>
        </div>
        <form action="" class="d-flex mt-5">
        <input type="text"class="me-1" name="timkiem">
<input type="submit" value="Search" name="btnGui" style="width: 70px;">
        </form>
      </div>
     
      <div class="col-9">

        <div class="row">
          <?php foreach ($products as $pro) : ?>

            <div class="col-12 col-md-6 col-lg-4 pe-4 mt-4">
              <div class="product-img">
                <a href="<?= ROOT_PATH ?>detail?id=<?= $pro->id ?>"><img src="images/<?= $pro->img ?>" class="img-fluid" alt="" /></a>
              </div>
              <div class="product-item">
                <a href="<?= ROOT_PATH ?>detail?id=<?= $pro->id ?>" style=" text-decoration: none;color: black;">
                  <h5 class="product-name mt-2"><?= $pro->name ?></h5>
                </a>
                <div class="d-flex container">
                  <h5 class="product-price me-2" style="color: red;"><?= $pro->price ?>VNĐ</h5>
                  <h6 class="product-price" style="color: gray; text-decoration: line-through"><?= $pro->price ?>VNĐ</h6>
                </div>
                <button class="btn btn-outline-success me-2" type="button">Mua ngay</button>
              </div>
            </div>

          <?php endforeach ?>

          <!-- <div class="col-12 col-md-6 col-lg-4 pe-4">
        <div class="product-img">
          <a href="index.php?ctl=chitietsanpham"><img src="upload/anhsp1.jpg" class="img-fluid" alt="" /></a>
        </div>
        <div class="product-item">
          <h5 class="product-name mt-2">Chunky Liner NY</h5>
          <h6 class="product-price"> 1.900.000 VNĐ</h6>
          <button class="btn btn-outline-success me-2 mb-5" type="button">Mua ngay</button>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 pe-4">
        <div class="product-img">
          <a href="index.php?ctl=chitietsanpham"><img src="upload/anhsp1.jpg" class="img-fluid" alt="" /></a>
        </div>
        <div class="product-item">
          <h5 class="product-name mt-2">Chunky Liner NY</h5>
          <h6 class="product-price"> 1.900.000 VNĐ</h6>
          <button class="btn btn-outline-success me-2" type="button">Mua ngay</button>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 pe-4">
        <div class="product-img">
          <a href="index.php?ctl=chitietsanpham"><img src="upload/anhsp1.jpg" class="img-fluid" alt="" /></a>
        </div>
        <div class="product-item">
          <h5 class="product-name mt-2">Chunky Liner NY</h5>
          <h6 class="product-price"> 1.900.000 VNĐ</h6>
          <button class="btn btn-outline-success me-2 mb-5" type="button">Mua ngay</button>
        </div>
      </div> -->
        </div>
      </div>

    </div>
  </div>
</main>
<?php require "footer.php" ?>
