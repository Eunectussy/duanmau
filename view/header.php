<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bt1.css">
</head>
<body onload="loadImg()">
    <div class="boxcenter">
        <div class="row mb header">
            <h1>Siêu thị trực tuyến</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php?act=home">Trang chủ</a></li>
                <li><a href="index.php?act=gt">Giới Thiệu</a></li>
                <li><a href="">Liên hệ</a></li>
                <li><a href="">Góp ý</a></li>
                <li><a href="">Hỏi đáp</a></li>
            </ul>
        </div>
        <div class="row mb ">
            <div class="boxtrai mr ">
                <div class="row">
                    <div class="banner" >
                        <img  alt="" name="img_banner">
                    </div>
                </div> -->
                <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/home.css">
  <!-- Thư viện MDB CSS -->
  <link href="assets/css/footer.css" rel="stylesheet" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.12.0/mdb.min.css" integrity="sha512-JhSBC+2/BBQPhd7+V9iDuhI5BH1U/paTTwKgKlP+vo5TJ6Y8WlP/xMXXpuvXkq59Y3oK6a5JJ5H9MCjn1Q8jAA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="menu-container">
    <ul class="menu">
    
     <a href="index.php"> <img class="img"  src="https://theme.hstatic.net/1000306633/1000891824/14/logo.png?v=587" alt="" witdh="200px "/> </a>
        <?php                         
                          foreach ($dm as $dm) {
                            extract($dm);
                            $linkdm="index.php?act=sanpham&iddm=".$id;
                            echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                          }
                            ?>
      <div class="a-right">
        <?php
        if (isset($_SESSION['user'])) {
          extract($_SESSION['user']);
          ?>
        <li><a href="">Xin chào <?=$user?></a></li>
        <li><a href="index.php?act=thoat">THOÁT</a></li>
        <li><a href="">GIỎ HÀNG </a></li>
        <li><a href="index.php?act=edittk">TÀI KHOẢN </a></li>
        <?php 
        if ($role==1) {
        ?>
        <li><a href="admin/index.php?act=listdm">ADMIN </a></li>
        <?php }?>
          <?php
        } else {
        ?>
      <li><a href="index.php?act=dangnhap">ĐĂNG NHẬP</a></li>
      <li><a href="index.php?act=dangky">ĐĂNG KÍ</a></li>
      <li><a href="">GIỎ HÀNG </a></li>
      <?php }?>
    </div>
    </ul>
  </div>
  <img src="https://theme.hstatic.net/1000306633/1000891824/14/slideshow_1.jpg?v=587" alt="" style=""/>
  <div class="banner" >
    <div class="hinh"> 
        <img src="https://theme.hstatic.net/1000306633/1000891824/14/block_home_category1_new.png?v=587" alt="" /></div>
    <div class="hinh"> <img src="https://theme.hstatic.net/1000306633/1000891824/14/block_home_category2_new.png?v=587" alt="" /></div>
    <div class="hinh"> <img src="https://theme.hstatic.net/1000306633/1000891824/14/block_home_category3_new.png?v=587" alt="" /></div>
  </div>
  <div class="typewriter" style="margin-top: 50px;">
  <h1 id="text">STREETWEAR BRAND LIMITED</h1>
  </div>