<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Odd numbers</title>
</head>
<body>
    <h2>Print Odd numberss</h2>
    <form>
            <lable>Enter a number</lable><br>
            <input type="text" name="number"/>
            <input type="submit" value="submit"/>
    </form>
</body>
</html>
<?php 

    if(isset($_GET['number'])){

    $number = $_GET['number'];

    if(!is_numeric($number)){
        echo "Please enter a valid number";
    }else{
        echo "Odd Numbers up to $number <br>";

        for($i =1; $i <= $number; $i++){
            // echo "hello";
            // echo $i;
            if($i % 2 !=0){

                echo $i . "<br>";
            }
        }

    }

}
?>