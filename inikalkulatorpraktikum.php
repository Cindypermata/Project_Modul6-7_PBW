<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 6 & 7</title>
	<link rel="stylesheet" href="inikalkulator.css">
</head>
<style>
	html {
		background-image: url("img/bg2.jpg");
		background-size: cover;
		background-repeat: no-repeat;
	}
	.atas1{
		text-align: center;
		padding-top: 25px;
		margin-top: 70px;
		color: white;
	}
	.atas2{
		text-align: center;
		color : yellow;
	}
	table{
		border-radius: 10px;
		margin-top: 75px;
	}
</style>
<body>
	<h1 class="atas1">W E L C O M E - T O</h1>
	<h4 class="atas2">ONLINE CALCULATOR</h4>
	<table border="3" bgcolor="white" align="center" ><caption align="top">
		<tr>
			<td align="center" valign="middle" width="500" height="100">
				<h1>Kalkulator Sederhana</h1>
			</td>
		</tr>
		<tr>
			<td align="center" valign="middle" width="500" height="140">
				<form method="post">
					<br>
					<label>Masukkan angka pertama : </label>
					<input type="number" name="angka1" required><br><br>
					<label>Masukkan angka kedua : </label>
					<input type="number" name="angka2" required><br><br>
					<label>Operator : </label>
					<select name="operator">
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="x">x</option>
						<option value=":">:</option>
					</select><br><br>
					<input type="submit" value="Hitung">
					<br><br>
				</form>
			</td>
		</tr>
	</table>

    <?php
	if(isset($_POST['operator'])){
		$angka1 = $_POST['angka1'];
		$angka2 = $_POST['angka2'];
		$operator = $_POST['operator'];
		switch ($operator) {
			case '+':
				$hasil = $angka1 + $angka2;
				break;
			case '-':
				$hasil = $angka1 - $angka2;
				break;
			case 'x':
				$hasil = $angka1 * $angka2;
				break;
			case ':':
				$hasil = $angka1 / $angka2;
				break;
			default:
				$hasil = "Operator tidak dikenal";
				break;
		}
		echo "<br>Hasil: ".$hasil;
	}
	?>
    
</body>
</html>