<?php
// php
 echo "hello word! 你好世界 </br>";



// ! 变量
$x=5;
$y=6;
$z=$x+$y;
echo $z;


?>

<?="php标记" ?>



<?php
  // todo: 布尔型
  $bollishow = true;
  if($bollishow){
    echo "<hr>\n";
  }
?>




<!-- 可变变量： -->
<?php

  echo '-------可变变量------- <br/>';
  $a = 'b'; //todo: a变量的内容正好是b变量的名称，故称a为可变变量
  $b = 'bb';
  echo $$a;
  echo '<br>'


?>



<?php
    echo "---------值传递和引用传递------<br>";
    // 值传递：
    $a = 10;
    $b = $a;
    $b = 5;
    echo "$a, $b<br>";

    //* 引用传递
    $c = 10;
    $d = $c; //todo: $d => 上面$c的值复制给它
    $e = &$c; //todo: &$c =>  引用赋值，简单地将一个 & 符号加到将要赋值的变量前
    $c = 5;  
    echo" $c, $d, $e<br/>";



?>

<?php
    echo "---------php常量----------";
    // 1. 使用函数定义一个常量 define
    define('PI',3.14)

    // 
?>







<?php
// forEach
// foreach 仅能够应用于数组和对象，
    $array = [
    [1,2],
    [3,4],
 ]

?>

<?php 
  function double($i)
  {
      return $i*2;
  }
  $b = $a = 5;
  $f = double($b++);
  // echo "$b<br>";
  echo "double($b++)的结果是：".$f;
?>