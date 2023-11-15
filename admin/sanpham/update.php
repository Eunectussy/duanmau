<?php
    if(is_array($sp)){
        extract($sp);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $img="<img src='".$hinhpath."' height='80'>";
    } else{
        $img="không có hình";
    }
?>
        <div class="row">
            <div class="row header"><H1>CẬP NHẬT SẢN PHẨM</H1>  </div>
        </div>
       <div class="row formconten">
        <form action="index.php?act=updatesp"method="post"  enctype="multipart/form-data">
        <div class="row mb" >
        <select name="iddm">
                <option value="0" selected>Tất cả</option>
            <?php
                    foreach ($listdm as $danhmuc) {
                        extract($d);
                        if($iddm==$id)
                        echo'<option value="'.$id.'" selected>'.$name.'</option>';
                        else echo'<option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>      
            </select>
            </div>
            <div class="row mb" >
            <input type="hidden"name="id" value="<?=$id?>">
                Tên  <br>
            <input type="text"name="tensp" value="<?=$names?>">
            </div>
            <div class="row mb" >
                Gía  <br>
            <input type="text"name="giasp" value="<?=$price?>">
            </div>
            <div class="row mb" >
               Img  <br>
            <input type="file"name="hinh">
            <?=$img?>
            </div>
            <div class="row mb" >
                Mô tả <br>
            <textarea name="mota" id="" cols="30" rows="10" value="<?=$mota?>"></textarea>
            </div>
            <div class="row">
                
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
               <a href="index.php?act=listsp"> <input type="button" value="Danh sách"></a>
            </div>
    <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
    ?>
        </form>
       </div>
 