<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Array Elements Disply</h2>
    <?php 
        $fruits = array("Apple","Banan","Orange","Mango","Grapes");

        echo "<ul>";
        foreach($fruits as $f ){
            echo "<li>$f</li>";

        }
        echo "</ul>"
        // print_r($fruits)


    ?>
</body>
</html>