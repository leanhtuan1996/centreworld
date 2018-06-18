
   <?php
      		
          $ID_k = isset($_GET['ID_k']) ? $_GET['ID_k'] : '';    	
          $kiot = getkiottById($ID_k);       
          $error_add = array();  
          if(is_submit('editkiot')){
            $name_k = input_post('name_k');
            $price =  input_post('price');
            $description =  input_post('description');
            $status =  input_post('status');
            $id_floor =  input_post('id_floor');
            $image_ori = $_FILES['fImg']['name'];
            $image_add ='';
            if (empty($image_ori)){
              $error_add['image'] = 'Hình sản phẩm không được để trống';
          }else{
              $image_add = "customer/$image_ori";
          }
          $kiot_edit = array(
            'name_k' => $name_k,
            'ID_k' => $ID_k,
            'price' => $price,
            'description' => $description,
            'status' => $status,
            'id_floor' =>$id_floor,
            'image' => $image_add,
            );
        
            $error = db_kiot_validate($kiot_edit);
            if(!$error){
              $error = editkiot($kiot_edit);
              move_uploaded_file($_FILES['fImg']['tmp_name'], "../customer/$image_ori");
            }
            echo '<script language="javascript">';
            echo 'window.location.href = "index.php?page=kiot"';
            echo '</script>';

          }
         ?>
        
        <section class="content">

           <!-- /.box-header -->
           <div class="box-body wizard-content">
             
           <form action="" method="POST"enctype="multipart/form-data" class="form-horizontal row-fluid">   
                         	  <!-- SHOW ERROR -->
                            <?php if(isset($error_add['name_k'])) { ?>
                            <?php show_error($error, 'name_k') ?>
                            <?php }  
                            ?>
                    <?php if(isset($error_add['price'])) { ?>
                            <?php show_error($error, 'price') ?>
                            <?php }  
                            ?>
                    <?php if(isset($error_add['description'])) { ?>
                            <?php show_error($error, 'description') ?>
                            <?php }  
                            ?>
                               <?php if(isset($error_add['id_floor'])) { ?>
                            <?php show_error($error, 'id_floor') ?>
                            <?php }  
                            ?>
                                <?php if(isset($error_add['status'])) { ?>
                            <?php show_error($error, 'status') ?>
                            <?php }  
                            ?>
                    <?php if(isset($error['editkiot'])) { ?>
                            <?php show_error($error, 'editkiot') ?>
                            <?php }  
                            ?>  
           <!-- Step 1 -->
           <h6 id="steps-uid-0-h-0" tabindex="-1" class="title current">Personal Info</h6>
           <section id="steps-uid-0-p-0" role="tabpanel" aria-labelledby="steps-uid-0-h-0" class="body current" aria-hidden="false" style="">
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="firstName5"> vị trí :</label>
                   <input type="text" class="form-control" name = "name_k" value="<?php echo $kiot['name_k']?>"  > </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="lastName1">Giá :</label>
                   <input type="text" class="form-control" name = "price" value="<?php echo $kiot['price']?>" > </div>
               </div>
             </div>
             <div class="form-group">
             <label>Tên thương hiệu</label>
             <textarea class="form-control" rows="3" name = "description" value="<?php echo $kiot['description']?>"  ></textarea>
           </div>
             <div class="row">
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="location3">Vị trí tầng:</label>
                   <select class="custom-select form-control" name="id_floor">
                   <option name ="id_floor" value="1">khu mua sắm</option>
                   <option name ="id_floor" value="2">khu ăn uống</option>
                   <option name ="id_floor" value="3">khu vui chơi</option>
                   </select>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="date1">Status :</label>
                   <select class="custom-select form-control"  name="status">
                    <option name ="status" value="0">Còn trống</option>
                    <option name ="status" value="1">Đã thuê</option>
                   </select>
               </div>
             </div>
             </div>
             <div class="row">
               <div class="col-md-12">
                <div class="form-group">
						  <input type="file" name="fImg"class="form-control" required="" aria-invalid="false">
              </div>
               </div>
              
           </section>
           <div class="text-xs-right">
            <button type="submit" class="btn btn-info">Submit</button>
            <input type="hidden" name="request_name" value="editkiot"/>
					</div>
           </div>
           <!-- /.box-body -->
         </div>
         </form>
    
         <!-- /.box -->


        