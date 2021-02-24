<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="stilius.css">
    <link rel="stylesheet" href="reset.css">
</head>
<body>

<div class="background"></div>
<main>
<center>
<?php
print("<pre>");

error_reporting(0);

$ugis= $_POST["ugis"];
$svoris= $_POST["svoris"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!isset($_POST['ugis']) || empty($_POST['ugis']))
      print('<h3 style="color: red">Įveskite savo ūgį</h3>');
    
      
    if(!isset($_POST['svoris']) || empty($_POST['svoris']))
      print('<h3 style="color: red">Įveskite savo svorį</h3>');
    


If($svoris/(($ugis*$ugis)/10000)<18.5)
    print('<h3 style="color: grey">Nepakankamas svoris</h3>' );
    else if($svoris/(($ugis*$ugis)/10000)<25)
    print('<h3 style="color: grey">Normalus svoris</h3>');
    else if($svoris/(($ugis*$ugis)/10000)<30)
    print('<h3 style="color: grey">Antsvoris</h3>');
    else if($svoris/(($ugis*$ugis)/10000)>30)
    print('<h3 style="color: grey">Nutukimas</h3>');

}

print("</pre>");

?>
</center>

<form   action="./" method="POST">  
<label class="label"  for="fname">Jūsų ūgis (cm):</label><br>
<input class="label"  type="number" id="<?php echo 'ugis'; ?>" name="ugis" value="<?php if(isset($_POST['ugis'])) print($_POST['ugis']) ?>"><br>
<label class="label" for="lname">Jūsų svoris (kg):</label><br>
<input  class="label" type="number" id="<?php echo 'svoris'; ?>" name="svoris" value="<?php if(isset($_POST['svoris'])) print($_POST['svoris']) ?>"><br>
<input class="label" type="submit" value="Skaičiuoti">
</form>
</main>


</body>
</html>


