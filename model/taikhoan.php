<?php
function insert_taikhoan($user, $pass, $email, $address, $tel) {
    $sql = "INSERT INTO user (user, pass, email, address, tel) VALUES ('$user', '$pass', '$email', '$address', '$tel')";
    pdo_execute($sql);
}
function checkuser($email,$pass){
    $sql="select*  from user where email='".$email."' AND pass='".$pass."'";
     $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$email,$address,$tel,$pass){
  $sql="update  user set  user='".$user."',email='".$email."',address='".$address."',tel='".$tel."',pass='".$pass."' where id=".$id;
    pdo_execute($sql);
}
function loadall_taikhoan(){
    $sql="select * from user order by id desc";
            $listdm = pdo_query($sql);
            return $listdm;
}
function delete_taikhoan($id){
    $sql="delete from user where id=".$id;
    pdo_query($sql);
}
?>
