<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/taikhoan.php";
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
           case 'dangky':
    if (isset($_POST['dangki']) && ($_POST['dangki'])) {
        // Lấy giá trị từ form
        $user = isset($_POST['user']) ? $_POST['user'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
        $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';

        // Kiểm tra các điều kiện validate
        if (empty($user) || empty($email) || empty($pass) || empty($tel) || empty($address)) {
            $thongbao = "Vui lòng điền đầy đủ thông tin.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $thongbao = "Email không hợp lệ.";
        } else {
            // Thực hiện đăng ký nếu thông tin hợp lệ
            insert_taikhoan($user, $pass, $email, $address, $tel);
            $thongbao = "Đăng ký thành công";
        }
    }
    include "view/taikhoan/dangki.php";
    break;

    case 'dangnhap':
        if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
            // Lấy giá trị từ form
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
    
            // Kiểm tra email và password có giá trị
            if (empty($email) || empty($pass)) {
                $thongbao = "Vui lòng nhập đầy đủ email và password.";
            } else {
                // Kiểm tra định dạng email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $thongbao = "Email không hợp lệ.";
                } else {
                    // Thực hiện đăng nhập
                    $checkuser = checkuser($email, $pass);
                    if (is_array($checkuser)) {
                        $_SESSION['user'] = $checkuser;
                        $thongbao = "Đăng nhập thành công";
                        header("Location: index.php");
                        exit();
                    } else {
                        $thongbao = "Đăng nhập thất bại";
                    }
                }
            }
        }
        include "view/taikhoan/dangnhap.php";
        break;
    
                    case 'edittk':
                        if (isset($_POST['catnhaptk']) && ($_POST['catnhaptk'] )) {
                            $user=$_POST['user'];
                            $email=$_POST['email'];
                            $tel=$_POST['tel'];
                            $address=$_POST['address'];
                            $id=$_POST['id'];
                            $pass=$_POST['pass'];
                            update_taikhoan($id,$user,$email,$address,$tel,$pass);
                            $_SESSION['user']=checkuser($email,$pass);
                            $thongbao="thay đổi thông tin thành công";
                        }
                        include "view/taikhoan/edit_taikhoan.php";
                        break;
                        case 'thoat':
                           session_unset();
                           header('location:index.php');
                            break;
        
            case 'viewcart':
                include "view/giohang/viewcart.php";
            break;
            case 'addtocart':
                if (isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien=$soluong * $price;
                    $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                }
                include "view/giohang/viewcart.php";
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
