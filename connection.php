<?php

    $user = "a30060951_user";
    $pw = "Toiohomai1234";
    $db = "a30060951_SCP";
    
    $connection = new mysqli('localhost', $user, $pw, $db);
    
    $all_records = $connection->query("select * from scp");
    
    if(isset($_POST['submit']))
    {
        $item = mysqli_real_escape_string($connection, $_POST['item']);
        $class = mysqli_real_escape_string($connection, $_POST['class']);
        $procedures = mysqli_real_escape_string($connection, $_POST['procedures']);
        $description = mysqli_real_escape_string($connection, $_POST['description']);
        $image = mysqli_real_escape_string($connection, $_POST['image']);
        
        $insert = "insert into scp(item, class, procedures, description, image) values('$item', '$class', '$procedures', '$description', '$image')";
        
        if($connection->query($insert) === TRUE)
        {
            echo "
            <h1>Record added successfully</h1>
            <p><a href='index.php'>Return to index page</a></p>
            ";
        }
        else
        {
            echo "
            <h1>Error submitting data</h1>
            <p>{$connection->error()}</p>
            <p><a href='index.php'>Return to index page</a></p>
            ";
        }
        
    } //end of isset POST (insert/create)
    
    if(isset($_POST['update']))
    {
        
        $id = $_POST['id'];
        
        $item = mysqli_real_escape_string($connection, $_POST['item']);
        $class = mysqli_real_escape_string($connection, $_POST['class']);
        $procedures = mysqli_real_escape_string($connection, $_POST['procedures']);
        $description = mysqli_real_escape_string($connection, $_POST['description']);
        $image = mysqli_real_escape_string($connection, $_POST['image']);
        
        $update = "update scp set item='$item', class='$class', procedures='$procedures', description='$description', image='$image' where id='$id'";
    
    if($connection->query($update) === TRUE)
    {
        echo "
            <h1>Record updated successfully</h1>
            <p><a href='index.php'>Return to index page</a></p>
            ";
    }
    else
    {
        echo "
        <h1>Record did not update</h1>
        <p>{$connection->error()}</p>
        <p><a href='index.php'>Return to index page</a></p>
        ";
    }
        
    }
    
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        
        $del = "delete from scp where id=$id";
        
        if($connection->query($del) == TRUE)
        {
            echo "
            <h1>Record Deleted</h1>
            <p><a href='index.php'>Back to index page</a></p>
            ";
        }
        else
        {
            echo "
            <h1>Error deleting record</h1>
            <p>{$connection->error()}</p>
            <p><a href='index.php>Back to index page</a></p>
            ";
        }
    }
    
    
    
    
    
    
    
    
    
?>