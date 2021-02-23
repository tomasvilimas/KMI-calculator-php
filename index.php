<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
print("<pre>");

$ugis= $_POST["ugis"];
$svoris= $_POST["svoris"];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!isset($_POST['ugis']) || empty($_POST['ugis']))
      print('<h3 style="color: red">Įveskite savo ūgį</h3>');
    
      
    if(!isset($_POST['svoris']) || empty($_POST['svoris']))
      print('<h3 style="color: red">Įveskite savo svorį</h3>');
    


If($svoris/(($ugis*$ugis)/10000)<18.5)
    print('nepakankamas svoris' );
    else if($svoris/(($ugis*$ugis)/10000)<25)
    print('normalus svoris');
    else if($svoris/(($ugis*$ugis)/10000)<30)
    print('Antsvoris');
    else if($svoris/(($ugis*$ugis)/10000)>30)
    print('Nutukimas');

}

print("</pre>");

?>

<form  class="label" action="./" method="POST">  
<label  for="fname">Jūsų ūgis (cm):</label><br>
<input  type="text" id="<?php echo 'ugis'; ?>" name="ugis" value="<?php if(isset($_POST['ugis'])) print($_POST['ugis']) ?>"><br>
<label for="lname">Jūsų svoris (kg):</label><br>
<input type="text" id="<?php echo 'svoris'; ?>" name="svoris" value="<?php if(isset($_POST['svoris'])) print($_POST['svoris']) ?>"><br>
<input type="submit" value="Skaičiuoti">
</form>



</body>
</html>


