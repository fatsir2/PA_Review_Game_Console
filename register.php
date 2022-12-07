<?php

    require_once("php/config.php");
    
    if(isset($_POST['register'])){
    
        // filter data yang diinputkan
        $username = filter_input(INPUT_POST, 'lename', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'leemail', FILTER_VALIDATE_EMAIL);
        // enkripsi password
        $password = password_hash($_POST["lepassword"], PASSWORD_DEFAULT);
        

        // menyiapkan query
        $sql = "INSERT INTO data_register (username, email, password) 
                VALUES (:lename, :leemail, :lepassword)";
        $stmt = $db->prepare($sql);
    
        // bind parameter ke query
        $params = array(
            ":lename" => $username,
            ":leemail" => $email,
            ":lepassword" => $password
        );
    
        // eksekusi query untuk menyimpan ke database
        $saved = $stmt->execute($params);
    
        // jika query simpan berhasil, maka user sudah terdaftar
        // maka alihkan ke halaman login
        if($saved) header("Location: login.php");
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Review Console Game - Team 7 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action="" method="POST">

                <div class="form-outline mb-4">
                  <input type="name" id="form3Example1cg" class="form-control form-control-lg" name="lename" />
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="leemail"/>
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="lepassword" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                </div>
                <div class="d-flex justify-content-center">
                  <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />
                </div>
                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>