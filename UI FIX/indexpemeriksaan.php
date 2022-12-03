<html>
<head>
</head>
<body>
  <form action="inputpemeriksaan.php" method="post" enctype="multipart/form-data">
    <table>
    <tr><td>Nomor Rekam Medis</td><td>:</td><td><input type="number" name="rekam_medis" /></td></tr>
    <tr><td>Keluhan Pasien</td><td>:</td><td><textarea name="keluhan_pasien"></textarea></td></tr>
    <tr><td>Diagnosis</td><td>:</td><td><input type="text" name="diagnosis" /></td></tr>
    <tr><td>Tindak Lanjut jika Dibutuhkan</td><td>:</td><td><input type="text" name="tindak_lanjut" /></td></tr>
    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_1" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_1" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_1">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>
    <tr><td>Petunjuk Penggunaan Obat</td><td>:</td><td><input type="text" name="pemakaian_obat_1" /></td></tr>
    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_2" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_2" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_2">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>
    <tr><td>Petunjuk Penggunaan Obat</td><td>:</td><td><input type="text" name="pemakaian_obat_2" /></td></tr>
    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_3" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_3" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_3">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>
    <tr><td>Petunjuk Penggunaan Obat</td><td>:</td><td><input type="text" name="pemakaian_obat_3" /></td></tr>
    <tr><td>Obat yang Diberi</td><td>:</td><td><input type="text" name="obat_4" /></td></tr>
    <tr><td>Jumlah Obat yang Diberi</td><td>:</td><td><input type="number" name="jumlah_obat_4" /></td></tr>
    <tr><td>Satuan Obat</td><td>:</td><td>
      <select name = "satuan_obat_4">
      <option value=""></option>
	    <option value="PIL">PIL</option>
	    <option value="TABLET">TABLET</option>
      <option value="KAPSUL">KAPSUL</option>
      <option value="BOTOL">BOTOL</option>
      </select>
    </td></tr>
    <tr><td>Petunjuk Penggunaan Obat</td><td>:</td><td><input type="text" name="pemakaian_obat_4" /></td></tr>
  </table>
    <input type="Submit" name="aksi" value="Simpan"/> | <input type="reset" value="Hapus"/>
</body>
</html>