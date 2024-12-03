<?php include_once "./app/Views/admin/header.php";?>

              <div class="col-md-9">
              <a href="<?= ROOT_PATH ?>blog/create" > <button type="button" class="btn btn-success mt-4 mb-4">Create<i class="fa-regular fa-square-plus mx-2"></i></button></a>
                <table class="table table-hover table-bordered">
                    <thead>
                      <tr class="text-center align-middle">
                        <th scope="col">STT</th>
                        <th scope="col">#ID</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Nội dung</th>

                        <th class="text-center"  colspan="2">Hành động</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <?php
                      $stt = 1;
                      foreach ($blogs as $blog) :?>  
                        <tr class="text-center align-middle">
                        <th><?=$stt?></th>
                        <td><?=$blog->id?></td>
                        <td><?=$blog->tieu_de?></td>
                        <td><?=$blog->tac_gia?></td>
                        <td><img src="<?= "../images/" . $blog->anh_blog?>" alt="" width="80" height="60"></td>
                        <td><?=$blog->noi_dung?></td>

                        <td class="text-center"><a href="<?= ROOT_PATH ?>blog/edit?id=<?= $blog->id ?>"><i class="fa-solid fa-pen-to-square" style="font-size: 20px;"></i></a></td>  
                        <td class="text-center"><a href="<?= ROOT_PATH ?>blog/delete?id=<?= $blog->id ?>" onclick=" return confirm('Bạn có muốn xóa blog không?')"><i class="fa-regular fa-trash-can" style="font-size: 20px; color: red;"></i></a></td>
                      </tr>
                      
                      <?php
                      $stt++;
                     endforeach;?> 
                      <!-- <tr>
                        <th>2</th>
                        <th>Jacob</th>
                        <th>Thornton</th>
                        <th>@fat</th>
                        <th>@fat</th>
                        <th>@fat</th>
                        <th class="text-center"><a href=""><i class="fa-solid fa-pen-to-square" style="font-size: 20px;"></i></a></th>  
                        <th class="text-center"><a href=""><i class="fa-regular fa-trash-can" style="font-size: 20px; color: red;"></i></a></th>
                      </tr> -->
                    </tbody>
                  </table>
              </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>