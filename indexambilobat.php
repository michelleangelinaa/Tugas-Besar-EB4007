<html>
<head>
</head>
<body>
  <form action="inputambilobat.php" method="post" enctype="multipart/form-data">
    <table>
    <tr><td>Nomor Rekam Medis</td><td>:</td><td><input type="number" name="rekam_medis" /></td></tr>
    <tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama_lengkap" /></td></tr>
    <tr><td>NIK</td><td>:</td><td><input type="number" name="nik" /></td></tr>
    <tr><td>Tanggal Lahir</td><td>:</td><td><input type="date" name="tanggal_lahir" /></td></tr>
    <tr><td>Pemilik BPJS</td><td>:</td><td>
      <select name = "bpjs">
      <option value=""></option>
	    <option value="Ya">Ya</option>
	    <option value="Tidak">Tidak</option>
      </select>
    </td></tr>
    <tr><td>Poli yang dituju</td><td>:</td><td>
      <select name = "poli_dituju">
      <option value=""></option>
	    <option value="POLI UMUM">POLI UMUM</option>
	    <option value="POLI GIGI DAN MULUT">POLI GIGI DAN MULUT</option>
      <option value="POLI MATA">POLI MATA</option>
      <option value="POLI THT">POLI THT</option>
      </select>
    </td></tr>
    <tr><td>Dokter yang dituju</td><td>:</td><td><input type="text" name="dokter_dituju" /></td></tr>
    <tr><td>Tanggal Pemeriksaan</td><td>:</td><td><input type="date" name="tanggal_pemeriksaan" /></td></tr>

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

    <tr><td>Tanggal Pengambilan Obat Oleh Pasien</td><td>:</td><td><input type="date" name="tanggal_ambil_obat" /></td></tr>
    <tr><td>Waktu Pengambilan Obat Oleh Pasien</td><td>:</td><td><input type="time" name="waktu_ambil_obat" /></td></tr>
  </table>
    <input type="Submit" name="aksi" value="Simpan"/> | <input type="reset" value="Hapus"/>
</body>
</html>
