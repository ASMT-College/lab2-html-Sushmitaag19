<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check the age</title>
</head>
<body>
    <h1>Are you old enough to login in ?</h1>
    <?php
    if(isset($_GET['age_submit'])){
        $age=$_GET['age'];
        if($age>18){
            echo "You are eligible";
        }
        else{
            $rem=18-$age;
            echo "<h3>You can't log in.  Get back after $rem years.</h3>";
        }
    }
        else{
            ?>
            <form action="#">
        <label for="age"> Enter your age: <br>
            <input type="text" name="age">
        </label>
        <input type="submit" value="Submit" name="age_submit">
    </form>
    <?php
    }
    ?>
   
</body>
</html>

   