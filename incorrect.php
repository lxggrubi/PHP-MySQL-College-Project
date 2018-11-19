<!-- Include validation for the login -->
<?php
include("include/validatelogin.php");
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Login</title>

    <!-- METADATA
    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Include navbar -->
    <?php
    include("include/navbar.php");
    ?>
    <section class="jumbotron text-center">
        <h1>Incorrect</h1>
        <h2>Unsuccessful Login!</h2>
        <div class="wrapper">
            <a href="index.php"><button  class="button">Go to login</button></a>
        </div>
    </section>
</body>
</html>
<!-- Include footer -->
<?php
include("include/footer.php");
?>
</body>
</html>
