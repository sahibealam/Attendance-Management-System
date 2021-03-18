<?php 
   session_start();
    if(isset($_SESSION['email'])){
?>
  <div class="bg"><?php 
   include("3_one.php"); 
   include("headerst.php");
   $date=date("y-m-d");
   $roll=$_SESSION['email'];
   
 ?>
 <div class="container">
    
     <div class="panel panel-default">
         <div class="panel-heading">
             <a class="btn btn-success" href="msgviewtest.php">Tacher Massage</a>
			 <a class="btn btn-success" href="msgviewadst.php">admin Massage</a>
             <a class="btn btn-info pull-right" href="changetst.php">Change Password</a>
         </div>
         
         <h3 class="text-center well">DATE : <?php echo date("d-m-y")?></h3> 
         <div class="panel panel-body">
		 
		 <table class="table table-striped">
		
			
             <form action="index.php" method="post">
                 <table class="table table-striped">
                     <?php $results=mysqli_query($con,"select * from student_table where roll_number='$roll'");
						$row=mysqli_fetch_array($results)
					?>
					
					<tr>
                       <th>STUDENT NAME : </th>
                       <td><?php echo $row['student_name'];?></td>
					   <input type="hidden" value="<?php echo $row['student_name'];?>" name="student_name[]">                       
                    </tr>
					
					<tr>
                       <th>ROLL NUMBER :</th>
                       <td><?php echo $row['roll_number'];?></td>
					   <input type="hidden" value="<?php echo $row['roll_number'];?>" name="roll_number[]">                       
                    </tr>
					
					<tr>
                       <th>BRANCH :</th>
                       <td><?php echo $row['branch'];?></td>
					   <input type="hidden" value="<?php echo $row['branch'];?>" name="branch[]">                       
                    </tr>
					
					<tr>
                       <th>YEAR</th>
                       <td><?php echo $row['year'];?></td>
					   <input type="hidden" value="<?php echo $row['year'];?>" name="year[]">                       
                    </tr>
					 <?php $result=mysqli_query($con,"select * from present_record where roll_number=$roll");
                 ?>
					<tr>
                       <th>ATTENDENCE</th>
                       <th><?php    
                       $average=mysqli_query($con,"SELECT AVG(attend_status) as aver FROM present_record where roll_number='".$roll."'");
                       $res=mysqli_fetch_assoc($average);
                       echo ($res['aver']*100);?>%
                        </th>

                       
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
    location.href='loginIndexst.php';
</script>";
}
?>