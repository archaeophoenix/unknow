<?php
	/*perusahaan 
		{astra = 1
		daihatsu = 2}
	  jurusan {
		1 electro
		2 mesin
	  }
	  kota {
		1 malang
		2 surabaya
		3 kediri
		4 blitar
	  }
	*/
	$perusahaan = ['perusahaan' => '1', 'kota' => '[1,4]', 'jk' => 'l', 'usia' => '21-25', 'status' => 'bk', 'pendidikan' => '["s1"]', 'jurusan' => '[1,2]', 'gaji' => '2', 'jabatan' => '1', 'pengalaman' => '0','limit' => '2014-03-05'];
	$pencakker = [['id_pen'=> '1','perusahaan' => '[1,2]', 'kota' => '[1,2,4]', 'jk' => 'l', 'tgl' => '1989-05-04', 'status' => 'bk', 'pendidikan' => '["s1"]', 'jurusan' => '5', 'gaji' => '2', 'jabatan' => '[1,2]', 'pengalaman' => '0'],['id_pen'=> '2','perusahaan' => '[1]', 'kota' => '[1]', 'jk' => 'l', 'tgl' => '1988-05-04', 'status' => 'k', 'pendidikan' => '["s1"]', 'jurusan' => '2', 'gaji' => '2', 'jabatan' => '[1,2]', 'pengalaman' => '1']];

	

	foreach ($pencakker as $value) {
		
		echo $perusahaan['perusahaan']."<br>";
		$kota = json_decode($perusahaan['kota']);
		print_r($kota);
		echo "<br>";
		echo $perusahaan['jk']."<br>";
		$usia = explode('-',$perusahaan['usia']);
		echo $usia[0]." - ".$usia[1]."<br>";
		echo $perusahaan['status']."<br>";
		$pen = json_decode($perusahaan['pendidikan']);
		print_r($pen);
		echo "<br>";
		$jur = json_decode($perusahaan['jurusan']);
		print_r($jur);
		echo "<br>".$perusahaan['gaji']."<br>";
		echo $perusahaan['jabatan']."<br>";
		echo $perusahaan['pengalaman']."<br>";
		echo "<hr>";

		$per = json_decode($value['perusahaan']);
		print_r($per);
		echo "<br>";
		$kota = json_decode($value['kota']);
		print_r($kota);
		echo "<br>";
		echo $value['jk']."<br>";
		$usia = date('Y', strtotime(date('Y-m-d')) - strtotime($value['tgl']));
		print_r($usia);
		echo "<br>";
		echo $value['status']."<br>";
		echo $value['pendidikan']."<br>";
		print_r($pen);
		echo "<br>";
		echo $value['jurusan']."<br>";
		echo $value['gaji']."<br>";
		$jab = json_decode($value['jabatan']);
		print_r($jab);
		echo "<br>";
		echo $value['pengalaman']."<br>";
		echo "<hr>";
	}
?>