<form action="<?= baseurl?>Register/tambahmurid" method="POST">

<input type="text" name="nama" id="">

<select name="jurusan" id="">
<option value="1">IPA</option>
<option value="2">IPS</option>
</select>

<select name="kelas" id="">
<option value="1">X-IPA-1</option>
<option value="2">X-IPA-2</option>
<option value="3">X-IPA-3</option>
<option value="4">XI-IPA-1</option>
<option value="5">XI-IPA-2</option>
<option value="6">XI-IPA-3</option>
<option value="7">XII-IPA-1</option>
<option value="8">XII-IPA-2</option>
<option value="9">XII-IPA-3</option>
<option value="10">X-IPS-1</option>
<option value="11">X-IPS-2</option>
<option value="12">X-IPS-3</option>
<option value="13">XI-IPS-1</option>
<option value="14">XI-IPS-2</option>
<option value="15">XI-IPS-3</option>
<option value="16">XII-IPS-1</option>
<option value="17">XII-IPS-2</option>
<option value="18">XII-IPS-3</option>
</select>

<input type="email" name="email" id="">
<input type="password" name="passw" id="">
<input type="number" name="nisn" id="">

<button type="submit">Daftar</button>
</form>