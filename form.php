<?php

include('inter.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <form action="<?php echo ($_SERVER['PHP_SELF'])?>" method="post">
        <label for="name">id</label><br>
        <input type="text" name="id" name="name"><br>
        <label for="name">name</label><br>
        <input type="text" name="name" name="name"><br>
  <label for="age">Age</label><br>
  <input type="number" name="age" name="age"><br><br>
  <label for="gender">gender</label><br>
  <input type="text" name="gender" name="email"><br><br>
  <input type="submit" name="save" value="Submit">
</form>
<?php
// print_r($_POST);
if(isset($_POST['save'])){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  
  $query =" INSERT INTO `database` (`id`, `name`, `Age`, `gender`) VALUES ( '$id', '$name', '$age', '$gender')";
$result = mysqli_query($connection , $query);

if(!$result){
  echo "connection error";
}


} 

?>
</body>
</html>
