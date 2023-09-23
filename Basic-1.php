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
    echo "---------php常量----------<br>";
    // 1. 使用函数定义一个常量 define
    define('PI',3.14);
   

    // 2. 使用const关键字定义
    const PI2 = 3;

    echo "--定义特殊常量， 用define; 不能直接用const, 可以用constant, 例如consttant(-_-)<br>";
    define ('-_-','smile');


    // 3. 系统常量
    echo  "系统常量 PHP_VERSION =》PHP版本号：".PHP_VERSION;
    echo  "<hr>";

    // 4. 魔术常量
    echo "----魔术常量--- ：由双下划线+常量名+双下划线组成，其值会随着环境变化而变化，用户无法改变--<br>";
    echo "_DIR_:当前被执行的脚本所在电脑的绝对路径: ".__DIR__ ;
    echo "<br>";
    // echo "_FILE_:当前被执行的脚本所在的电脑的绝对路径(带自己文件的名字)"._FILE_;
    echo "<br>";
    echo "_LINE_:当前所属的行数: ".__LINE__ ;
    echo "<br>";
    echo "<br>";




    // todo: PHP的八种数据类型
    echo '--php数据类型8种--:<br>基本数据类型（4类），复杂数据类型（2类），特殊数据类型：2类（资源类型；空类型）'
    //! 1.  资源类型：resource , 存放资源数据（PHP外部数据，如数据库、文件）
    //! 2.  空类型： NULL, 只有一个值是NULL


    
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
  echo "<hr>";
  echo "double($b++)的结果是：".$f;
?>




