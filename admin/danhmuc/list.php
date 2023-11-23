
           <div class="table">    
           <div class="title" ><h2 style="text-align: center;"> QUẢN LÍ DANH MỤC</h2></div>
           <a href="index.php?act=adddm"><button type="button" class="btn btn-primary" style="margin-left: 80px; margin-top:30px;">Add</button> </a>  
       <table class="table">        
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
              </tr>
            </thead>
            <tbody>
            <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    $suadm= "index.php?act=suadm&id=".$id;
                    $xoadm= "index.php?act=xoadm&id=".$id;
                    echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td> <a href="'.$xoadm.'"><button type="button" class="btn btn-danger">Delete</button></a>
                    <a href="'.$suadm.'"><button type="button" class="btn btn-success">Edit</button></a></td>
                  </tr>';
                }
              ?>
            </tbody>
          </table>
          </div> 