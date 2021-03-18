<?php 
   session_start();
    if(isset($_SESSION['email'])){
?>
  <div class="bg"><?php 
   include("3_one.php"); 
   include("headerad.php");
   $date=date("y-m-d");

   
 ?>
 <div class="container">
    
     <div class="panel panel-default">
         <div class="panel-heading">
			 <a class="btn btn-success" href="addadst.php">Add Student</a>
			 <a class="btn btn-success" href="massegead.php">Send Massege</a>
             <a class="btn btn-info pull-right" href="viewstu.php">View Student</a>
			 <a class="btn btn-info pull-right" href="viewstea.php">View teacher</a>
			 
         </div>
         
         <h3 class="text-center well">DATE : <?php echo date("d-m-y")?></h3> 
         <div class="panel panel-body">
		 <div class="panel-heading">
             <a class="btn btn-success" href="addtea.php">add teacher</a>
			 <a class="btn btn-info pull-right" href="msgviewtead.php"> View Teacher Massege</a>
			 </div>
			 <div class="panel-heading">
             <a class="btn btn-success" href="viewstea.php">View teacher</a>
			 <a class="btn btn-info pull-right" href="msgviewad1.php"> View Admin Massege</a>
			 
         </div>
		 
		 <table class="table table-striped">
		
			
             <form action="index.php" method="post">
                 <table class="table table-striped">
                   
					
					<tr>
                       <th>Admin Details : </th>
                       <td></td>
					                     
                    </tr>
					<tr>
                       <th>Admin Name : </th>
                       <td>Dr. A.K. Solanki</td>
					                     
                    </tr>
					<tr>
                       <th>Admin Qualification : </th>
                       <td>Phd.</td>
					                     
                    </tr>
					<tr>
                       <th>Admin Department : </th>
                       <td>Information Technology </td>
					                     
                    </tr>
					<tr>
                       <th></th>
                       <td>Computer Science Engineering</td>
					                     
                    </tr>
					
					
                 </table>
                 
             </form>
             
         </div>
     </div>
 </div>
 </div>
<style>
            body, html {
                height: 100%;
                margin: 0;
          }

        .bg { 
         background-image: url("images/repose.jpg");

         background-position: center;
         background-repeat: repeat-y;
         background-size: cover;
        }
</style>
<?php
    }
else
{
    echo'<script> 
    alert("You are not logged in!");</script>';
    echo"<script>
    location.href='loginIndex.php';
</script>";
}
?>