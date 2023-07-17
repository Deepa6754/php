
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <!-- <div class="row">
            <div class="col-sm-8"> -->
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


</body>
</html>