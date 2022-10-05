<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SCP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="container bg-light">
    
    <?php include 'connection.php'; ?>
    
    <div>
        <ul class="nav py-2 navbar-dark bg-success rounded">
            <?php foreach($all_records as $link): ?>
            
            <li class="nav-item active"><a class="nav-link text-light" href="index.php?link='<?php echo $link['item'] ?>'"><?php echo $link['item'] ?></a></li>
            <?php endforeach; ?>
            <li class="nav-item"><a class="btn btn-outline-light" href="create.php">Add a new record</a></li>
        </ul>
    </div>
    
    
    <h1 class="text-center my-3">SCP Database</h1>
    
    <?php
    
      if(isset($_GET['link']))
        {
         //trim the single quotes from the get value
        $item = trim($_GET['link'], "'");
        
        //run a sql command to retrieve record based on GET value
        $record = $connection->query("select * from scp where item='$item'");
        
        //turn record into an associative array
        $array = $record->fetch_assoc();
        
        //get the id field and save value
        $id = $array['id'];
        
        //create get value based on the id
        $update = "update.php?update=" . $id;
        $delete = "connection.php?delete=" . $id;
        
        //display individual parts of the array in HTML
        echo "
            <div>
            <br>
                <div class='text-center rounded border border-dark bg-white'>
                <h2>Item #{$array['item']}</h2>
                <h4>Object Class: {$array['class']}</h4>
                </div>
                <br>
                <p><strong>Special Containment Procedures:
                <br></strong>{$array['procedures']}</p>
                <p><strong>Description: <br></strong>{$array['description']}</p>
                <p class='text-center'><img src='{$array['image']}' class='img-fluid rounded'></p>


                <p class='text-center'><a href='{$update}' class='btn btn-lg btn-warning'>Update Record</a>
                <a href='{$delete}' class='btn btn-lg btn-danger'>Delete Record</a>
                </p>
                
            </div>
            
        ";   
        }
        else
        {
            //default view when user first visits the site.
            echo '
            
                <p class="text-center"><img class="img-fluid" src="images/logo2.png"></p>
                <h3 class="text-center">Please choose an SCP file from the above menu.</h3>

            ';
        }
    ?>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>