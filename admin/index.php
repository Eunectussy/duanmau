<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
//controller
if(isset( $_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case 'adddm':
            //kiem tra xem nguoi dung co kich vao hay khong
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao='Nhập Thành Công';
            }
            include "danhmuc/add.php";
            break;
            case 'listdm':
                $listdm= loadall_danhmuc();
                include "danhmuc/list.php";
                break;  
                case 'xoadm':
                    if(isset($_GET['id'])&& ($_GET['id']>0)){
                        delete_danhmuc($_GET['id']);
                    }
                    $listdm= loadall_danhmuc();
                    include "danhmuc/list.php";
                    break; 
                    case 'suadm':
                        if(isset($_GET['id'])&& ($_GET['id']>0)){
                          $dm=loadone_danhmuc($_GET['id']);
                        }
                        include "danhmuc/update.php";
                    break; 
                    case "updatedm":
                        if(isset($_POST['capnhap'])&&($_POST['capnhap'])){
                            $tenloai=$_POST['tenloai'];
                            $id=$_POST['id'];
                            update_danhmuc($id,$tenloai);
                            $thongbao=" Cập Nhật Thành Công";
                        }
                        $listdm= loadall_danhmuc();
                            include "danhmuc/list.php";
                            break; 
                           ///// //san pham//////////////
                            case 'addsp':
                                //kiem tra xem nguoi dung co kich vao hay khong
                                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                                    $iddm=$_POST['iddm'];
                                    $tensp=$_POST['tensp'];
                                    $giasp=$_POST['giasp'];
                                    $mota=$_POST['mota'];
                                    $fliename=$_FILES['hinh']['name'];
                                    $target_dir = "../upload/";
                                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                      } else {
                                        // echo "Sorry, there was an error uploading your file.";
                                      }
                                    insert_sanpham($tensp,$giasp,$fliename,$mota,$iddm);
                                    $thongbao='Nhập Thành Công';
                                }
                                $listdm= loadall_danhmuc();
                                // var_dump($listdm);
                                // die;
                                include "sanpham/add.php";
                                break;
                                case 'listsp':
                                    if(isset($_POST['listok'])&&($_POST['listok'])){
                                        $kyw=$_POST['kyw'];
                                        $iddm=$_POST['iddm'];
                                    }else{
                                        $kyw='';
                                        $iddm=0;
                                    }
                                    $listdm= loadall_danhmuc();
                                    $listsp= loadall_sanpham($kyw,$iddm);
                                    $a="ko thấy sản phẩm";
                                    // var_dump($listsp);
                                    // die;
                                    include "sanpham/list.php";
                                    break;  
                                    case 'xoasp':
                                        if(isset($_GET['id'])&& ($_GET['id']>0)){
                                            delete_sanpham($_GET['id']);
                                        }
                                        $listsp= loadall_sanpham("",0);
                                        include "sanpham/list.php";
                                        break; 
                                        case 'suasp':
                                            if(isset($_GET['id'])&& ($_GET['id']>0)){
                                              $sp=loadone_sanpham($_GET['id']);
                                            }
                                            $listdm= loadall_danhmuc();
                                            include "sanpham/update.php";
                                        break; 
                                        case "updatesp":
                                            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                                //  $iddm=$_POST['iddm'];
                                                 $id=$_POST['id'];
                                                $tensp=$_POST['tensp'];
                                                $giasp=$_POST['giasp'];
                                                $mota=$_POST['mota'];
                                                $fliename=$_FILES['hinh']['name'];
                                                $target_dir = "../upload/";
                                                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                                                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                                                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                                                  } else {
                                                    // echo "Sorry, there was an error uploading your file.";
                                                    
                                                  }
                                              update_sanpham($id,$tensp,$giasp,$fliename,$mota);
                                                 $thongbao=" Cập Nhật Thành Công";
                                            }
                                            // var_dump($update);
                                            // die;
                                            $listdm= loadall_danhmuc();
                                            $listsp= loadall_sanpham("",0);
                                                include "sanpham/list.php";
                                                break; 
                default:
                include "home.php";
                break;
    }
}
else{
    include "home.php";
}
// include "home.php";
include "footer.php"
?>