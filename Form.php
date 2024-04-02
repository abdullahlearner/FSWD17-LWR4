<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>Simple PHP Calculator</h2>
    <form  action="data.php">
            <lable>Enter Frist Number</lable>
            <input type="text"  name="num1"/><br><br>
            
                <!-- + -  * / % -->
            <lable>Select An Operator:</lable>
            <select name="operator">
                    <option value="+">Addtion (+)</option>
                    <option value="-">Subtratction(-)</option>
                    <option value="*">Multiplication (*)</option>
                    <option value="/">Division (/)</option>
            </select>
                <br><br>
            <lable>Enter Second Number</lable>
            <input type="text"  name="num2"/>
            <input type="submit" value="Submit"/>
    </form>
</body>
</html>