
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bt2.css">
</head>
<body>
<div class= "row mb">
    <?php
      extract($onesp);
    ?>
    <div class="boxtitle2">  
        <?=$names?>
    </div>
    <div class="row boxconten2">  
        <?php
            $img= $img_path.$img;
          echo '<div class="boxsp mr">
          <img src="'.$img.'" alt="">
          <p>'.$price.'</p>
      </div>
      <br/>';
            echo $mota;
        ?>
        </div>
</div>
<div class= "row mb">
    <div class="boxtitle">  
giới thiệu
    </div>
    <div class="row boxconten">       
        </div>
</div>
<div class= "row mb" >
    <div class="boxtitle">    
giới thiệu
    </div>
    <div class="row boxconten">
        </div>
</div>

</body>
</html>