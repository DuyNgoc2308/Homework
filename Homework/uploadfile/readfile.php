<?php 
// echo readfile('database.txt');
// $myfile = fopen("database.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("database.txt"));
// fclose($myfile);
// $str = "lan 5 diep 10 ";
$myfile = fopen("abc.txt", "r") or die("Unable to open file!");
$str = fread($myfile,filesize("abc.txt"));
fclose($myfile);
$a = 0;
$student = [];
for ($i=0; $i < strlen($str) ; $i++) { 
	if ($str[$i] == " ") {
		echo $stu = substr($str, $a, $i-$a);
		array_push($student, $stu);
		$a = $i + 1;
	}
}
// echo json_encode($student);
for ($i=0; $i < count($student); $i=$i+2) {
	echo "<table><tr>"; 
	echo "<td>".$student[$i]."</td>";
	echo "<td>".$student[$i+1]."</td>
		</tr>";
	// $i = $i +1;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Hihi</title>
	<style type="text/css">
		table,th,td{
			border:1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>
<body>

</body>
</html>
