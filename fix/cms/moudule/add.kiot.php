<?php
      $error_add = array();
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
          $error_add = db_kiot_validate($kiot_add);
          if(!$error_add){
              $error_add = addkiot($kiot_add);  
              move_uploaded_file($_FILES['fImg']['tmp_name'], "../customer/$image_ori");
          }
        //   echo '<script language="javascript">';
        //   echo 'window.location.href = "index.php?page=kt"';
        //   echo '</script>';
      }
    ?>
                	              <!-- SHOW ERROR -->
                    <?php if(isset($error_add['price'])) { ?>
                            <?php show_error($error_add, 'price') ?>
                            <?php }  
                            ?>
                    <?php if(isset($error_add['description'])) { ?>
                            <?php show_error($error_add, 'description') ?>
                            <?php }  
                            ?>
                    <?php if(isset($error_add['addkiot'])) { ?>
                            <?php show_error($error_add, 'addkiot') ?>
                            <?php }  
                            ?>
                            <?php if(isset($error_add['id_floor'])) { ?>
                            <?php show_error($error_add, 'id_floor') ?>
                            <?php }  
                            ?>