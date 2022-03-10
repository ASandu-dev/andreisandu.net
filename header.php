<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php bloginfo( 'name' ); ?></title>
    <meta content="<?php bloginfo('description'); ?>" name="description">
    <meta content="portfolio, blog, projects, Xebdev, android dev, graphic design" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
    

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/github-calendar@latest/dist/github-calendar-responsive.css" />


    <!-- Firebase -->
    
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/firebase-config.js" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/api-Keys.js" ></script>

</head>

<body onload="initializeApp()">

    <?php wp_head() ?>