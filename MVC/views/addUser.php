<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=BASE_URL?>?act=addUser" method="post">
        <label for="">Name</label><br>
        <input type="text" name="name"><br>
        <label for="">Age</label><br>
        <input type="number" name="age"><br>
        <label for="">Address</label><br>
        <input type="text" name="address"><br>
        <br>
        <button type="submit" name="them">Them Moi</button>
    </form>
</body>
</html>