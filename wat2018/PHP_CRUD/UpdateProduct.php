     <?php

    include 'connection.php';

    $id=$_POST['ProductID'];
    $ProductName=$_POST['ProductName'];
    $ProductPrice=$_POST['ProductPrice'];
    $ProductImageName=$_POST['ProductImageName'];


    $query = "UPDATE products 
    SET 
    ProductName ='$ProductName', ProductPrice='$ProductPrice' , 
    ProductImageName='$ProductImageName' WHERE ProductID='$id'";

    mysqli_query($connection,$query);

    header("location: watWk8.php");


     ?>