<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <a href="<?=BASE_URL?>?act=addUser"><button>Them noi</button></a>
    <table border="">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($list_user as $value) { ?>
                <tr>
                    <td><?= $value->id ?></td>
                    <td><?= $value->name ?></td>
                    <td><?= $value->age ?></td>
                    <td><?= $value->address ?></td>
                    <td>
                        <a href="<?= BASE_URL?>?act=detailUser&userid=<?=$value->id?>"><button>detail</button></a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>