<?php
      $error = array();
      if(is_submit('addkiot')){
          //Co ton tai
          $name_k = input_post('name_k');
          $price = input_post('price');
          $description = input_post('description'); 
          $image_ori = $_FILES['fImg']['name'];
          $image_add ='';
          $id_floor= $_POST['sltParent'];
          if (empty($image_ori)){
            $error_add['image'] = 'Hình sản phẩm không được để trống';
        }else{
            $image_add = "customer/$image_ori";
        }
          $kiot_add = array(
              'name_k' => $name_k,
              'price' => $price,
              'description' => $description,
              'id_floor' => $id_floor,
              'image' => $image_add,
          );
          $error = db_kiot_validate($kiot_add);
          if(!$error){
              $error = addkiot($kiot_add);  
              move_uploaded_file($_FILES['fImg']['tmp_name'], "../customer/$image_ori");
          }
        //   echo '<script language="javascript">';
        //   echo 'window.location.href = "index.php?page=kt"';
        //   echo '</script>';
      }
    ?>
                	              <!-- SHOW ERROR -->
                    <?php if(isset($error['price'])) { ?>
                            <?php show_error($error, 'price') ?>
                            <?php }  
                            ?>
                    <?php if(isset($error['description'])) { ?>
                            <?php show_error($error, 'description') ?>
                            <?php }  
                            ?>
                    <?php if(isset($error['addkiot'])) { ?>
                            <?php show_error($error, 'addkiot') ?>
                            <?php }  
                            ?>
                            <?php if(isset($error['id_floor'])) { ?>
                            <?php show_error($error, 'id_floor') ?>
                            <?php }  
                            ?>