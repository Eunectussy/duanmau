
<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
        <div class="row">
            <div class="row header"><H1>SỬA LỌAI HÀNG HÓA</H1>  </div>
        </div>
       <div class="row formconten">
        <form action="index.php?act=updatedm"method="post">
            <div class="row mb">
                Mã loại <br>
            <input type="text"name="maloai" disabled>
            </div>
            <div class="row mb" >
                Tên loại <br>
            <input type="text"name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
            </div>
            <div class="row">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
                <input type="submit" name="capnhap" value="Cập Nhật">
                <input type="reset" value="Nhập lại">
               <a href="index.php?act=listdm"> <input type="button" value="Danh sách"></a>
            </div>
    <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
    ?>
        </form>
       </div>
 