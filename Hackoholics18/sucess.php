<?php require 'config.php';

if(isset($_POST['submit'])){ 
$name1 = $_POST['tname'];
$p1 = $_POST['p1name'];
$colg1 = $_POST['c1name'];
$email1 = $_POST['e1name'];
$phone1=$_POST['ph1name'];
$gender1=$_POST['gen1'];
$food1=$_POST['food1'];


$p2 = $_POST['p2name'];
$colg2 = $_POST['c2name'];
$email2 = $_POST['e2name'];
$phone2=$_POST['ph2name'];
$gender2=$_POST['gen2'];
$food2=$_POST['food2'];


$p3 = $_POST['p3name'];
$colg3 = $_POST['c3name'];
$email3 = $_POST['e3name'];
$phone3=$_POST['ph3name'];
$gender3=$_POST['gen3'];
$food3=$_POST['food3'];

$p4 = $_POST['p4name'];
$colg4 = $_POST['c4name'];
$email4 = $_POST['e4name'];
$phone4=$_POST['ph4name'];
$gender4=$_POST['gen4'];
$food4=$_POST['food4'];


$abs1=$_POST['abs'];

if($gen1=="Gender")
{
	echo"plz";
}

$query = "INSERT into registration(team_name,participant_1,college_name1,email_id1,phno_1,gender_1,food_1,participant_2,college_name2,email_id2,phno_2,gender_2,food_2,participant_3,college_name3,email_id3,phno_3,gender_3,food_3,participant_4,college_name4,email_id4,phno_4,gender_4,food_4,abstract) values ('$name1', '$p1', '$colg1', '$email1','$phone1','$gender1','$food1','$p2', '$colg2', '$email2','$phone2','$gender2','$food2','$p3', '$colg3', '$email3','$phone3','$gender3','$food3','$p4', '$colg4', '$email4','$phone4','$gender4','$food4','$abs1')";
$query_run=mysqli_query($mysqli,$query);
header('location:sucessuser.php');


}


?>


<h1 style="color:lightgreen">Sucessfully registered</h1>