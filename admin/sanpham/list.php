<div class="row">
            <div class="row header"><H1> QUẢN LÍ LỌAI SẢN PHẨM</H1>  </div>
        </div> <br> <br>
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
            <?php
                    foreach ($listdm as $danhmuc) {
                        extract($danhmuc);
                        echo'<option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>      
            </select>
            <input type="submit"name="listok" value="ok">
           </form>
      
       <div class="row formconten">
        <form action=""method="">
            <div class="row mb formds">
           
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ LOẠI</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>Giá</th>
                        <th>Hình</th>
                        <th>Lượt xem</th>
                        <th></th>
                        
                    </tr>
                    <?php
                        foreach ($listsp as $sanpham) {
                            extract($sanpham);
                            $suasp= "index.php?act=suasp&id=".$id;
                            $xoasp= "index.php?act=xoasp&id=".$id;
                            $hinhpath="../upload/".$img;
                            if(is_file($hinhpath)){
                                $img="<img src='".$hinhpath."' height='80'>";
                            } else{
                                $img="không có hình";
                            }
                            echo  '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$names.' </td>
                            <td>'.$price.' </td>
                            <td>'.$img.' </td>
                            <td>'.$luotxem	.' </td>
                            <td> <a href="'.$suasp.'"><input type="button" name="" id="" value="Sửa"></a>
                            <a href="'.$xoasp.'"> <input type="button" name="" id="" value="Xóa"></a></td>
                        </tr>';
                        }   
                    ?>
                </table>
            </div>
            <div class="row">
               <a href="index.php?act=addsp"> <input type="button" value="Nhập thêm"></a>
               <a href="index.php?act=listsp"> <input type="button" value="Danh sách"></a>
            </div>
        </form>
       </div>