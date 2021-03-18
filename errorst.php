<?php
if(isset($_POST['Submit']))
{
 session_start();
 include("3_one.php");
 include("headerst.php")
 ?>

 <?php
$user=$_POST['numb'];
$pass=$_POST['pass'];
$logi=mysqli_query($con,"select * from student_table where roll_number='$user'");
if(isset($_POST['submit']))
{
$logres=mysqli_fetch_array($logi);
if($logi!=null && $logres['password']==$pass){
    $_SESSION['email']=$user;
    header("location:indexst.php");
}
else
{
?>
<script>
    alert("Login details are not correct!");
    location.href='loginIndexst.php';
</script>

<?php
}
}
?>  
	
		<form action="#" method="post">

	             <a class="input100" type="text" name="roll" value=<?php'$user'?> >
				 <div class="form-group">
                 <input type="submit" name="submit" value="Continue" class="btn btn-primary" required>
             </div>
         </form>


<?php
}
?>
