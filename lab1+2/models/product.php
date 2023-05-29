<?php
    require_once "models/db.php";
    class Product{
    // xây dựng hàm truy vấn lấy danh sách product
     function getProduct(){
        $db = new db();
        $sql = "SELECT * FROM customer";
        return $db->getData($sql); // không truyền giá trị false vào thì mặc định là true
       
    }
    function deleteProduct(){
        
        $db = new db();
        $id = $_GET['id'];
        $sql = "DELETE FROM customer WHERE id = $id";
        $db->getData($sql, false);

    } function addProduct(){
        $db = new db();
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $sql = "INSERT INTO `customer`(`name`, `phone`, `age`) VALUES ('$name','$phone','$age')";
        //   var_dump($sql);die;
        $db->getData($sql, false);
    }
    function find($id){
        $sql = "SELECT * FROM customer WHERE id = $id";
        $db = new db();
        return $db->getData($sql,false);
    }
    function update(){
        $db= new db();
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $sql = "UPDATE `customer` SET `name`='$name',`phone`='$phone',`age`='$age' WHERE id=$id";
      
        return $db->getData($sql,false);
    }
    
}
?>