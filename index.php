<!-- //Connected this page -->
<?php
     include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>43.1_44.1_45.1 DB CRUD SYSTEM</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1><center><u><i>***MySQL DB CRUD SYSTEM***</i></u></center></h1>
      <!-- bootstrap navbar -->
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <a class="navbar-brand" href="#"><img src="img/slistlogo.png" alt="alternatetext"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create Students Data List</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </div>

    <!-- bootstrap table -->
    <div class="container">
    <h3><center><u><i>Student List</i></u></center></h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Name</th>
      <th scope="col">Roll</th>
      <th scope="col">Class</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
         <?php
            $query= 'SELECT * FROM students_2';
            // For Students data Read (students_2)
            $students_2 = mysqli_query($connection,$query);
             
            // testing for getting data 
            // echo $students_2; 
            // testing for getting data for sure 
            //associative array browser a show korano easy
            if($students_2){

              $serialNumber = 1;
              while($row= mysqli_fetch_assoc($students_2)){
                $id   = $row['id']; 
                $name = $row['name']; 
                $roll = $row['roll']; 
                $class = $row['class']; 
                $phone = $row['phone']; 
                $address = $row['address']; 
                $email =$row['email']; 

                //all data showning this system "do concatenation" #for testing
                // echo $row['id'].$row['name'].$row['roll'].$row['class'].$row['phone'].$row['address'].$row['email'];
                
                // *****php te html echo dia likte hoi with quotation mark 
                //string ar sathe php variable gulo concatanition kora hoyese '.$id.'
                // <th scope="row">'.$id.'</th>
                // //  <th scope="row">'.$id.'</th>
                echo
                '<tr>
                    
                     <th scope="row">'.$serialNumber.'</th>
                     <td>'.$name.'</td>
                     <td>'.$roll.'</td>
                     <td>'.$class.'</td>
                     <td>'.$phone.'</td>
                     <td>'.$address.'</td>
                     <td>'.$email.'</td>
                     <td>
                      <a href="edit.php?id='.$id.'" class="btn btn-primary"> Edit</a>
                      <a href="delete.php?id='.$id.'" class="btn btn-danger"> Delete</a>
                     </td>
              </tr>';
                    $serialNumber++;
              };
            };
         ?>
    
  </tbody>
</table>
    </div>

    <!-- bootstrap css link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>