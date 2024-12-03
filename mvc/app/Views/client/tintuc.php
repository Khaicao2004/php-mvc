<?php require "header.php" ?>
<div class="row">
        <div class="col-12">
          <img src="images/anh8.jpg" alt="" width="100%" height="200px">
        </div>
      </div>
<div class="row mt-5" style="background-color:cornsilk;">
    <?php foreach ($tintucblog as $blog) :?>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 pe-4">
<div class="tintuc-img">
    <img src="images/<?=$blog->anh_blog?>" alt="" width="100%" height="200px">
</div>
<h6 class="mt-2"><?=$blog->ngay_them?></h6>
<h4><?=$blog->tieu_de?></h4>
<p><?=$blog->noi_dung?></p>
    </div>
    <?php endforeach;?>
    <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-3 pe-4">
<div class="tintuc-img">
    <img src="images/anh1.jpg" alt="" width="100%" height="200px">
</div>
<h6>2024-01-30</h6>
<h4>TIN TUC</h4>
<p>fdfdfjdkfjdkfkdf</p>
    </div> -->
    <!-- <div class="col-12 col-lg-3">
<div class="tintuc-img">
    <img src="images/anh1.jpg" alt="" width="100%" height="200px">
</div>
<h6>2024-01-30</h6>
<h4>TIN TUC</h4>
<p>fdfdfjdkfjdkfkdf</p>
    </div>
    <div class="col-12 col-lg-3">
<div class="tintuc-img">
    <img src="images/anh1.jpg" alt="" width="100%" height="200px">
</div>
<h6>2024-01-30</h6>
<h4>TIN TUC</h4>
<p>fdfdfjdkfjdkfkdf</p>
    </div>
    <div class="col-12 col-lg-3">
<div class="tintuc-img">
    <img src="images/anh1.jpg" alt="" width="100%" height="200px">
</div>
<h6>2024-01-30</h6>
<h4>TIN TUC</h4>
<p>fdfdfjdkfjdkfkdf</p>
    </div> -->
</div>
<div class="container mt-5">
    
<div class="row">
    <div class="col-3">
    <img src="images/<?=$blog->anh_blog?>" alt="" width="100%" height="200px">
    </div>
        <div class="col-9">
            <h2><?=$blog->tieu_de?></h2>
            <p><?=$blog->noi_dung?></p>
        </div>
    </div>
    
    </div>
    <?php require "footer.php" ?>
