<?php
if(isset($_POST['Submit']))
{
 session_start();
 include("3_one.php");
$user=$_POST['emailad'];
$pass=$_POST['passad'];
$logi=mysqli_query($con,"select * from admin_login where user_name='$user'");
$logres=mysqli_fetch_array($logi);
if($logi!=null && $logres['password']==$pass){
    $_SESSION['email']=$user;
    header("location:indexad.php");
}
else
{
?>
<script>
    alert("Login details are not correct!");
    location.href='loginIndexad.php';
</script>

<?php
}
}
?>
