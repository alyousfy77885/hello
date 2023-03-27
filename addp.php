<?php 
include "v.php";
session_start();
if(!isset($_SESSION['uid'])){echo"<script type='text/javascript'>
					 location.href='store.php'
					</script>";
				}

?>
 
  <!-- End Navbar -->
      <div class="content" dir="rtl" style="text-align:right">
        <div class="container-fluid" dir="rtl">
          <form action="ap.php" method="post" type="form" name="form" enctype="multipart/form-data" dir="rtl">
          <div class="row">
          
                
         <div class="col-md-7">
            <div class="card">
              <div class="card-header card-header-primary">
                <h3 class="title" style="text-align:center;border-bottom: 2px solid cornflowerblue;padding:6px">اضافه اعلان</h3>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group" dir="rtl">
                        <label>اسم المنتج</label>
                        <input type="text" id="product_name" required name="product_name" class="form-control">
                      </div>
                    </div>
                                      <div class="col-md-12">
                      <div class="form-group">
                   
<select  class="form-control" name="product_type" style="height:40px" required>
        <option value="">اختر نوع الصنف</option>
        <?php 
        $sql =  "SELECT * FROM categories";
        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($result)){
        echo "<option value=\"".$row["cat_title"]."\"";
        if($_POST['name'] == $row['cat_title'])
        echo 'selected';
        echo ">".$row["cat_title"]."</option>";
        }
        ?></select></div></div>
                     <div class="col-md-12">
                      <div class="form-group">
                        <label>الوصف</label>
                        <textarea rows="4" cols="80" id="details" required name="details" class="form-control"></textarea>
                      </div>
                    </div>   <div class="col-md-12">
                      <div class="form-group">
                   
                  <div class="card">
  <div class="card-section">
    <div class="clearfix">
      <!---<div cla0ss="pull-right">
        <input type="file" name="picturre" id="fileToUpload">
      </div>---->
      <hr />
      <div class="pull-right">
        <input class="upload_file" type="file" name="picture" id="fileToUpload" style="">
        <div class="item-images clearfixc" style="">
          <div class="empty-text"  style="width:50%">
            صوره المنتج
          </div>
        </div>
      </div>
    </div>
    <hr />
  </div>
</div></div></div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>السعر</label>
                        <input type="number" id="price" name="price" required class="form-control" >
                      </div>
                    </div>
                  </div>
                 
                  
                
              </div>
              
            </div>
          </div>
          <div class="col-md-5">
            <div class="card">
              <div class="card-header card-header-primary">
                <h5 class="title"></h5>
              </div>
              <div class="card-body">
                
                  <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>معلومات التواصل</label>
                        <input type="number" id="product_type" name="con"  class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">اسم الشركه</label>
                        <input type="text" id="brand" name="comp" required class="form-control">
                      </div>
                    </div>
                     
                  
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>العنوان</label>
                        <input type="text" id="tags" name="loc" required class="form-control" >
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="card-footer">
                  <button type="submit" id="btn_save" name="btn_save" required class="btn btn-fill btn-primary">اضافه</button>
              </div>
            </div>
          </div>
          
        </div>
         </form>
          
        </div>
      </div>
      <?php
include "footer.php";
?>

