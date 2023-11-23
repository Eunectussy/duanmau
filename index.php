<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
$dm=loadall_danhmuc();
include "view/header.php";
include "gobal.php";
$top10=loadall_sanpham_top10();
$spnew = loadall_sanpham_home();
if ((isset($_GET['act']))&&($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        
        case 'spct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id=$_GET['idsp'];
            $onesp=loadone_sanpham($id);
            include "view/sanphamct.php";
            }else {
                include "view/home.php";
            }
            break;
        case 'gt':
            include "view/gt.php";
            break;
            case 'home':
                include "view/home.php";
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
