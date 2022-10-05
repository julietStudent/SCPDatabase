<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create SCP Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1>Create SCP Record</h1>
    <p><a href="index.php" class="btn btn-primary">Index Page</a></p>
    
    <form method="post" action="connection.php" class="form-group">
        <label>Enter SCP Item:</label>
        <br>
        <input type="text" name="item" placeholder="SCP Item Number..." class="form-control">
        <br>
        
        <label>Enter Class:</label>
        <br>
        <input type="text" name="class" placeholder="Class..." class="form-control">
        <br>
        
        <label>Enter Special Containment Procedures:</label>
        <br>
        <textarea name="procedures" class="form-control"></textarea>
        <br>
        
        <label>Enter Description:</label>
        <br>
        <textarea name="description" class="form-control"></textarea>
        <br>
        
        <label>Enter Image Location:</label>
        <br>
        <input type="text" name="image" placeholder="e.g images/nameofimage.jpg" class="form-control">
        <br>
        
        <!--button-->
        <input type="submit" name="submit" class="btn btn-warning">
        
        
    </form>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>