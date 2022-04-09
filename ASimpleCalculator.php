<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="text-light" style="background: #000;">
	<div class="container border border-info f-flex justify-content-center rounded-3 mt-5 pt-5 pb-5 bg-dark">
		<div class="col-12 d-flex justify-content-center">
			<h1>HESAP MAKİNESİ</h1><br>
		</div>
		<div class="col-sm-12 d-flex justify-content-center">
			<form action="calc.php" method="post" id="calculator"><br>
				1.Sayıyı girin: <input type="number" name="sayi1" class="bg-dark border border-info rounded-3 text-light"><br><br>
				2.Sayıyı girin: <input type="number" name="sayi2" class="bg-dark border border-info rounded-3 text-light"><br><br>
				Yapmak istediğiniz işlemi seçiniz: &nbsp;&nbsp;&nbsp;&nbsp;<select name="islem" id="islem" class="bg-info rounded-3 btn">
					<option value="null">işlem</option>
					<option value="+">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option value="-">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option value="*">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
					<option value="/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
				</select><br><br>
				<div class="col-sm d-flex justify-content-center">
					<input class="btn btn-info" type="submit" value="Hesapla">
				</div>
			</form>
		</div>
	</div>
	<div class="container border border-info mt-5 rounded-3 bg-dark">
		<div class="col-sm d-flex justify-content-center m-5 fs-2">
			<?php
			if ($_POST) {
				$islem = $_POST["islem"];
				if ($islem == "+") {
					echo "İşlem: Toplama işlemi <br>";
					echo "Sonuç: " . ($_POST["sayi1"] + $_POST["sayi2"]);
				} elseif ($islem == "-") {
					echo "İşlem: Çıkarma işlemi <br>";
					echo "Sonuç: " . ($_POST["sayi1"] - $_POST["sayi2"]);
				} elseif ($islem == "*") {
					echo "İşlem: Çarpma işlemi <br>";
					echo "Sonuç: " . ($_POST["sayi1"] * $_POST["sayi2"]);
				} elseif ($islem == "/") {
					echo "İşlem: Bölme işlemi <br>";
					echo "Sonuç: " . ($_POST["sayi1"] / $_POST["sayi2"]);
				} else {
					echo "hata: işlemi seçin ve tekrar deneyin";
				}
			} else {
				echo "İşlem yapmak için gerekli alanları doldurun";
			}
			?>
		</div>
	</div>
	<br>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>