<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="beratbadan.php" method="get">
    <table>
        <tr>
            <td>Nama : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Berat Badan : </td>
            <td><input type="number" name="beratbadan"> kg</td>
        </tr>
        <tr>
            <td>Tinggi Badan : </td>
            <td><input type="number" name="tinggibadan"> cm</td>
        </tr>
        <tr>
            <td>Jenis Kelamin : </td>
            <td><input type="radio" name="jk" value="Laki-laki"> Laki-laki</td>
            <td><input type="radio" name="jk" value="Perempuan"> Perempuan</td>
        </tr>
    </table>
    <input type="submit" name="submit">
</form>

</body>
</html>