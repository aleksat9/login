<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="login.js"></script>
</head>
<body>
    <h3>Login</h3>
    <h4>Preduslov je da email i lozinka postoje u bazi koja je prilozena u fajlu</h4>
    <input type="text" name="email" id="email" placeholder="Unesite email"><br><br>
    <input type="password" name="lozinka" id="lozinka" placeholder="Unesite lozinku"><br><br>
    <button type="button" id="btnDugme">Login</button><br><br>
    <div id="odgovor"></div>
</body>
</html>