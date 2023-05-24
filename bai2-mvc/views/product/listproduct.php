<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" >
        <tr>
            <td>ID</td>
            <td>Ten san pham</td>
            <td>Don Gia</td>
            <td>hanh dong</td>
        </tr>
        <?php foreach($products as $key=> $value){   ?>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['ten_sp']; ?></td>
            <td><?php echo $value['gia']; ?></td>
            <td><a href="?url=remove-product&id=<?php echo $value['id']; ?>"> xoa </a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>