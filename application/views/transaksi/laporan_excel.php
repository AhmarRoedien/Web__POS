<h3><b>LAPORAN</b></h3>
<table border="1">
    <tr>
        <th>No</th>
        <th>Tanggal Transaksi</th>
        <th>Operator</th>
        <th>Total Transaksi</th>
    </tr>
    <?php
$no = 1;
$total = 0;
foreach ($record->result() as $r) {
 echo "<tr>
            <td width='30'>$no</td>
            <td width='125'>$r->tanggal_transaksi</td>
            <td>$r->nama_lengkap</td>
            <td>Rp. $r->total</td>
            </tr>";
 $no++;
 $total = $total + $r->total;
}
?>
    <tr>
        <td colspan="3">Total</td>
        <td>Rp. <?php echo $total; ?></td>
    </tr>
</table>