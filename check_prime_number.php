<html>
<body>
<form method='post'>
enter a number<input type="text" name="a">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
$b=$_POST['a'];
$c=0;
if(isset($_POST["submit"]))
{
if($b==0)
{
  echo "enter number other than 0";
  exit();
}
for($i=2;$i<$b;$i++)
{
  if($b%$i==0)
  $c++;
}
if($c==0)
  echo "$b is a prime number";
else
  echo "$b not a prime number";
}?>