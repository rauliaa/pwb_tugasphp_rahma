<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
</head>
<body>
    <form method="post" action="welcome.php" onsubmit="return validateForm()">
        <h1>Buat Akun Baru</h1>
        <h2>Formulir Pendaftaran</h2>

        <label for="firstname">Nama Depan :</label><br><br>
        <input type="text" name="firstname" id="firstname"><br><br>

        <label for="lastname">Nama Belakang :</label><br><br>
        <input type="text" name="lastname" id="lastname"><br><br>

        <label for="Gender">Jenis Kelamin</label><br><br>
        <input type="radio" name="gender" value="Male" id="male">Pria
        <input type="radio" name="gender" value="Female" id="female">Wanita<br><br>

        <label for="Nationality">Kewarganegaraan</label><br><br> 
        <select name="nationality" id="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Singapore">Singapore</option>
            <option value="China">China</option>
            <option value="Korea Selatan">Korea Selatan</option>
        </select><br><br>

        <label for="Language Spoken">Bahasa yang Dikuasai</label><br><br>
        <input type="checkbox" name="languages[]" value="Bahasa Indonesia">Bahasa Indonesia<br>
        <input type="checkbox" name="languages[]" value="Bahasa Inggris">Bahasa Inggris<br>
        <input type="checkbox" name="languages[]" value="Bahasa Mandarin">Bahasa Mandarin<br>
        <input type="checkbox" name="languages[]" value="Bahasa Korea">Bahasa Korea<br>
        <input type="checkbox" name="languages[]" value="Lainnya">Lainnya<br><br>

        <label for="bio">Bio</label><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br><br>
        
        <button type="submit" onclick="return validateForm()">Daftar</button>
        <p class="warning" id="warning"></p>

        <script>
            function validateForm() {
                var firstname = document.getElementById('firstname').value;
                var lastname = document.getElementById('lastname').value;
                var nationality = document.getElementById('nationality').value;
                var bio = document.getElementById('bio').value;

                var maleChecked = document.getElementById('male').checked;
                var femaleChecked = document.getElementById('female').checked;

                var warningElement = document.getElementById('warning');

                if (firstname === "" || lastname === "" || nationality === "" || bio === "" || (!maleChecked && !femaleChecked)) {
                    warningElement.innerHTML = "Harap isi semua kolom yang diperlukan!";
                    return false;
                } else {
                    warningElement.innerHTML = "";
                    return true;
                }
            }
        </script>

    </form>
</body>
</html>
