
<a href="<?=BASE_URL?>?act=addproduct"><button>Them moi</button></a>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>View</th>
    </tr>
    <thead>
        <tbody>
            <?php foreach ($listProduct as $value): ?>
                <tr>
                    <th><?=$value->id?></th>
                    <th><?=$value->name?></th>
                    <th><?=$value->price?></th>
                    <th><?=$value->view?></th>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </thead>
</table>