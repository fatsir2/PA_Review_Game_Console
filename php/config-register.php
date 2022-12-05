<?php
    require_once("config.php");
    
    if(isset($_POST['register'])){
    
        // filter data yang diinputkan
        $id_usename = filter_input(INPUT_POST, 'funame', FILTER_SANITIZE_STRING);
        $id_email = filter_input(INPUT_POST, 'fmail', FILTER_SANITIZE_STRING);
        // enkripsi password
        $id_pass = password_hash($_POST["fpas"], PASSWORD_DEFAULT);
    
    
        // menyiapkan query
        $sql = "INSERT INTO users (id_username, id_email, id_password) 
                VALUES (:funame, :fmail, :fpas)";
        $stmt = $conn->prepare($sql);
    
        // bind parameter ke query
        $params = array(
            ":funame" => $name,
            ":fmail" => $email,
            ":fpas" => $password
        );
    
        // eksekusi query untuk menyimpan ke database
        $saved = $stmt->execute($params);
    
        // jika query simpan berhasil, maka user sudah terdaftar
        // maka alihkan ke halaman login
        if($saved) header("Location: login.php");
    }    
?>