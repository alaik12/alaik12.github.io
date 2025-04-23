<?php
    
    $data = mysqli_connect("localhost","root","","desa cintanagara");

    if (!$data){
        echo'gagal';
    }else{
        echo'berhasil';
    }
?>