
        <div class="row">
            <div class="row header"><H1>THÊM MỚI LỌAI HÀNG </H1>  </div>
        </div>
       <div class="row formconten">
        <form action="index.php?act=adddm"method="post">
            <div class="row mb">
                Mã loại <br>
            <input type="text"name="maloai" disabled>
            </div>
            <div class="row mb" >
                Tên loại <br>
            <input type="text"name="tenloai">
            </div>
            <div class="row">
                <input type="submit" name="themmoi" value="Nhập mới">
                <input type="reset" value="Nhập lại">
               <a href="index.php?act=listdm"> <input type="button" value="Danh sách"></a>
            </div>
    <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao
    ?>
        </form>
       </div>
 