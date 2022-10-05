<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update SCP Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="container">
      
      <?php
      
      include "connection.php";
      
      $id = $_GET['update'];
      
      $record = $connection->query("select * from scp where id='$id'");
      
      $array = $record->fetch_assoc();
      
      ?>
      
    <h1>Create SCP Item</h1>
    
    <p><a href="index.php" class="btn btn-primary">Index Page</a></p>
    
    <form method="post" action="connection.php" class="form-group">
        <input type="hidden" name="id" value="<?php echo $array['id']; ?>"
        
        <label>SCP Item</label>
        <br>
        <input type="text" name="item" value="<?php echo $array['item']; ?>" class="form-control">
        <br>
        
        <label>Class</label>
        <br>
        <input type="text" name="class" value="<?php echo $array['class']; ?>" class="form-control">
        <br>
        
        <label>Secure Containment Procedure</label>
        <br>
        <textarea name="procedures" class="form-control"><?php echo $array['procedures']; ?></textarea>
        <br>
        
        <label>Description</label>
        <br>
        <textarea name="description" class="form-control"><?php echo $array['description']; ?></textarea>
        <br>
        
        <label>Image Location</label>
        <br>
        <input type="text" name="image" value="<?php echo $array['image']; ?>" class="form-control">
        <br>
        
        <input type="submit" name="update" class="btn btn-warning">
        
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>