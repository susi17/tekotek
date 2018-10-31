<!DOCTYPE html>
<html>
<head>
	<title>Tekotek</title>
	<style type="text/css">
		.ganjil{
			font: helvetica;
			color: orange;
		}
		.genap{
			font: helvetica;
			color: brown;
		}
	</style>
</head>
<body>
	<?PHP
		echo " Tekotek kotek kotek anak ayam turun 100 <br>";
		$i = 99;
		while ($i >=1)
		{
			if($i%2 == 0)
			{
				echo "<span class='genap'>Mati satu tinggal $i</span>";
			}else{
				echo "<span class='ganjil'>Mati satu tinggal $i</span>";
			}
			echo "<br>";
			$i--;
		}
	?>
</body>
</html>