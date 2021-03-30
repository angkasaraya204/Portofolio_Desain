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

    <title>Login!</title>
</head>
<body>

<div class="container">
    <div class="card">
    <form action="proses.php" method="POST">
        <div class="card-body">
        <img src="https://img.icons8.com/color/100/000000/user-male-circle--v2.png" style="margin-left: 170px; width: 20%"/>
            <h5 class="card-title"><b>Login Form</b></h5>
                <div class="border-top border-secondary"></div>
                    <div class="row">
                        <div class="form-group col-6 mt-4">
                            <input type="text" class="form-control text-center" placeholder="Username" name="user">
                        </div>
                        <div class="form-group col-6 mt-3">
                            <div class="alert alert-danger text-center" role="alert">
                                Kamu Belum Login.
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <input type="password" class="form-control text-center" placeholder="Password" name="sandi">
                        </div>
                    </div>
                    <div class="border-top border-secondary mt-3"></div>
                        <div class="d-grid gap-2">
                            <input type="submit" class="btn btn-success mt-3" value="Login">
                        </div>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ingat saya
                            </label>
                            <a href="../register/" class="text-left">Register</a>
                        </div>
                    </div>
                </div>
        </div>
        </form>
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
