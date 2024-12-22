<!-- //Connected this page -->
<?php
     include 'config.php';
?>

<!--DELETE DATA Query-->
<?php

    if(isset($_GET['id'])){
         $id = $_GET['id'];

         $query ="DELETE FROM students_2 WHERE id = $id";

         $deleteData = mysqli_query($connection, $query);

         if($deleteData){
              header('location:index.php');   
         }
         else {
               echo "Failed to delete data";
         }
    }

    
?>