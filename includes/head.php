<?php
function display_head($title){
 echo '<head>
 <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BVTQJVB94K"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag("js", new Date());

  gtag("config", "G-BVTQJVB94K");
</script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>'.$title.'</title>
  <meta content="" name="'.$title.'">
  <meta content="" name="free, online, resize image, remove background,resize image online">
  <meta property="og:title" content="Free online tools"/>
  <meta property="og:image" content="https://toolske.com/sm-preview.png"/>
  <meta property="og:description" content="Free Online easy and quick to use tools."/>
  <meta property="og:url" content="toolske.com"/>
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="627" />
<!-- TYPE BELOW IS PROBABLY: "website" or "article" or look on https://ogp.me/#types -->
<meta property="og:type" content="website"/>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.css
</head>';
}