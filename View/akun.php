<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registrasi</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>

<body>
<div class="container-fluid">
    <div class="page-wrapper bg-dark p-t-100 p-b-50" style ="background-image: url('../Assets/image/besar2.jpg')">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Regis Account</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="../Controller/proses.php?aksi=order">
                        <div class="form-row">
                            <div class="name">ID</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="name" placeholder="Masukan ID yang benar">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="text" id="text" placeholder="Masukkan email anda">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="password" name="password" id="password" placeholder="Password harus terdiri dari 8-16 karakter.">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Confirm Password</div>
                            <div class="value">
                                <div class="input-group">
                                <input class="input--style-6" type="password" name="password" id="password" placeholder="Confirm your password">
                                </div>
                            </div>
                        </div>
                        <center>
                        <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Regis</button>
                        </div>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->