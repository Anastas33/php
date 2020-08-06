<?php
	$title = 'Название';
	$h1 = 'Заголовок';
	$currentYear = 2020;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
	<h1><?php echo $h1; ?></h1>
	<p><?= $currentYear; ?></p>

	<!-- <?php
		echo 'Hello World!<br>';
		$name = "GeekBrains User";
		echo "Hello, $name!<br>";
	?>
	<?php
		$int10 = 42;
		$int2 = 0b101010;
		$int8 = 052;
		$int16 = 0x2A;
		echo "Десятеричная система $int10 <br>";
		echo "Двоичная система $int2 <br>";
		echo "Восьмеричная система $int8 <br>";
		echo "Шестнадцатеричная система $int16 <br>";
	?>
	<?php
		$precise1 = 1.5;
		$precise2 = 1.5e4;
		$precise3 = 6E-8;
		echo "$precise1 | $precise2 | $precise3 <br>";
	?>
	<?php
		$a = 1;
		echo "$a <br>";
		echo '$a <br>';
		echo $a . '<br>';
	?>
	<?php
		$a = 0;
		$b = (boolean)$a;
		var_dump($b);
		echo '<br>';
	?>
	<?php
		$a = "Hello";
		$b = " world";
		echo $a . $b . '<br>';
	?>
	<?php
		$a = 4;
		$b = 5;
		echo $a + $b . '<br>';
		echo $a - $b . '<br>';
		echo $a * $b . '<br>';
		echo $a / $b . '<br>';
		echo $a % $b . '<br>';
		echo $a ** $b . '<br>';
	?>
	<?php
		$a = 4;
		$b = 5;
		$a += $b;
		echo 'a = ' . $a . '<br>';
		$a -= 3;
		echo 'a = ' . $a . '<br>';
		$a = 0;
		echo $a++ . '<br>';
		echo $a . '<br>';
		echo ++$a . '<br>';
		echo $a-- . '<br>';
		echo $a . '<br>';
		echo --$a . '<br>';
	?>
	<?php
		$a = 4;
		$b = "4";
		var_dump($a==$b);
		var_dump($a===$b);
		var_dump($a>$b);
		var_dump($a<$b);
		var_dump($a<>$b);
		var_dump($a!=$b);
		var_dump($a!==$b);
		var_dump($a<=$b);
		var_dump($a>=$b);
	?>
	<?php
		$sum = 33;
		echo <<<zxc
			<h1 style="color: blue"> $sum </h1>
zxc
	?>
	<?php
		$a = 5;
		$b = '05';
		var_dump($a == $b); //здесь идет сравнение значений без типов
		var_dump((int)'012345'); //явное приведение к типу целого числа
		var_dump((float)123.0 === (int)123.0); //разные типы
		var_dump((int)0 === (int)'hello world'); //строка становится числом 0
	?> -->
	<?php
		$a = 1;
		$b = 2;
		$a = $b;
		$b--;
		echo 'a = ' . $a . '<br>';
		echo 'b = ' . $b;
	?>
</body>
</html>