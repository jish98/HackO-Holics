<?php 
require 'config.php';
session_start();
if (!$_SESSION['user']){
   header('location:adminlogin.php');


}
 ?>
<style>
.anu{
	margin: -35px;
	padding-left: 330px;
}
</style>
<?php if(isset($_GET['sub'])){
	session_destroy();
	header('location:adminlogin.php');	
} ?>

<h1 style="color:blue;"> You are logged in as: <div class="anu" style="color:lightgreen;"><?php echo  $_SESSION['user']; ?></div></h1>
<center>	
	<h2>PARTICIPANTS LIST</h2>


<form method="get" action="admin.php">
<input type="submit" value="logout" name="sub">
</form>

<table border='1' style="font-size:30px;" >
<?php 
$query="SELECT * from registration";
$query_run=mysqli_query($mysqli,$query);

foreach ($query_run as $key) {
 ?>
<tr>
<div> <td><?php echo $key['id'];?></td> <td><?php echo $key['team_name'] ?></td> <td>

<form method="get" action="abstract.php">
	
	<input type="submit"  value="Read abstract">


	<input type="hidden" value=<?php echo $key['id']; ?> name="id">
	<input type="hidden" value=<?php echo $key['team_name']; ?> name="team_name">
</form>

</td>

</div></tr>	


 <?php } ?>

 </table>


 <?php 
 $query="SELECT * from registration WHERE gender_1='1' ";
 $query_run=mysqli_query($mysqli,$query);
$male_1=mysqli_num_rows($query_run);

 ?>


 <?php 
 $query="SELECT * from registration WHERE gender_1='2' ";
 $query_run=mysqli_query($mysqli,$query);
$female_1=mysqli_num_rows($query_run);
 
 ?>

 <?php 
 $query="SELECT * from registration WHERE gender_2='1' ";
 $query_run=mysqli_query($mysqli,$query);
$male_2=mysqli_num_rows($query_run);
 
 ?>

 <?php 
 $query="SELECT * from registration WHERE gender_2='2' ";
 $query_run=mysqli_query($mysqli,$query);
$female_2=mysqli_num_rows($query_run);

 ?>
 
 
 <?php 
 $query="SELECT * from registration WHERE gender_3='1' ";
 $query_run=mysqli_query($mysqli,$query);
$male_3=mysqli_num_rows($query_run);
 
 ?>


 <?php 
 $query="SELECT * from registration WHERE gender_3='2' ";
 $query_run=mysqli_query($mysqli,$query);
$female_3=mysqli_num_rows($query_run);

 ?>


 <?php 
 $query="SELECT * from registration WHERE gender_4='1' ";
 $query_run=mysqli_query($mysqli,$query);
$male_4=mysqli_num_rows($query_run);
 
 ?>


 <?php 
 $query="SELECT * from registration WHERE gender_4='2' ";
 $query_run=mysqli_query($mysqli,$query);
$female_4=mysqli_num_rows($query_run);
 
 ?>
<h3>NUMBER OF MALES PARTICIPATING:</h3>
 <?php 
$male_count=$male_1+$male_2+$male_3+$male_4;
echo $male_count;
 ?>

<H3>NUMBER OF FEMALES PARTICIPATING:</H3>

<?php 
$female_count=$female_1+$female_2+$female_3+$female_4;
echo $female_count;
 ?>

<?php 
 $query="SELECT * from registration WHERE food_1='1' ";
 $query_run=mysqli_query($mysqli,$query);
$veg_1=mysqli_num_rows($query_run);
?>
<?php 
 $query="SELECT * from registration WHERE food_1='2' ";
 $query_run=mysqli_query($mysqli,$query);
$nv_1=mysqli_num_rows($query_run);
?>

<?php 
 $query="SELECT * from registration WHERE food_2='1' ";
 $query_run=mysqli_query($mysqli,$query);
$veg_2=mysqli_num_rows($query_run);
?>

<?php 
 $query="SELECT * from registration WHERE food_2='2' ";
 $query_run=mysqli_query($mysqli,$query);
$nv_2=mysqli_num_rows($query_run);
?>

<?php 
 $query="SELECT * from registration WHERE food_3='1' ";
 $query_run=mysqli_query($mysqli,$query);
$veg_3=mysqli_num_rows($query_run);
?>

<?php 
 $query="SELECT * from registration WHERE food_3='2' ";
 $query_run=mysqli_query($mysqli,$query);
$nv_3=mysqli_num_rows($query_run);
?>

<?php 
 $query="SELECT * from registration WHERE food_4='1' ";
 $query_run=mysqli_query($mysqli,$query);
$veg_4=mysqli_num_rows($query_run);
?>

<?php 
 $query="SELECT * from registration WHERE food_4='2' ";
 $query_run=mysqli_query($mysqli,$query);
$nv_4=mysqli_num_rows($query_run);
?>
<h3>NUMBER OF VEGETARIANS:</h3>
<?php 
$veg_count=$veg_1+$veg_2+$veg_3+$veg_4;
echo $veg_count;
 ?>
 <h3>NUMBER OF NON-VEGETARIANS:</h3>
<?php 
$nv_count=$nv_1+$nv_2+$nv_3+$nv_4;
echo $nv_count;
 ?>
 </center>