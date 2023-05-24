<?php
// khai báo 1 class trìu tượng DongVat
abstract class DongVat{
    // khai bao phuong thuc triu tuong
    abstract function di();

}
class ConCho extends DongVat{
    public function di(){
        echo "con cho di bang 4 chan";

    }
}
class ConNguoi extends DongVat{
    public function di(){
        echo "con nguoi di bang 2 chan";
    }
}
$cc=new ConCho;
$cc->di();
echo"<br>";
$cn=new ConNguoi;
$cn->di();
?>