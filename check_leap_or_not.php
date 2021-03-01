<html> 
<head>
        <title>Checked whether number Leap or not</title>
</head>
<body>  
    <form method="POST">  
        Enter the Year: <input type="text" name="year"> 
        <input type="submit" name="submit" value="Checked"> <br>
<?php   
    if($_POST)  
    {     
        //get the year  
        $year = $_POST['year'];   
        //check if entered value is a number  
        if(!is_numeric($year))  
        {  
            echo "Strings not allowed, Input should be a number";  
            return;  
        }  
        //multiple conditions to check the leap year  
        if(0 == $year % 4)
        {  
            echo "$year is a Leap Year";    
        }  
        else  
        {  
            echo "$year is not a Leap Year";    
        }  
    }   
?>
    </form>  
</body>  
</html>  
