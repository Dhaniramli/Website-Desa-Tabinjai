<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Website Desa Tabbinjai | Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #009D4C;
        }

        .btn-user {
            background-color: #009D4C;
            color: white;
        }

        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .title-tabbinjai {
            color: #009D4C;
            font-size: 40px;
            font-weight: 800;
        }

        @media (max-width: 768px) {
            .title-tabbinjai {
                font-size: 30px;
            }
        }

    </style>

</head>

<body>

    <div class="row d-flex justify-content-center">
        <div class="col-lg-5">
            <div class="container" style="margin-top: 100px">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 title-tabbinjai mb-5">Website<br>Desa Tabbinjai</h1>
                            </div>
                            <form class="user" action="/login" method="POST">
                                @csrf
                            
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        aria-describedby="emailHelp" placeholder="Masukkan email..." name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password" name="password">
                                </div>
                                
                                <button type="submit" class="btn btn-user btn-block mt-5">
                                    Login
                                </button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
