<?php
include "config.php" ;
    $mysql = mysqli_connect('localhost' ,'root', '','courselist');
    $query = "SELECT * from courselist_info ORDER by Serial DESC" ;
    $result= mysqli_query($mysql,$query) ;
   
?>
<!DOCTYPE html>
<html>
    <head>
        <title>CGPA CALCULATOR</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    
    <body bgcolor="#8a8c84">
        <center>
        <h1>CGPA CALCULATOR</h1>
        <form action="config.php" method="POST">
            Course<input type="text" name="course"><br><br>
            Credit<input type="credit" name="credit"><br><br>
            Semester<input type="semester" name="semester"><br><br>
            <input type="submit" name="Submit">
        </form>
       
     <h2>Completed Course Informations</h2>
<table bgcolor="white" width="30%" border="2" cellpadding="5" cellspacing="5" >
       
   <tr bgcolor="black" style="color:red" >
        <th>Course</th>
        <th>Credit</th>
        <th>Semester</th>
    </tr>

<?php
      while($row=mysqli_fetch_array($result))
        {
          
            echo '<tr>' ;
            echo '<td>' .$row['Course'].'</td>' ;
            echo '<td>' .$row['Credit'].'</td>' ;
            echo '<td>' .$row['Semester'].'</td>' ;
            echo '</tr>' ;
          
        }
 ?>
   
</table>
     </center>
    </body>
        
</html>
