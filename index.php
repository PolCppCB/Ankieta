<!DOCTYPE html
<html lang="pl">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"> 
    <title>Rezultat zapytania</title>
	

</head>

<body>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>TEST</title>
</head>

<body>
	
	Tylko martwi ujrzeli koniec wojny - Platon<br /><br />
	
	
	
		Wybierz odpowiedz
	<form action="index.php" method="post" >
	Za  1 PKT<br/>
		<input type="radio" name="wybor" value="2">B<br/>
		<input type="radio" name="wybor" value="3">C<br/>
		<input type="radio" name="wybor" value="4">D<br/>
		<input type="radio" name="wybor" value="5">E<br/>
		<input type="radio" name="wybor" value="6">F<br/>
	
	Za 2 PKT<br/>
		<input type="radio" name="wybor" value="2">B<br/>
		<input type="radio" name="wybor" value="3">C<br/>
		<input type="radio" name="wybor" value="4">D<br/>
		<input type="radio" name="wybor" value="5">E<br/>
		<input type="radio" name="wybor" value="6">F<br/>
	
	Za 3 PKT<br/>
		<input type="radio" name="wybor" value="2">B<br/>
		<input type="radio" name="wybor" value="3">C<br/>
		<input type="radio" name="wybor" value="4">D<br/>
		<input type="radio" name="wybor" value="5">E<br/>
		<input type="radio" name="wybor" value="6">F<br/>
		</br>
		<br>Podaj swój Pesel</br>
		<input type="text" name="997" /><br/>
	<input type="submit" value="Zagłosój" /><br/>







	


</body>
</html> 


<?php 
ini_set("display_errors", 0);
require_once 'connect.php';
$polaczenie = mysqli_connect($host, $user, $password);
mysqli_query($polaczenie, "SET CHARSET utf8");
mysqli_query($polaczenie, "SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
mysqli_select_db($polaczenie, $database);






$zapytanietxt1 = file_get_contents("zapytanie1.txt");
$zapytanietxt2 = file_get_contents("zapytanie2.txt");
$zapytanietxt3 = file_get_contents("zapytanie3.txt");
$zapytanietxt4 = file_get_contents("zapytanie4.txt");
$zapytanietxt5 = file_get_contents("zapytanie5.txt");
$rezultat1 = mysqli_query($polaczenie, $zapytanietxt1);
$rezultat2 = mysqli_query($polaczenie, $zapytanietxt2);
$rezultat3 = mysqli_query($polaczenie, $zapytanietxt3);
$rezultat4 = mysqli_query($polaczenie, $zapytanietxt4);
$rezultat5 = mysqli_query($polaczenie, $zapytanietxt5);



   if(isSet($_POST["wybor"])){
		$color = $_POST["wybor"];
		}
		else{
		$color = "";
		}
		

		if($color == ""){
		echo("Proszę zaznaczyć jeden z kolorów.");
		return;
		}
	
	
		switch($color){
		case 2:	
				mysqli_fetch_assoc($rezultat1);
				
		break;
		case 3:
				 mysqli_fetch_assoc($rezultat2);
				
break;
		case 4:
				 mysqli_fetch_assoc($rezultat3);
				
break;
		case 5:
				 mysqli_fetch_assoc($rezultat4);
				
break;
		case 6:
				 mysqli_fetch_assoc($rezultat5);
				
break;
		default: echo("Ooops, Chyba mamy błąd w skrypcie...");return;
		}
		
		
		
		

			
	
	

?>






</body>
</html>
