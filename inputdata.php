<html>

<body>
    <legend>
        <h3>Input Data</h3>
    </legend>

    <table>
        <form action="aksi_insert.php" method="post">
            <tr>
                <td><label>ID Anggota: </label></td>
                <td><input type="text" name="ID_Anggota" placeholder="ID_Anggota" /></td>
            </tr>
            <tr>
                <td><label>Nama: </label></td>
                <td><input type="text" name="nama" placeholder="Nama" /></td>
            </tr>
            <tr>
                <td><label>Jenis Kelamin: </label></td>
                <td>
                <select name="jenis_kelamin" required>
                <option value=""hidden>-- Pilih jenis Kelamin --</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
                </td>
            </tr>
            <tr>
                <td><label>Alamat: </label></td>
                <td><input type="text" name="alamat" placeholder="Alamat" /></td>
            </tr>
            <tr>
                <td><label>No HP: </label></td>
                <td><input type="text" name="no_hp" placeholder="No_HP" /></td>
            </tr>
            <tr>
                <td><label>Email: </label></td>
                <td><input type="text" name="email" placeholder="Email" /></td>
            </tr>
                <td><label>Tanggal Entry: </label></td>
                <td><input type="date" name="tgl_entry" placeholder="Masukkan Tgl " /></td>
            </tr>
            <tr>
                <td colspan="4" align="center">
                    <input type="submit" name="submit" value="Submit" /></td>
            </tr>
        </form>
    </table>
</body>

</html>