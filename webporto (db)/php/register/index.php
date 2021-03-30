<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <style>
        .card {
            position: relative;
            margin: 0 auto 27px;
            margin-top: 27px;
            width: 46%;
            padding: 45px;
            background: #F2F2F2;
            border-radius: 12px;
        }
    </style>

    <title>Register</title>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-body">
        <img src="https://img.icons8.com/color/100/000000/user-male-circle--v2.png" style="margin-left: 170px; width: 20%"/>
            <h5 class="card-title"><b>Register Form</b></h5>
                <div class="border-top border-secondary"></div>
                <form action="proses.php" method="POST">
                <div class="mb-3 row mt-3">
                    <label for="inputPassword" class="col-sm-3 col-form-label ms-3">Username:</label>
                    <div class="col-md-8">
                    <input type="text" placeholder="Masukan Username" class="form-control" name="user" id="inputUsername">
                    </div>
                </div>
                <div class="mb-3 row mt-3">
                    <label for="inputPassword" class="col-sm-3 col-form-label ms-3">Nama:</label>
                    <div class="col-md-8">
                    <input type="text" placeholder="Masukan Nama" class="form-control" name="nama" id="inputName">
                    </div>
                </div>
                <div class="mb-3 row mt-3">
                    <label for="inputPassword" class="col-sm-3 col-form-label ms-3">Password:</label>
                    <div class="col-md-8">
                    <input type="password" placeholder="Masukan Password" class="form-control" name="sandi" id="inputPassword">
                    </div>
                </div>
                    <input type="hidden" class="form-control" name="gambar" id="inputPassword" value="https://i.ibb.co/Mc9tpJq/tb1.png">
                    <input type="hidden" class="form-control" name="email" id="inputPassword" value="username@gmail.com">
                    <input type="hidden" class="form-control" name="quotes" id="inputPassword" value="isiapaanbae">
                    <input type="hidden" class="form-control" name="stats" id="inputPassword" value="Active">
                    <input type="hidden" class="form-control" name="last" id="inputPassword" value="2021-03-30">
                <div class="d-grid gap-2">
                    <button class="btn btn-success" type="submit" name="register">Register</button>
                    <a href="../login/" class="btn btn-primary" type="submit">Login</a>
                </div>
        </form>
                </div>
        </div>
    </div>
</div>

<script>
    function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
    }
</script>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
