<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team 7 - Lex</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Awal Navbar -->
    <header id="header">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#home"><img src="img/logo-website-tanpabg (2).png" alt=""></a>
                <div class="right-navbar navbar-light bg-light">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="#home">HOME</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">ABOUT</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">CONTACT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">LOGIN | REGISTER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Akhir Navbar -->
    <!-- Awal Banner  -->
    <div class="container-fluid banner">
        <div class="container banner-content col-lg-6">
            <div class="text-center">
                <p class="fs-3">Selamat Datang di Review Game Console</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id obcaecati maxime fuga, molestiae odio consectetur delectus quasi itaque eum maiores ea, vitae exercitationem blanditiis distinctio numquam in, debitis nihil dolore?</p>
                <button type="button" class="btn btn-primary btn-md">Lets Compare Console</button>
                <button type="button" class="btn btn-secondary btn-md">List Console Game</button>
            </div>
        </div>
    </div>
    <!-- Akhir Banner  -->
    <!-- Konten About -->
    <div class="container-fluid about-website" id="about">
        <h1 class="text-center">About Review Console Game</h1>
        <div class="container about-content">
            <div class="row">
                <div class="col text-end">
                    <p>Bingung dalam memilih Console? kamu bisa membandingkan console</p>
                    <p>Dengan adanya website "Review Console" maka kamu dapat membandingkan console yang diinginkan secara langsung. Dapat mencari item secara spesifik menggunakan website kami ini.</p>
                </div>
                <div class="col">
                    <img src="img/logo_console.png" class="image-console mx-auto d-block" alt="logo_console">
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Konten About -->
    <!-- Awal Contact Us -->
    <hr class="bg-dark border-2 border-top border-dark">
    <!-- Wrapper container -->
    <h1 class="text-center">Contact Us</h1>
    <div class="container py-4" id="contact">
    <!-- Bootstrap 5 starter form -->
    <form id="contactForm">
    <!-- Name input -->
    <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
    </div>
    <!-- Email address input -->
    <div class="mb-3">
        <label class="form-label" for="emailAddress">Email Address</label>
        <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
    </div>
    <!-- Message input -->
    <div class="mb-3">
        <label class="form-label" for="message">Message</label>
        <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
    </div>
    <!-- Form submit button -->
    <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
    </div>
    </form>
    </div>
    <!-- Awalan footer -->
    <footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Team 7 - Review Game Console</span>
    <p class="text-center">Copyright by &#169; Team 7 Lex</p>
  </div>
</footer>

        
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>