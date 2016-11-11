<?php
require'isi.php';
$f = new isi();
$trans=$f->read("transaksi");
$jurns=$f->read("jurnal");
?>
<table border="1">
<?php foreach($trans as $tran){?>
        <tr><td><?php echo$tran['tanggal'];?></td><td><?php echo$tran['keterangan'];?></td><td></td><td>&nbsp;</td><td></td></tr>
        <?php foreach($jurns as $jurn){
                if($tran['id']==$jurn['id_trans']){?>
                        <tr><td></td><td></td><td><?php echo$jurn['id_akun'];?></td><td><?php echo$jurn['debet']?></td><td><?php echo$jurn['kredit']?></tr>
                <?php }
        }
}
?>
</table>
