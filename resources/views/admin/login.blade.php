<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="http://127.0.0.1:8000/api/admin/prijava" method="POST">
            <label for="">Email adresa</label>
            <input type="text" name="email" id="">
            <label for="">Lozinka</label>
            <input type="text" name="password" id="">
            <button type="submit">Uloguj se</button>
        </form>
    </div>
</body>
</html>