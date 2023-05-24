<?php
//xây dựng 1 class hay gọi là 1 khuôn mẫu cho nhiều đối tượng sinh viên
class SinhVien{
    // khai báo thuộc tính tức là khái báo biến 
    public $maSv;
    public $tenSv;
    public $namSinh;
    
    // tạo ra phương thức set giá trị
    // hàm khởi tạo (1 dạng magic function)
    public  function __construct($maSv,$tenSv,$namSinh){
        $this->maSv=$maSv;
        $this->tenSv=$tenSv;
        $this->namSinh=$namSinh;
        
    }
    public function setMaSV($maSv){
            $this->maSv=$maSv;
          
    }
    public function setTenSV($tenSv){     
        $this->tenSv=$tenSv;
    }
    public function setNamSinhSV($namSinh){
    $this->namSinh=$namSinh;
    }
    public function TinhTuoi(){
        return (date('Y') - $this->namSinh);
    }
    // khai báo phương thức là khai báo hàm
    public function hienThiThongTinSV(){
        echo $this->maSv."-".$this->tenSv."-".$this->namSinh."-".$this->TinhTuoi();
    }
}
// khởi tạo đối tượng tức là tạo ra 1 ông sinnh viên
$sv1=new SinhVien("ph9999","nva",2003);
$sv1->setMaSV("ph28952");
$sv1->hienThiThongTinSV();
// tạo 1 hàm tính tuổi có trả về = năm hiện tại - năm sinh sau đấy hiển thị thông tin tính tuổi sv
?>