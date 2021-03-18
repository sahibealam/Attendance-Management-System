<?php
if(isset($_POST['Submit']))
{
 session_start();
 include("3_one.php");
$user=$_POST['numb'];
$pass=$_POST['pass'];
$logi=mysqli_query($con,"select * from student_table where roll_number='$user'");
$logres=mysqli_fetch_array($logi);
if($logi!=null && $logres['passward']==$pass){
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
