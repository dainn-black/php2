<?php



class ConNguo{
    public $hoTen,$diaChi,$namSinh,$email,$sdt;
    public function __construct($hoTen,$diaChi,$namSinh,$email,$sdt)
    {
        $this->hoTen=$hoTen;
        $this->diaChi=$diaChi;
        $this->namSinh=$namSinh;
        $this->email=$email;
        $this->sdt=$sdt;
    }
    public function tinhTuoi(){
        return date('Y')-$this->namSinh;
    }
   
    public function hienThiThongTin(){
        echo $this->hoTen;
        echo "<br>";
        echo $this->diaChi;
        echo "<br>";
        echo $this->tinhTuoi()." tuoi";
        echo "<br>";
        echo $this->email;
        echo "<br>";
        echo $this->sdt;
        echo "<br>";
    }
}

class HocSinh extends ConNguo{
    public $diemToan,$diemLy,$diemHoa;
    public function __construct($hoTen,$diaChi,$namSinh,$email,$sdt,$diemToan,$diemLy,$diemHoa)
    {
        $this->diemToan=$diemToan;
        $this->diemLy=$diemLy;
        $this->diemHoa=$diemHoa;
        // gọi hàm khởi tạo
        parent::__construct($hoTen,$diaChi,$namSinh,$email,$sdt);
       
    }
    public function DiemTB(){
        return ($this->diemToan+$this->diemLy+$this->diemHoa)/3;
    }
    public function thongTinSinhVien(){
        echo $this->hienThiThongTin();
        
        echo"diem trung binh".$this->DiemTB();
    }
}
class GiangVien extends ConNguo{
    public $luongCB,$soGioDay;
    public function __construct($hoTen,$diaChi,$namSinh,$email,$sdt,$luongCB,$soGioDay)
    {
        // gọi hàm khởi tạo
        parent::__construct($hoTen,$diaChi,$namSinh,$email,$sdt);
       
        $this->luongCB=$luongCB;
        $this->soGioDay=$soGioDay;
    }
    public function tongLuong(){
        return $this->luongCB*$this->soGioDay;
    }
    public function ThongTinGiangVien(){
         $this->hienThiThongTin();
        echo $this->tongLuong();
    }
}
$hienthi1=new ConNguo("NVA","hanoi",2003,"abc@gmail.com","0987654");

$hienthi1->hienThiThongTin();
echo "<br>";
$sv= new HocSinh("NVA","hanoi",2003,"abc@gmail.com","098567",5,6,5);

$sv->thongTinSinhVien();
echo "<br>";
echo "<br>";
$GV= new GiangVien("TVA","danang",2010,"def@gmail.com","0991122",350,2);
$GV->ThongTinGiangVien();
?>