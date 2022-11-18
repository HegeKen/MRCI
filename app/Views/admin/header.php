<html lang="<?php $locale = service('request')->getLocale(); echo $locale;?>">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='<?php echo base_url();?>/assets/mdui/css/mdui.min.css' rel='stylesheet'>
  <script src='<?php echo base_url();?>/assets/mdui/js/mdui.min.js'></script>
  <link href='<?php echo base_url();?>/assets/wangeditor.css' rel='stylesheet'>
  <script src='<?php echo base_url();?>/assets/wangeditor.js'></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link href='https://font.sec.miui.com/font/css?family=MiSans:300,450,500,650:Chinese_Simplify,Latin&display=swap' rel='stylesheet'>
  <link href='<?php echo base_url();?>/assets/admin.css' rel='stylesheet'>
  <title><?php echo lang($page_title); ?></title>

</head>
<body>
