<?php
include('conn.php');

$name=$_GET['name'];
$email=$_GET['email'];
$cn=$_GET['college_name'];
$gender=$_GET['gender'];
$tn=$_GET['team-name'];
$totm=$_GET['total_members'];
$phn=$_GET['mobile_number'];
$lof=$_GET['list_of_players'];

$insert=mysqli_query($db,"INSERT INTO bbr VALUES('$name','$email','$cn','$gender','$tn','$totm','$phn','$lof') ");

mysqli_close($db);
?>

<?php

echo "<script>
alert('Registered successfully');
window.location.href='http://localhost/srmsf/registration.html';
</script>";

?>