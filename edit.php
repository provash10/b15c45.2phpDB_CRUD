<!-- //Connected this page -->
<?php
     include 'config.php';
?>

 <!-- EDIT-UPDATE DATA query  // $query = "SELECT * FROM students_2 WHERE id = 3"; -->
<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
    $query = "SELECT * FROM students_2 WHERE id = $id";
    $singleData = mysqli_query($connection, $query);
   
    $data = mysqli_fetch_assoc($singleData);

    $id = $data['id'];
    $name = $data['name'];
    $roll = $data['roll'];
    $class = $data['class'];
    $phone = $data['phone'];
    $address = $data['address'];
    $email = $data['email'];

    }
    if(isset($_POST['submit'])){

        $id      = $_GET['id'];
        $name    = $_POST['name'];
        $email   = $_POST['email'];
        $phone   = $_POST['phone'];
        $class   = $_POST['class'];
        $roll    = $_POST['roll'];
        $address = $_POST['address'];

        
        $query = "UPDATE students_2 SET name ='$name', roll = '$roll', class = '$class', phone = '$phone', address = '$address', email ='$email' WHERE id = $id";
        $updateData= mysqli_query($connection, $query);

        if($updateData == true){
            header('location:index.php');
        }
        else{
            echo 'Failed to update data!';
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Students List</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
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
    
    <!-- Bootstrap Form -->
    <div class="container">
        <form action="" method="">
           <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Name*</label>
             <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" value="<?php echo $name ?>" required>
           </div>

           <div class="mb-3">
             <label for="email" class="form-label">Email*</label>
             <input type="email" class="form-control" placeholder="Enter Email" name="email" id="email" value="<?php echo $email ?>" required>
           </div>

           <div class="mb-3">
             <label for="phone" class="form-label">Phone*</label>
             <input type="text" class="form-control" placeholder="Enter Phone" name="phone" id="phone" value="<?php echo $phone ?>" required>
           </div>

           <div class="mb-3">
             <label for="class" class="form-label">Class*</label>
             <input type="text" class="form-control" placeholder="Enter Class" name="class" id="class" value="<?php echo $class ?>" required>
           </div>
                  <!--For ****class depends on database. input type="number" hobe. ****text hobe na -->

           <div class="mb-3">
             <label for="roll" class="form-label">Roll*</label>
             <input type="number" class="form-control" placeholder="Enter Roll" name="roll" id="roll" value="<?php echo $roll ?>" required>
           </div>

           <div class="mb-3">
             <label for="address" class="form-label">Address*</label>
              <textarea class="form-label" name="address" id="address" required> <?php echo $address ?></textarea>
           </div>
  
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


    <!-- bootstrap css link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>