<?php
class GiangVien{
    public $maGV,$tenGV,$namBatDau,$luongCoBan,$soGioDay;


    public function __construct($maGV,$tenGV,$namBatDau,$luongCoBan,$soGioDay)  {
        $this->maGV=$maGV;
        $this->tenGV=$tenGV;
        $this->namBatDau=$namBatDau;
        $this->luongCoBan=$luongCoBan;
        $this->soGioDay=$soGioDay;

    }

    public function setmaGV($maGV){
        $this->maGV=$maGV;

    }
    public function settenGV($tenGV){
        $this->tenGV=$tenGV;

    }
    public function setnamBatDau($namBatDau){
        $this->namBatDau=$namBatDau;

    }
    public function setluongCoBan($luongCoBan){
        $this->luongCoBan=$luongCoBan;

    }
    public function setSoGioDay($soGioDay){
        $this->soGioDay=$soGioDay;

    }


    public function ThamNien(){
        return date('Y')-$this->namBatDau;
    }
    public function TongLuong(){
        return $this->luongCoBan * $this->soGioDay;
    }
    public function XepLoai(){
        
        if($this->TongLuong() >= 5000){
          return "dat";
        }else{
            return "ko dat";
        }
    }

    public function hienThiThongTin(){
        $ThamNien=$this->ThamNien();
        $TongLuong=$this->TongLuong();
        $XepLoai=$this->XepLoai();

        echo "<table border='1px ' style='border-collapse: collapse;'>
        <tr >
        <td style='padding: 5px 15px ; border: 1px solid red;'> maGV</td>
        <td style='padding: 5px 15px; border: 1px solid red;'>TenGV</td>
        <td style='padding: 5px 15px; border: 1px solid red;'>Thâm niên</td>
        <td style='padding: 5px 15px; border: 1px solid red;'>Tổng lương</td>
        <td style='padding: 5px 15px; border: 1px solid red;'>Xếp loại</td>
    </tr>
    
        <tr >
            <td style='padding: 5px 15px; border: 1px solid green;'> $this->maGV</td>
            <td style='padding: 5px 15px; border: 1px solid green;'>$this->tenGV</td>
            <td style='padding: 5px 15px; border: 1px solid green;'>$ThamNien</td>
            <td style='padding: 5px 15px; border: 1px solid green;'>$TongLuong</td>
            <td style='padding: 5px 15px; border: 1px solid green;'>$XepLoai</td>
        </tr>
    </table>";
    }
}
$gv1=new GiangVien(001,"NVA",2020,350,30);
$gv2=new GiangVien(002,"TVD",2023,250,10);
$gv1->hienThiThongTin();
echo "<br>";
$gv2->hienThiThongTin();

?>
