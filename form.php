<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    <form method="post" action="soal3.php">
        <h1>Buat Akun Baru</h1>
        <h2>Formulir Pendaftaran</h2>

        <label for="firstname">Nama Depan : </label><br><br>
        <input type="text" name="firstname"><br><br>
        <label for="lastname">Nama Belakang : </label><br><br>
        <input type="text" name="lastname"><br><br>

        <label for="Gender">Jenis Kelamin</label><br><br>
        <input type="radio" name="gender" value="Male">Pria <br>
        <input type="radio" name="gender" value="Female">Wanita <br><br>

        <label for="Nationality">Kewarganegaraan</label><br><br> 
        <select name="nationality">
            <option value="Indonesia">Indonesia</option>
        </select>
        <br><br>

        <label for="Language Spoken">Bahasa yang Dikuasai</label><br><br>
        <input type="checkbox" name="languages[]" value="Bahasa Indonesia">Bahasa Indonesia<br>
        <input type="checkbox" name="languages[]" value="English">English<br>
        <input type="checkbox" name="languages[]" value="Other">Lainnya<br>
        <br>

        <label for="bio">Bio</label><br>
        <textarea name="bio" cols="30" rows="10"></textarea><br><br>
        
        <button type="submit">Daftar</button><br><br>
    </form>
</body>
</html>
