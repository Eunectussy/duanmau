
        <div class="row">
            <div class="row header"><H1>THÊM MỚI SẢN PHẨM</H1>  </div>
        </div>
       <div class="row formconten">
        <form action="index.php?act=addsp"method="post"  enctype="multipart/form-data">
            <div class="row mb">
                Danh mục  <br>
            <select name="iddm" id="">
            <?php
                    foreach ($listdm as $danhmuc) {
                        extract($danhmuc);
                        echo'<option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>      
            </select>
            </div>
            <div class="row mb" >
                Tên  <br>
            <input type="text"name="tensp">
            </div>
            <div class="row mb" >
                Gía  <br>
            <input type="text"name="giasp">
            </div>
            <div class="row mb" >
               Img  <br>
            <input type="file"name="hinh">
            </div>
            <div class="row mb" >
                Mô tả <br>
            <textarea name="mota" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="row">
                <input type="submit" name="themmoi" value="Nhập mới">
                <input type="reset" value="Nhập lại">
               <a href="index.php?act=listsp"> <input type="button" value="Danh sách"></a>
            </div>
    <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
    ?>
        </form>
       </div>
 