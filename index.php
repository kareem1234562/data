<?php
$user_name="root";
$password="";
$database=new PDO("mysql:host=localhost;dbname=learn;charset=utf8",$user_name,$password);

if(isset($_POST['send'])){
    $name=$_POST["name"];
    $price=$_POST["price"];
    $sql=$database->prepare("INSERT INTO course(name,price)
     VALUES('$name','$price')");
     if($sql->execute()){
        echo "data sent";
     }
}
?>


<form action="" method="post">
    name course <input type="text" name="name" required>
    <br>
    price <input type="text" name="price" required>
    <br>
    <input type="submit" name="send">
</form>

