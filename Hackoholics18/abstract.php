<?php 
require 'config.php';
session_start();
if (!$_SESSION['user']){
   header('location:adminlogin.php');

}
?>
<?php 
$id=$_GET['id'];
?>
<?php 
$team_name= $_GET['team_name'];
 ?>
<h1 style="color:blue">ITS<span style="color:red";> <?php echo $team_name; ?>   [<?php echo $id; ?>]</span>'S ABSTRACT:</h1>

<?php
$id=$_GET['id'];
$query="SELECT abstract FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
?>

<h4><div><?php echo $key['abstract']; ?></div></h4>

<?php } ?>

<h2>Team Members Details:</h2>

<?php 
$id=$_GET['id'];
$query="SELECT email_id1 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>1st Email-id:</span>--><?php echo $key['email_id1']; ?></div></h4>
 <?php } 
 ?>
<?php 
$id=$_GET['id'];
$query="SELECT college_name1 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>1st college name</span>--><?php echo $key['college_name1']; ?></div></h4>
 <?php } 
 ?>

<?php 
$id=$_GET['id'];
$query="SELECT phno_1 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>1st Phone number:</span>--><?php echo $key['phno_1']; ?></div></h4>
 <?php } 
 ?>
<p>-------------------------------------------</p>

 <?php 
$id=$_GET['id'];
$query="SELECT email_id2 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>2nd Email-id:</span>--><?php echo $key['email_id2']; ?></div></h4>
 <?php } 
 ?>
 <?php 
$id=$_GET['id'];
$query="SELECT college_name2 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>1st college name</span>--><?php echo $key['college_name2']; ?></div></h4>
 <?php } 
 ?>


 <?php 
$id=$_GET['id'];
$query="SELECT phno_2 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>2nd Phone number:</span>--><?php echo $key['phno_2']; ?></div></h4>
 <?php } 
 ?>
<p>-------------------------------------------</p>

 <?php 
$id=$_GET['id'];
$query="SELECT email_id3 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>3rd Email-id:</span>--><?php echo $key['email_id3']; ?></div></h4>
 <?php } ?>

 <?php 
$id=$_GET['id'];
$query="SELECT college_name3 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>1st college name</span>--><?php echo $key['college_name3']; ?></div></h4>
 <?php } 
 ?>


  <?php 
$id=$_GET['id'];
$query="SELECT phno_3 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>3rd Phone number:</span>--><?php echo $key['phno_3']; ?></div></h4>
 <?php } 
 ?>

<p>-------------------------------------------</p>

 <?php 
$id=$_GET['id'];
$query="SELECT email_id4 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>4th Email-id:</span>--><?php echo $key['email_id4']; ?></div></h4>
 <?php } ?>
<?php 
$id=$_GET['id'];
$query="SELECT college_name4 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>1st college name</span>--><?php echo $key['college_name4']; ?></div></h4>
 <?php } 
 ?>

 <?php 
$id=$_GET['id'];
$query="SELECT phno_4 FROM registration where id=$id";
$query_run=mysqli_query($mysqli,$query);
foreach ($query_run as $key) {
 ?>
 <h4><div><span>4th Phone number:</span>--><?php echo $key['phno_4']; ?></div></h4>
 <?php } 
 ?>

<p>-------------------------------------------</p>