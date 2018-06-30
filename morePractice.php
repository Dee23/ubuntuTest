<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/*$date = getdate();

if($date['month'] == "August")
{
    echo "It's August, so it's really hot";
}
else
{
    echo "Not August, so at least not in the peak of heat";
}*/

/*$counter=0;
$lineNum=1;
$item = ['A','B','C','D','E','F'];
while($counter<=5) {
    echo $lineNum. ". Item" .$item[$counter];
    $counter++;
    $lineNum++;
}
*/
echo "\n<ol>";
for ($x='A'; $x<'G'; $x++){
    echo "<li>Item $x</li>\n";
}
echo "\n</ol>";
?>
</body>
</html>