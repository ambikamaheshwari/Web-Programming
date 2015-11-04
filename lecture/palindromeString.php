<html>
<body>
<?php
$mystring="MADMM"; 
$myArray=array(); 
$myArray= str_split($mystring); 
$len=sizeof($myArray); 
$newString="";
for($i=$len;$i>=0;$i--)
{
$newString .= $myArray[$i];
}
if($mystring==$newString){
echo  $mystring ." is a palindrome ";
}
else
echo  $mystring ." is not a palindrome ";
?>
</body>
</html>