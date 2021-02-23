<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
print("<pre>");

$ugis= $_POST["fname"];
$svoris= $_POST["lname"];

If($svoris/(($ugis*$ugis)/10000)<18.5)
    print('nepakankamas svoris');
    else if($svoris/(($ugis*$ugis)/10000)<25)
    print('normalus svoris');
    else if($svoris/(($ugis*$ugis)/10000)<30)
    print('Antsvoris');
    else if($svoris/(($ugis*$ugis)/10000)>30)
    print('Nutukimas');

// print($_POST["fname"].  "-" . $_POST["lname"]);



// if(isset ($_POST['fname']))
//             print('<h3 style="color: red">Please enter your first name!</h3>');


            

print("</pre>");

?>

<form action="./" method="POST">  
<label for="fname">Jūsų ūgis (cm):</label><br>
<input type="text" id="fname" name="fname" value=""><br>
<label for="lname">Jūsų svoris (kg):</label><br>
<input type="text" id="lname" name="lname" value=""><br>
<input type="submit" value="Skaičiuoti">
</form>



</body>
</html>


