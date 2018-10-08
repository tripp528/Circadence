<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Capstone Brief</title>


  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/variable_override.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="white">

  <?php
  // include header
  include 'php/header.php';

  // set default page to home
  $current_page = 'home';

  // check what page
  if(array_key_exists('page',$_GET)) {
    $current_page = $_GET['page'];
  }
  echo "<main>";
  // switch pages
  switch ($current_page) {
    case 'home':
      include 'php/home.php';
      break;
    case 'nxl':
      include 'php/nxl.php';
      break;
    case 'adversary':
      include 'php/adversary.php';
      break;
    case 'inventory':
      include 'php/inventory.php';
      break;
    case 'takeaways':
      include 'php/takeaways.php';
      break;
    default:
      include 'php/home.php';
      break;
  }
  echo "</main>";

  // inclue footer
  include 'php/footer.php';
   ?>

  <!-- Materialize Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/bin/materialize.min.js"></script>
  <script src="js/bin/init.js"></script>

  </body>
</html>
