<?php
    session_start();
    if(isset($_SESSION['loggg'])){
        header('Location: detail.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Best MBA Program | ASBM University- Apply Now </title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CyberSecurity">
    <meta name="keyword" content="CyberSecurity">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="image/fav.png" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link a href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700"
        rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style-mob.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <section>
        <div class="ad-log-main">
            <div class="ad-log-in">
                <div class="ad-log-in-logo">
                    <a href="../index"><img src="image/logo.png" class="img-responsive" alt="" style="height:90px;"></a>
                </div>
                <div class="ad-log-in-con">
                    <div class="log-in-pop-right">
                        <div class="container py-5 d-flex justify-content-center">
                            <div class="row  text-center">
                                <div class="col-12 border border-1 p-5 rounded-3">
                                    <form action="login.php" method="post">
                                        <h5>Login Form</h5>
                                        <div class="my-3">
                                            <label for="exampleInputEmail1" class="form-label">UserName</label>
                                            <input type="text" name="uname" class="form-control" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/mystl.js"></script>
</body>

</html>