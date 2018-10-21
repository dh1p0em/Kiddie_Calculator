<!DOCTYPE html>
<html>
<head>
<meta charset= "UTF-8">
<title> Başlık </title>
</head>

<body>
<form method= "POST">
	İsim: <br> 
	<input type= "text" name= "isim"><br><br>
    Soyisim: <br>
    <input type= "text" name= "soyisim"><br><br>
    Email: <br>
    <input type= "email" name= "email"><br><br>
    Mesaj: <br>
    <textarea name= "mesaj" rows= 5 cols= 30></textarea><br>
    <input type= "submit" name= "submit">
</form>
<br><br>
<p> Tutulan Bilgiler: </p>

<?php 
	if(isset($_POST["submit"])){
		$isim= $_POST["isim"];
		$soyisim= $_POST["soyisim"];
		$email= $_POST["email"];
		$mesaj= $_POST["mesaj"];

        	echo $isim;
        	echo "<br>";
        	echo $soyisim;
        	echo "<br>";
        	echo $email;
        	echo "<br>";
        	echo $mesaj;
        	echo "<br>";
    }
       ?>









