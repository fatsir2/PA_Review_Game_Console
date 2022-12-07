<?php
    require_once("config.php");
    
    if(isset($_POST['register'])){
    
        // filter data yang diinputkan
        $username = filter_input(INPUT_POST, 'funame', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'fmail', FILTER_VALIDATE_EMAIL);
        // enkripsi password
        $password = password_hash($_POST["fpas"], PASSWORD_DEFAULT);
    
    
        // menyiapkan query
        $sql = "INSERT INTO data_register (username, email, password) 
                VALUES (:funame, :fmail, :fpas)";
        $stmt = $db->prepare($sql);
    
        // bind parameter ke query
        $params = array(
            ":funame" => $username,
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