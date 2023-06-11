

  <?php ini_set('display_errors', 0);
      include 'connection_db.php';
      include 'header.php';
  ?>


<p id="usernameError"> Incorrect username </p>
<p id="passwordError"> Incorrect password </p>

<div id="loginDiv">
  <form action='' method='POST'>
    <input type="text" id="username" name="username"><br>
    <label for="username"> Όνομα χρήστη </label><br>
    <input type="password" id="password" name="password"><br>
    <label for="password"> Κωδικός πρόσβασης </label><br>
    <input type="submit" name="submit" id="loginButton" value="Login">
</div>

<?php
if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username = '$username';";
  $result = $conn->query($sql);
  $row = $result->fetch();
  
  if( $username == $row['username'] ){
    if(password_verify($password,$row['password'])==true){
      $hashUsername = hash($name);
      setcookie("uId", $hashusername, time() + 604800, "/");
      header("Location: profile.php");
      exit();
    } else {
      echo '<style> #passwordError{display:block;transition-duration:400ms;}</style>';
    };
  } else {
    echo '<style> #usernameError{display:block;transition-duration: 400ms;}</style>';
  };
};
?>

</body>