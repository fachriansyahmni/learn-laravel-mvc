<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - SanberBook</title>
</head>

<body>
    <h1><b>Buat Account Baru!</b></h1>
    <h2><b>Sign Up Form</b></h2>
    <form action="welcome" method="POST">
        @csrf
        <label for="firstname">
            <p>First name:</p>
        </label>
        <input type="text" name="firstname" id="firstname" required>
        <br>
        <label for="lastname">
            <p>Last name:</p>
        </label>
        <input type="text" name="lastname" id="lastname" required>
        <br>
        <label for="gender">
            <p>Gender:</p>
        </label>
        <input type="radio" name="gender" id="gender" value="Male">Male
        <br>
        <input type="radio" name="gender" id="gender" value="Female">Female
        <br>
        <input type="radio" name="gender" id="gender" value="Other">Other
        <br>
        <label for="nationality">
            <p>Nationality:</p>
        </label>
        <select name="nationality" id="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Belanda">Belanda</option>
            <option value="Prancis">Prancis</option>
            <option value="Malaysia">Malaysia</option>
        </select>
        <br>
        <label>
            <p>Language Spoken:</p>
        </label>
        <input type="checkbox" name="language" id="lang_id" value="Bahasa Indonesia">
        <label for="lang_id">Bahasa Indonesia</label>
        <br>
        <input type="checkbox" name="language" id="lang_en" value="English">
        <label for="lang_en">English</label>
        <br>
        <input type="checkbox" name="language" id="lang_other" value="Other">
        <label for="lang_en">Other</label>
        <label for="bio">
            <p>Bio:</p>
        </label>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>