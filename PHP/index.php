<!DOCTYPE html>
<html>
  <head>
    <script src="bebona.js" defer></script>
    <link rel="stylesheet" href="../styles/main.css">
  </head>
  <body>
    <?php ini_set('display_errors', 0);
          include 'header.php';


          $usernameHash = hash('mcpanos03');
          echo $usernameHash;

          // header("Location: login.php");
          // exit();
    ?>
    
  </body>
</html>