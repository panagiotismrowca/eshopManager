
    <?php include 'header.php'; 
    if (isset($_COOKIE["uId"])) {
      $username = $_COOKIE["uId"];
          include 'connection_db.php';
          
  $sql = "SELECT * FROM users WHERE username = '$username';";
  $result = $conn->query($sql);
  $row = $result->fetch();
          
$username = $row['username'];
$fnameUser = $row['fnameUser'];
$lnameUser = $row['lnameUser'];
$telUser = $row['telUser'];
$startDate = $row['startDate'];

$userType = $row['userType'];

$addressUser = $row['addressUser'];
$taxNumber = $row['taxNumber'];
$idManager = $row['idManager'];
    
?>

    
<table>
  <tr>
    <td id="editUsername" class="editProfile" >Edit sername</td>
    <td>Username</td>
    <td><?php echo $username?></td>
  </tr>
  <tr>
    <td id="editFullname" class="editProfile" >Edit full name</td>
    <td>Full name</td>
    <td><?php echo $fnameUser . ' ' . $lnameUser?></td>
  </tr>
  <tr>
    <td id="editPhone" class="editProfile" >Edit phone</td>
    <td>Phone</td>
    <td><?php echo $telUser?></td>
  </tr>
  <tr>
    <td class="editProfile"></td>
    <td>Signup date</td>
    <td><?php echo $startDate?></td>
  </tr>
  <?php
  if($userType=='EMPLOYEE'){
    echo "
      <tr>
        <td id='editAddress' class='editProfile' >Edit full address</td>
        <td>Address</td>
        <td> $addressUser </td>
      </tr>
      <tr>
        <td id='editTaxnumber' class='editProfile' >Edit tax number</td>
        <td>Tax number</td>
        <td> $taxNumber </td>
      </tr>
      <tr>
        <td id='editManager' class='editProfile' >Edit manager</td>
        <td>Manager</td>
        <td> $idManager </td>
      </tr>";
  };
  ?>
</table>

<?php include 'footer.php'; ?>

  </body>