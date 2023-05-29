<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>document</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="pl-[50px]">
    
    <div  class="w-[300px] h-[300px] fixed ">
         <div class="mt-[50px] ">
                <form class="grid" action="?url=update-product" method="POST">
                <label for="">id </label>
                    <input type="text" value="<?= $products['id']?>"  name="id" id="" class="border-[1px] border-[black]">
                    <label for="">Tên </label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text"  name="name" value="<?= $products['name']?>" id="">
                    <label for="">phone</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text" value="<?= $products['phone']?>" name="phone" id="">
                    <label for="">age</label>
                    <input class="text-[gray] border-[1px] border-[gray]" type="text" value="<?= $products['age']?>" name="age" id="">
                    <button class="border-[1px] mt-[5px]">sửa</button>
                </form>
         </div>
    </div>
    </body>
</html>