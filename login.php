<?php

$con=mysqli_connect("localhost","root","",'form');
// if($con){
//   echo "connection succefully <hr>";
// }else{
//   echo "connection Failed<hr>";
// }
if(isset($_REQUEST['sub-submit'])){
  
  if(($_REQUEST['name']=="")||($_REQUEST['department']=="")||($_REQUEST['age']=="")||($_REQUEST['salary']=="")){
    echo "fiil all field<hr>";
  }else{

    $name=$_REQUEST['name'];
    $department=$_REQUEST['department'];
    $age=$_REQUEST['age'];
    $salary=$_REQUEST['salary'];


   $sql="INSERT INTO emp (name,department,age,salary )VALUES ('$name','$department' ,'$age',$salary)";
   if(mysqli_query($con,$sql))
     echo "Data saved<hr>";
    else
     echo "Data is not saved<hr>";
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">   
  <title>Form</title>
</head>

<body class="login_body">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-sm-6">
                <div class="login_f">
                    
                 <div class="client_cl">
                       <h1>Login Form</h1><hr>
                       <form  id="myForm" onsubmit="validateForm(event)" method="POST">
                           <!-- <div class="mb-3"> -->
                              <!-- <label for="employeeId" class="form-label">Employee ID</label>
                              <input type="text" class="input_form" id="employeeId" name="employeeId" required>
                              <small class="error" id="employeeIdError"></small> -->
                           <!-- </div> -->

                          <!-- <div class="mb-3"> -->
                             <label for="name" class="form-label">Name</label>
                             <input type="text" class="input_form" id="name" name="name" required>
                             <small class="error" id="nameError"></small>
                          <!-- </div> -->

                          <!-- <div class="mb-3"> -->
                             <label for="department" class="form-label">Department</label>
                             <input type="text" class="input_form" id="department" name="department" required>
                             <small class="error" id="departmentError"></small>
                          <!-- </div> -->

                          <!-- <div class="mb-3"> -->
                             <label for="age" class="form-label">Age</label>
                             <input type="number" class="input_form" id="age" name="age" required>
                             <small class="error" id="ageError"></small>
                          <!-- </div> -->

                           <!-- <div class="mb-3"> -->
                               <label for="salary" class="form-label">Salary</label>
                               <input type="number" class="input_form" id="salary" name="salary" required>
                               <small class="error" id="salaryError"></small>
                            <!-- </div> -->

                           <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <div class="submit_cl  ">
                            <form action="show.php" method="POST">
                               <button class="submit_btn btn btn-info form-control" id="sub-submit"  name="sub-submit" type="submit" > Submit</button>
                               </form>
                              </div>
                       </form>
                   </div>
                </div>
           </div>
    <div class="container-fluid ">
        <div class="row">
          <div class="col-sm-5 second-tab">
            <style>
              .col-sm-5.second-tab {
    border: 2px solid #c8c8c8;
    border-radius: 10px;
    box-shadow: 0px 0px 13px -3px #000;
    margin-top: 33px;
    margin-left: 60px;
}
              </style>
            
            <?php
                $con=mysqli_connect("localhost","root","",'form');
                // if($con){
                //        echo "connection succefully <hr>";
                //     }else{
                //         echo "connection Failed<hr>";
                //      }
                     $sql="SELECT *FROM emp";
                     $res=mysqli_query($con,$sql);
                     if(mysqli_num_rows($res)>0){
                        echo '<table class="table" >';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Employee ID</th>";
                        echo "<th>Name</th>";
                        echo "<th>Department</th>";
                        echo "<th>Age</th>";
                        echo "<th>salary</th>";
                      
                        echo "</tr>";
                        echo "</thead>";
                        echo "</tbody>";
                        while($row=mysqli_fetch_assoc($res)){
                            echo "<tr>";
                            echo "<td>".$row["employeeId"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["department"]."</td>";
                            echo "<td>".$row["age"]."</td>";
                            echo "<td>".$row["salary"]."</td>";
                            echo "</tr>";
                        }
                       
                     }else{
                        echo "0 record";
                     }

              ?>
            </tbody>
 </table>
</div>


<div class="col-sm-3 second-table">
  <style>
    .col-sm-3.second-table {
    /* margin-left: 688px; */
    border: 2px solid #c8c8c8;
    box-shadow: 0px 0px 13px -3px #000;
    border-radius: 15px;
    margin-left: 125px;
    margin-top: 33px;
}
}
    </style>
            <?php
                $con=mysqli_connect("localhost","root","",'form');
                // if($con){
                //        echo "connection succefully <hr>";
                //     }else{
                //         echo "connection Failed<hr>";
                //      }
                     $sql="SELECT *FROM emp";
                     $res=mysqli_query($con,$sql);
                     if(mysqli_num_rows($res)>0){
                        echo '<table class="table tb1" >';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Department ID</th>";
                      
                        echo "<th>Department</th>";
                      
                      
                        echo "</tr>";
                        echo "</thead>";
                        echo "</tbody>";
                        while($row=mysqli_fetch_assoc($res)){
                            echo "<tr>";
                            echo "<td>".$row["employeeId"]."</td>";
                        
                            echo "<td>".$row["department"]."</td>";
                          
                            echo "</tr>";
                        }
                       
                     }else{
                        echo "0 record";
                     }

              ?>
            </tbody>
 </table>
</div>




        </div>
   </div>
</div>

  <!-- <script>
    function validateForm(event) {
      event.preventDefault();

      // Reset errors
      const errorElements = document.getElementsByClassName('error');
      Array.from(errorElements).forEach((element) => {
        element.textContent = '';
      });

      // Get form values
      const employeeId = document.getElementById('employeeId').value;
      const name = document.getElementById('name').value;
      const department = document.getElementById('department').value;
      const age = document.getElementById('age').value;
      const salary = document.getElementById('salary').value;

      // Validate form fields
      let isValid = true;

      if (employeeId.trim() === '') {
        document.getElementById('employeeIdError').textContent = 'Employee ID is required.';
        isValid = false;
      }

      if (name.trim() === '') {
        document.getElementById('nameError').textContent = 'Name is required.';
        isValid = false;
      }

      if (department.trim() === '') {
        document.getElementById('departmentError').textContent = 'Department is required.';
        isValid = false;
      }

      if (age.trim() === '') {
        document.getElementById('ageError').textContent = 'Age is required.';
        isValid = false;
      }

      if (salary.trim() === '') {
        document.getElementById('salaryError').textContent = 'Salary is required.';
        isValid = false;
      }

      // If all fields are valid, submit the form
      if (isValid) {
        document.getElementById('myForm').submit();
      }
    } 
  </script>-->
 
 </body>
</html>

