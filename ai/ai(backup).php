<?php
/*perusahaan{pencakker}
	jurusan {perusahaan}
	kota {perusahaan,pencakker}
	jabatan{perusahaan,pencakker}
	pendidikan {perusahaan}*/

function hitung($nilai,$point){
    return (floatval($nilai)*($point*2)/2);
}

$nilai = array();
$konstanta = ['kota' => 0, 'pengalaman' => 0, 'umur' => 0, 'gaji' => 0, 'status' => 0, 'jk' => 0, 'perusahaan' => 0];
$perusahaan = array(
        'perusahaan' => '1',
        'kota' => '[1,4]',
        'jk' => 'l',
        'usia' => '21-25',
        'status' => 'bk',
        'pendidikan' => '["s1"]',
        'jurusan' => '[1,2]',
        'gaji' => '2',
        'jabatan' => '[1]',
        'pengalaman' => '0',
        'limit' => '2014-03-05'
);

echo strtotime($perusahaan['limit'])."<br>";
echo strtotime(date('Y-m-d'))."<br>";

$pencakker = array(
			array('id_pen'=> '1','perusahaan' => '[1,2]', 'kota' => '[1,2,4]', 'jk' => 'l', 'tgl' => '1989-05-04', 'status' => 'bk', 'pendidikan' => 's1', 'jurusan' => '5', 'gaji' => '2', 'jabatan' => '[1,2]', 'pengalaman' => '0'),
			array('id_pen'=> '2','perusahaan' => '[4]', 'kota' => '[2]', 'jk' => 'l', 'tgl' => '1988-05-04', 'status' => 'k', 'pendidikan' => 's1', 'jurusan' => '2', 'gaji' => '2', 'jabatan' => '[1]', 'pengalaman' => '1'));


echo '<pre>';
foreach ($pencakker as $value) {

    $per = json_decode($value['perusahaan']);
    $kota_pen = json_decode($value['kota']);
    $kota_per = json_decode($perusahaan['kota']);

    foreach ($per as $key => $val) {

        if($val == $perusahaan['perusahaan']) {
            $nilai[$value['id_pen']]['perusahaan'] = 1;
            continue;
        }
    }

    for ($i=0; $i < count($kota_per) ; $i++) { 
        for ($j=0; $j < count($kota_pen) ; $j++) { 
            if($kota_pen[$j] == $kota_per[$i]){
                $nilai[$value['id_pen']]['kota'] = 1;
            }
        }
    }

    if($value['pengalaman']==$perusahaan['pengalaman']){
        $nilai[$value['id_pen']]['pengalaman'] = 1;
    }

    $age = date_diff(date_create($value['tgl']),date_create('now'))->y;
    $umur = explode('-', $perusahaan['usia']);
    if ($age >= $umur[0] && $age <= $umur[1]) {
        $nilai[$value['id_pen']]['umur'] = 1;
    }

    if($value['gaji']==$perusahaan['gaji']){
        $nilai[$value['id_pen']]['gaji'] = 1;
    }

    if($value['status']==$perusahaan['status']){
        $nilai[$value['id_pen']]['status'] = 1;
    }

    if($value['jk']==$perusahaan['jk']){
        $nilai[$value['id_pen']]['jk'] = 1;
    }
    $nilai[$value['id_pen']] = array_replace_recursive($konstanta,$nilai[$value['id_pen']]);
}

print_r($nilai);

foreach ($nilai as $key => $hasil) {
    // echo $key." => ".$value['jk']."<br>";
    $result[$key] = hitung($hasil['kota'],0.1) + hitung($hasil['pengalaman'],0.15) + hitung($hasil['umur'],0.1) + hitung($hasil['gaji'],0.1) + hitung($hasil['status'],0.1) + hitung($hasil['jk'],0.1) + hitung($hasil['perusahaan'],0.05)."<br>";
}

    asort($result);
    print_r($result);

?>