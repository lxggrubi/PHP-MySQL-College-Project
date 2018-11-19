<!-- Include php for the form submission, validation, and sanitization -->
<?php
include("include/comment.php");
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Makarska</title>

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
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Include navbar -->
    <?php
    include("include/navbar.php");
    ?>

    <!-- Include content -->
    <?php
    include("include/content.php");
    ?>

    <!-- Include footer -->
    <?php
    include("include/footer.php");
    ?>
    </body>
    </html>
