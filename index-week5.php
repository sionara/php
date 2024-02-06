<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week 5</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-5 mt-4 mb-4">Student Catalog</h1>
      </div>  
    </div> 
    
    <?php 
    $connect = mysqli_connect("localhost", 'root', 'root', 'HTTP5225');
    $query = 'SELECT id, fname, lname, marks, grade, imageURL FROM students';

    $students = mysqli_query($connect, $query);

    if(mysqli_connect_error()){
      die("Connection error:" . mysqli_connect_error());
    }
  ?> 

  <div class="container">
    <div class="row">

    <?php

      foreach($students as $student ) {

        if($student['marks'] < 50){
          $bgClass = 'bg-danger';
        } else {
          $bgClass = 'bg-success';
        }

        echo '<div class="card '. $bgClass .' " style="width: 18rem;">
        <img class="card-img-top" src="' . $student['imageURL'] . '" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">' . $student['fname'] . ' '.$student['lname'] .' ' . $student['marks'] .'</h5>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>';
      }
      
    ?>
    </div>
  </div>
  </div> 
 


</body>
</html>