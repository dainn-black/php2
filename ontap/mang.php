<?php
$a=4; 
$b=5.5;
$c="helo";
$d=true;
//echo$c."...".$a;
//mang array
//mang tuan tu
$mang=array(5,6,7,8); //cach 1 khai bao dc moi phien ban
//$mang=array[5,6,7,8]; //cach  2 chay dc nhung phien ban php>7.0
// duyet mang hien thi ra nhung phan tu la so chan
// su dung 2 cach dung for vaf dung foreach
for ($i=0;$i<=10;$i++){
    if($i%2==0){
        echo$i;
    }
}
echo"<br>";
echo"<br>";
echo"<br>";

for ($i=0 ; $i<count($mang) ;$i++){
    if($mang[$i]%2==0){
        echo$mang[$i];
    }
}
echo"<br>";
echo"<br>";
echo"<br>";

foreach($mang as $m){
    if($m%2==0){
        echo$m;
    }
}
echo"<br>";
echo"<br>";
echo"<br>";

//mang lien hop
$manglh=["A"=>1,"B"=>2,"C"=>3,"D"=>4];
$tong=0;
echo $manglh["C"];
echo"<br>";
echo"<br>";
echo"<br>";
echo $manglh["A"];
echo"<br>";
echo"<br>";
echo"<br>";
foreach($manglh as $key=>$value){
    echo $key."=>".$value."<br>";

    $tong+=$value;
}
echo"<br>";
echo"<br>";

echo "tong la: ".$tong;
echo"<br>";
echo"<br>";
$manginfo=["ten"=>"nguyen van a","tuôi"=>19,"email"=>"abc@gmail"];
$mangcolor=["red"=>"mau do","blue"=>"xanh nc bien","green"=>"xanh la"];

?>


<table border="red">
<?php
foreach($mangcolor as $a=>$b){
?>
 <tr bgcolor="<?php echo $a; ?>">
    <th><?php echo $a ?></th>
    <th><?php echo $b ?></th>
    
 </tr>
 <?php } ?>
</table>
