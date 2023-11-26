<div class="nd">
             <?php
    $i=0;
    foreach ($spnew as $sp) {
     extract($sp);
if (isset($img_path)) {
    $hinh= $img_path.$img;
    $linksp="index.php?act=spct&idsp=".$id;
//     echo '<div class="boxsp mr">
//     <img src="'.$hinh.'" alt="">
//     <p>'.$price.'</p>
//     <a href="'.$linksp.'">'.$names.'</a>
// </div>';
echo'   <div class="card">
<div class="imgBx ">
<a href="'.$linksp.'"><img src="'.$hinh.'" alt="nike-air-shoe" width="400px"/></a>
    
</div>

<div class="contentBx">
</div>
<div class="button"><a class="button-link primary-button" href="#">Buy Now</a>
    <a class="button-link secondary-button" href="#">Thêm vào giỏ</a>
</div>

<div class="name"><h2>'.$price.'Vnđ</h2></div>
<div class="size">
    <h2><a href="'.$linksp.'">'.$names.'</a></h2>
</div>
</div>' ;

} else {
    echo "Biến \$img_path không tồn tại hoặc không được gán giá trị.";
}
   
    }
    ?>
                <!-- </div>
            </div>
            <div class="boxphai ">
          <?php
          include "boxrigth.php"
          ?>
            </div>
        </div> -->
        </div>