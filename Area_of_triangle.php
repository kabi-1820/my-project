<html>
<head>
        <title>Area of triangle</title>
 </head>       
<body>
<form method="POST">
Height:<input type="number" name="height">
<br>
Base:<input type="number" name="base">
<input type="submit" name="submit" value="Calculate">
<br>
<?php
if(isset($_POST['submit']))
    {
        $height = $_POST['height'];
        $base = $_POST['base'];
        $area = $height*$base/2;
        echo "The area of a triangle with $height and $base is: $area";
    }
    ?>
    </form>
</body>
</html>