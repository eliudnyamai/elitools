<?php
function display_head($title){
    echo '
        <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta property="og:url"           content="https://toolske.com" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Free online tools" />
        <meta property="og:description"   content="Free online tool" />
        <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
        <title>
            ' .$title.'
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <!-- CSS Files -->
        <link href='.$_SERVER['SERVER_NAME'].'"/elitools/css/styles.css" rel="stylesheet" />
        <link href='.$_SERVER['SERVER_NAME'].'"/elitools/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href='.$_SERVER['SERVER_NAME'].'"/elitools/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />

        <link href="/css/styles.css" rel="stylesheet" />
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
        </head>
';
}

?>