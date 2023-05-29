<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<style>
    table,tr,td{
        border: black solid 2px;
    }
    
</style>
<body class="pl-[150px]">
<br><br>

<input type="button" id="btn2" value="thêm" class="border-[1px] border-[black]"/>
<br><br>
    <table class="w-[300px] ">
        <tr>
            <td>ID</td>
            <td>Tên </td>
            <td>số điện thoại</td>
            <td>tuổi</td>
            <td>Hành động</td>
        </tr>
        <?php foreach($products as $key => $value){?>
        <tr>
            <td><?= $value['id']?></td>
            <td><?= $value['name']?></td>
            <td><?= $value['phone']?></td>
            <td><?= $value['age']?></td>
            <td class="text-center"><a href="?url=remove-product&id=<?= $value['id'];?>" class="text-[red]">Xóa</a>
            <a href="?url=edit-product&id=<?= $value['id']?> "class="text-[green]">sửa</a>
        </td>
           
        </tr>
        <?php }?>
    </table>
    <div hidden id="content" class="w-[300px] h-[300px] fixed top-[100px]" >
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="absolute right-[5px]">
            <input  type="button" id="btn1" value="X"/>
         </div>
         <div class="mt-[50px] ">
                <form class="grid" action="?url=more-product" method="POST">
                    <label for="">name</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text" placeholder="name" name="name" id="">
                    <label for="">phone</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text" placeholder="phone"  name="phone" id="">
                    <label for="">age</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text" placeholder="age"  name="age" id="">
                    <button class="bg-[green] border-[1px] mt-[5px] ">Thêm</button>
                </form>
                </div>
    </div>
        <br/>
       
     
 
        <script language="javascript">
             document.getElementById("btn2").onclick = function () {
                document.getElementById("content").style.display = 'block';
            };
 
            
            document.getElementById("btn1").onclick = function () {
                document.getElementById("content").style.display = 'none';
            };
 
           
        </script>
</body>
</html>