<?php
//hàm là function
//hàm đc dùng để gom code cod tính tái sử dụng cao
//hàm có 2 loại
// có trả về -- có return là hàm có trả về
//ko trả về -- ko có return



//demo ham ko tra về
$a=5;
$b=8;
$c=3;
function ktraSoChan($a){
if ($a % 2 == 0){
    echo "day la so chan";
}else{
    echo "day la so le";
}
}
// ktraSoChan($b);
// ktraSoChan($c);

echo "<br>";
echo "<br>";
echo "<br>";

function ktraSoChanCoTraVe($a){
    if ($a % 2 == 0){
        return 1;//trả về sô chẵn
        
    }else{
        return 0;//trả về số lẻ
    }
    }
echo ktraSoChanCoTraVe($b);

// xây dựng 1 hàm thong tin sv gồm những tham số truyền vào  
//$hoten,$namsinh,$gioitinh,$email,$diachi
// hiển thị ra thong tin sv đày đủ theo tham số truyền vào
//ông nguyen văn a năm nay 27 tuổi có email là ....và địa chỉ là ...
//xây dựng hàm có trả về hoặc ko trả về
// tính tuổi = năm hiện tại - năm sinh(date('y'))

function thongTin($hoten,$namsinh,$gioitinh,$email,$diachi){
    
   
   
echo "ho va ten".$hoten."<br>";
echo "nam sinh".$namsinh."<br>";
echo "gioi tinh".$gioitinh."<br>";
echo "email".$email."<br>";
echo "dia chi".$diachi."<br>";
} 
thongTin("nguyen van a","2003","nam","abc@gmail.com","ha noi");

?>
