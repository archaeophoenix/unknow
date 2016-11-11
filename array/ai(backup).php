<?php
	/*perusahaan{pencakker}
	jurusan {perusahaan}
	kota {perusahaan,pencakker}
	jabatan{perusahaan,pencakker}
	pendidikan {perusahaan}*/
	

	$nilai = array();
	$perusahaan = ['perusahaan' => '1', 'kota' => '[1,4]', 'jk' => 'l', 'usia' => '21-25', 'status' => 'bk', 'pendidikan' => '["s1"]', 'jurusan' => '[1,2]', 'gaji' => '2', 'jabatan' => '[1]', 'pengalaman' => '0','limit' => '2014-03-05'];
	$pencakker = [
	['id_pen'=> '1','perusahaan' => '[1,2]', 'kota' => '[1,2,4]', 'jk' => 'l', 'tgl' => '1989-05-04', 'status' => 'bk', 'pendidikan' => 's1', 'jurusan' => '5', 'gaji' => '2', 'jabatan' => '[1,2]', 'pengalaman' => '0'],
	['id_pen'=> '2','perusahaan' => '[4]', 'kota' => '[1]', 'jk' => 'l', 'tgl' => '1988-05-04', 'status' => 'k', 'pendidikan' => 's1', 'jurusan' => '2', 'gaji' => '2', 'jabatan' => '[1]', 'pengalaman' => '1']];

	

	foreach ($pencakker as $value) {

		$per = json_decode($value['perusahaan']);

		foreach ($per as $key => $val) {

			if($val == $perusahaan['perusahaan']){
				$nilai[$value['id_pen']]['perusahaan'] = 1;
				// continue;
			}
		}
	}

	print_r($nilai);

?>