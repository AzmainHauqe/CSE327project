<?php

        if(isset($_POST['Submit']))
        {
            $course = $_POST['course'] ;
            $credit = $_POST['credit'] ;
            $semester = $_POST['semester'] ;
            
            $mysql = mysqli_connect('localhost' ,'root', '','courselist')  ;
            $sql = "INSERT INTO courselist_info(Course,Credit,Semester) VALUES('$course','$credit','$semester')" ;
            
            $result = mysqli_query($mysql,$sql) ;
            
            
            
            if($result==true)
            {
                
                header("location:insert.php") ;
            }
            else
            {
                echo "Submit Again" ;
            }
            
        }
    ?>