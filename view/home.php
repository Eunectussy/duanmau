<div class="banner" >
    <div class="hinh"> 
        <img src="https://theme.hstatic.net/1000306633/1000891824/14/block_home_category1_new.png?v=587" alt="" /></div>
    <div class="hinh"> <img src="https://theme.hstatic.net/1000306633/1000891824/14/block_home_category2_new.png?v=587" alt="" /></div>
    <div class="hinh"> <img src="https://theme.hstatic.net/1000306633/1000891824/14/block_home_category3_new.png?v=587" alt="" /></div>
  </div>
  <div class="typewriter">
  <h1 id="text">STREETWEAR BRAND LIMITED</h1>
  </div>
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
<div class="imgBx">
<a href="'.$linksp.'"><img src="'.$hinh.'" alt="nike-air-shoe" width="400px"/></a>
    
</div>

<div class="contentBx">
</div>


<form action="index.php?act=addtocart" method="post">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="hidden" name="name" value="'.$names.'">
    <input type="hidden" name="img" value="'.$img.'">
    <input type="hidden" name="price" value="'.$price.'">
    <div class="button">
    <input class="button-link secondary-button" type="submit" name="addtocart" value="Thêm vào giỏ">
    </div>
</form>
<form action="index.php?act=buynow" method="post">
    <input type="hidden" name="id" value="'.$id.'">
    <input type="hidden" name="name" value="'.$names.'">
    <input type="hidden" name="img" value="'.$img.'">
    <input type="hidden" name="price" value="'.$price.'">
    <div class="button">
    <input class="button-link secondary-button" type="submit" name="buynow" value="Mua ngay">
    </div>
</form>




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
