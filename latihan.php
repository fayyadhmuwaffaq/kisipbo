<?php
class MyClass {
    public function __construct()
    {
        echo "konstruktor dipanggil";
    }
}

$obj = new MyClass();

echo "<br>";

class ParentClass {
    public function display(){
        echo "Aku adalah penghapal Alquran";
    }
}

class ChildClass extends ParentClass {
    public function display()
    {
        parent ::display();
        echo " dan ingin menjadi imam besar madinah";
    }
}

$obj1 = new ChildClass();
$obj1-> display();

echo "<br>";

class Hewan {
    protected $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function makesound(){
        echo "gukgukgukguk";
    }
}

class Dog extends Hewan{
    public function makesound()
    {
        echo "halo saya adalah anjing";
    }
}

$dog = new Dog("syafii");
$dog->makesound();

echo "<br>";

class A {
    public function sayHello(){
        echo "Hello from A";
    }
}

class B {
    public function sayHello(){
        echo "Hello from B";
    }
}

$dog = new B();
$dog->sayHello();

echo "<br>";

$a = 10;

if ($a < 10){
    echo "Kurang dari 10";
} if ($a == 10) {
    echo "sama dengan 10";
} else {
    echo "lebih dari 10";
}

echo "<br>";

foreach (range(0, 4) as $num) {
    echo $num . " ";
}

echo "<br>";

for ($i=0; $i < 5; $i++) {
    if ($i == 2) {
        continue;
    }
    echo $i . " ";
}

echo "<br>";

$z = 5;
switch ($z) {
    case 1:
        echo "satu";
        break;
    case 5:
        echo "lima";
        break;
    default:
        echo "Tidak dikenal";
}

echo "<br>";

$y = 10;

do {
    echo "nilai : $y ";
    $y--;
} while ($y > 7);

echo "<br>";

$x = 1;

while ($x <= 3) {
    echo "Angka : $x ";
    $x++;
}

echo "<br>";

for ($i=0; $i < 5; $i++) { 
    if ($i == 3) {
        break;
    }
    echo $i . " ";
}

echo "<br>";

$nilai1 = 85;

if ($nilai1 >= 90) {
    echo "A";
} elseif ($nilai1 >= 80){
    echo "B";
} elseif ($nilai1 >= 70){
    echo "C";
} else {
    echo "D";
}