<?php
	// variable
	$a=2;
	$a=3;
	
	$kota="SELECT * FROM TABLE WHERE ID=$a";
	$kota='SELECT * FROM TABLE WHERE ID=$a';
	
	
	
	
	$nama=array();
	
		
	//konstanta nilainya tetap
	define('pi', 22/7);
	
	
	
	echo "<h1>".$kota."</h1>";
	echo '<h1>$kota</h1>';
	
	echo $kota.$kota;
	echo $kota,$kota;
	
	echo    $a,$b;
	
	echo $a.$b.$c;
	echo "ini string $a";
	echo 'ini string $a';
	 
	//print $a,$b;
	
	
	
	
	
	// proses
	echo "<br/>PROSES<br/>";
	
	$noPolkendaraan		="B dfgh PTU";
	$noPolkendaraan2	="B 1234 KDE";
	$noPolkendaraan3	="D 1234 PTU";

	
	$hurufawal=substr($noPolkendaraan,0,1); //B
	$hurufkota=substr($noPolkendaraan,7,1); //K
	
	echo $a."<br/>";
	
	$a=20;
	$b=5;
	
	$c=2+5*3;
	
	$c=$a%2; //modulus = hasil sisa bagi
	
	$c+=3; //$c=$c+3;
	$c+=1;
	$c++; //c#
	
	echo $c."<br/>";
	
	//kondisi
	$lampu="kuning";
	
	if ($lampu=="merah") {
		echo "STOP<br/>";
	}
	elseif ($lampu=="kuning") {
		echo "HATI-HATI<br/>";
	}
	elseif($lampu=="hijau") {
		echo "JALAN<br/>";
	}
	else {
		echo "lampu Mati <br/>";
	}
	
	//latihan
	// 80-100 = A
	// 70-79  = B
	// 60-69  = C
	// < 59	  = D
	// diatas 100 dan dibawah 0 maaf data hanya 0-100
	
	$nilai=1001;
	
	if($nilai>100 || $nilai < 0)
	{
		Echo "Maaf Nilai Hanya 0-100";
	}
	else
	{
		if($nilai>=80){
			echo "NIlai = A";
		}
		elseif ($nilai>=70) {
			echo "NIlai = B";
		}
		elseif ($nilai>=60) {
			echo "NIlai = C";
		}
		else {
			echo "NIlai = D";
		}
	}	
	
	$menu=1;
	switch ($menu) {
		case 1:
			echo "Selamat Datang Di MTK";
			break;
		case 2:
			echo "Selamat Datang Di IPS";
			break;
		case 3:
			echo "Selamat Datang Di IPA";
			break;
		case 4:
			echo "Selamat Datang Di PMP";
			break;
		
		default:
			echo "Maaf Menu Belum ADA";
			break;
	}
	
	//perulangan;
	echo "//PERULANGAN<br/>";
	for ($i=1; $i <= 5; $i++) { 
		for ($j=$i; $j < 5; $j++) { 
			echo "*";
		}
		echo "<br/>";
	}
	
	$a=1;
	while ($a <= 5) {
			
		$a++;
	}
	
	include_once 'config/koneksi.php';
	
	function tambah($a=0,$b=0)
	{
		$c=$a+$b;
		return $c;
	}
	echo "<br/>";
	echo tambah(7);
	
	echo "<br/>";		
	$kota=array('JAKARTA','BEKASI','BANDUNG');
	
	foreach ($kota as $key) {
		echo $key."<br/>";
	}
	
	$numbers=array(1,3,2,4,7,8,6,5,9,10);
	
	sort($numbers);
	$arrlength = count($numbers);
	for($x = 0; $x < $arrlength; $x++) {
	    echo $numbers[$x];
	    echo "<br>";
	}
	
	$dat=array("erik","bekasi",12);
	list($nama,$alamat,$usia)=$dat;
	
	echo $nama;
	require_once 'config/koneksi.php';
	$que=("SELECT * FROM mahasiswa");
	$q=mysqli_query($conn,$que);
	while($row=mysqli_fetch_array($q))
	{
		echo $row['nim']. "|" . $row['nama_mhs']. "|" .$row['nama_mhs2']."<br/>";
	}
	
	
	?>
		<td><?=$row[0];?></td>
		<td><?=$row[1];?></td>
		<td><?=$row[2];?></td>
		<td><?=$row[3];?></td>
		<td><?=$row[4];?></td>
	<?php
	
	
?>