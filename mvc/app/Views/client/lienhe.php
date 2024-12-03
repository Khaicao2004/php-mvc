<?php require "header.php" ?>
<div class="col-12">
          <img src="images/anh8.jpg" alt="" width="100%" height="200px">
        </div>
      </div>
<div class="container ">
<div class="row mt-4 d-flex justify-content-center">
  <h2 class="text-center">Liên hệ</h2>
<form class="w-50">
        <div class="form-group">
          <label for="name">Họ và tên</label>
          <input type="text" class="form-control" id="name">
        </div>
      
        <div class="form-group">  
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email">
        </div>
      
        <div class="form-group">
          <label for="message">Nội dung</label>
          <textarea class="form-control" id="message"></textarea>
        </div>
      
        <button type="submit" class="btn btn-primary mt-4">Gửi</button>
      </form>
</div>
</div>

<?php require "footer.php" ?>
