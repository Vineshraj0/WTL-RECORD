<html>  
<body>  
    <form method="post">  
        Enter a number to check prime or not: <input type="text" name="num">  
        <input type="submit" name="submit" value="Submit">  
    </form>  
</body>  
</html> 



<?php
$num = $_POST['num'];  
$count=0;  
for ( $i=1; $i<=$num; $i++)  
{  
if (($num%$i)==0)  
{  
$count++;  
}  
}  
if ($count<3)  
{  
echo "$num is a prime number.";  
}
else
{
echo "$num is not a prime number."; 
}
?>
 
