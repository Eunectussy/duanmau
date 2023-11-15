<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql="insert into sanpham (names,price,img,mota,iddanhmuc) values('$tensp','$giasp','$hinh','$mota','$iddm')";
                pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="delete  from sanpham where id=".$id;
    pdo_query($sql);
}

function loadall_sanpham_top10(){
    $sql="select * from sanpham where 1 order by luotxem desc limit 0,10";
         $listsp= pdo_query($sql);
            return $listsp;
}
function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,9";
         $listsp= pdo_query($sql);
            return $listsp;
}
    function loadall_sanpham($kyw,$iddm){
        $sql="select * from sanpham where 1";
        if($kyw!=""){
            $sql.=" and names like '%".$kyw."%'";
        }
        if($iddm>0){
            $sql.=" and iddanhmuc ='".$iddm."'";
        }
        $sql.=" order by id desc";
             $listsp= pdo_query($sql);
                return $listsp;
    }
    function loadone_sanpham($id){
        $sql="select*  from sanpham where id=".$id;
         $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_sanpham($id,$tensp,$giasp,$hinh,$mota){
        if($hinh!=""){      
        $sql="update  sanpham set  names='".$tensp."',price='".$giasp."',img='".$hinh."',mota='".$mota."' where id=".$id;
        }
        else  $sql="update  sanpham set  names='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
        pdo_execute($sql);
    }
?>