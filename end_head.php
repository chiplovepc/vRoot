<?php 
  $cl_home="off";
  $cl_contact="off";
  $cl_about="off";
  $cl_services="off";
  if(isset($_REQUEST['nav'])){
      switch($_REQUEST['nav']){
          case "contact":
          require_once("contact.php");
          $cl_contact="linkactive";
          break;
          case "about":
          require_once("about.php");
          $cl_about="linkactive";
          break;
          case "services":
          require_once("services.php");
          $cl_services="linkactive";
          break;
          default :
          $cl_home="linkactive";
          require_once("home.php");
          break;
      }
  }else{      
      $cl_home="linkactive";
  }
?>
</head>
<body>
    <div class="wrapper">
        <div class="nav">
             <a href="home.php?nav=home" class="<?php echo $cl_home;?>"><items>Home</items></a><gach><img src="images/gach_trai.png"></gach>
             <a href="about.html" class="<?php echo $cl_about;?>"><items>About</items></a>
           <itemslogo> <a href="index.html"><img src="images/logo.png" alt="I love my life"></a></itemslogo>
             <a href="services.html" class="<?php echo $cl_services;?>"><items>Services</items></a><gach><img src="images/gach_phai.png"></gach>
             <a href="contact.html" class="<?php echo $cl_contact;?>"><items>Contact</items></a>          
        </div>
        <!-- End header nav -->
        <div class="clean20"></div>
        