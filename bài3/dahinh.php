<?php
interface DiChuyen{
    function di();
    // ko can phai ghi abstract o trc nhung auto la phuong thuc triu tuong

}
class ConCho implements DiChuyen{
    public function di(){
        echo "con cho di bang 4 chan";
    }
}
class ConNguoi implements DiChuyen{
    public function di(){
        echo "con nguoi di bang 2 chan";
    }
}

// sự khác nhau giữa interface và abstract là
//abstract là 1 class còn interface ko phải là class
// interface chỉ có duy nhất phương thức trìu tượng và ko có thuộc tính và phương thức binhg thường
// interface và abstract đều là bản thiết kế chung cho hệ thống phần mềm
// nhưng interface là bản thiết kế cho các class có chung hành động
// abstract là bản thiết kế cho các class có cùng bản chất

?>