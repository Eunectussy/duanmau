<div class="row">
            <div class="row header"><H1> QUẢN LÍ LỌAI HÀNG HÓA</H1>  </div>
        </div>
       <div class="row formconten">
        <form action=""method="">
            <div class="row mb formds">
                <table>
                    <tr>
                        <tH></tH>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th></th>
                    </tr>
                    <?php
                        foreach ($listdm as $danhmuc) {
                            extract($danhmuc);
                            $suadm= "index.php?act=suadm&id=".$id;
                            $xoadm= "index.php?act=xoadm&id=".$id;
                            echo  '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.' </td>
                            <td> <a href="'.$suadm.'"><input type="button" name="" id="" value="Sửa"></a>
                            <a href="'.$xoadm.'"> <input type="button" name="" id="" value="Xóa"></a></td>
                        </tr>';
                        }   
                    ?>
                </table>
            </div>
            <div class="row">
               <a href="index.php?act=adddm"> <input type="button" value="Nhập thêm"></a>

            </div>
        </form>
       </div>