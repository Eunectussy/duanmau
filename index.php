<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "view/header.php";
include "gobal.php";
$top10=loadall_sanpham_top10();
$spnew = loadall_sanpham_home();
$dmnew=loadall_danhmuc();
if ((isset($_GET['act']))&&($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        case 'gt':
            include "view/gt.php";
            break;
        
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";

?>
