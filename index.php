<?php
//Создание переменных
$name = "John";
$age = 30;
$height = 1.8;

//............

//Условный оператор
if ($age > 18) {
    echo "You are an adult.";
} else {
    echo "You are not an adult yet.";
}

//............

//Цикл
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}
// Output: 1 2 3 4 5 6 7 8 9 10

//............

//Функция
function sayHello($name) {
    echo "Hello, " . $name . "!";
}

sayHello("John");
// Output: Hello, John!

//............

//Массив
$fruits = array("apple", "banana", "orange");
echo $fruits[1]; // Output: banana

$person = array(
    "name" => "John",
    "age" => 30,
    "email" => "john@example.com"
);
echo $person["email"]; // Output: john@example.com

//............

//Конкатинация
$name = "John";
$age = 30;
echo "My name is " . $name . " and I am " . $age . " years old.";
// Output: My name is John and I am 30 years old.

//..........

//Использование цикла foreach для перебора элементов массива
$fruits = array("apple", "banana", "orange");
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
// Output: apple banana orange

//..........

//Операторы сравнения
$age = 30;
if ($age == 30) {
    echo "You are 30 years old.";
}
if ($age >= 18 && $age <= 65) {
    echo "You are of working age.";
}

//..........

// Создание хеш-массива
$person = array(
    "name" => "John",
    "age" => 30,
    "email" => "john@example.com"
);

// Получение значений из хеш-массива
echo $person["name"]; // Output: John
echo $person["age"]; // Output: 30
echo $person["email"]; // Output: john@example.com

// Изменение значения в хеш-массиве
$person["age"] = 31;
echo $person["age"]; // Output: 31

//............

// Родительский класс
class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

// Дочерний класс
class Student extends Person {
    private $studentId;

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function getStudentId() {
        return $this->studentId;
    }
}

// Создание объектов
$person = new Person("John", 30);
$student = new Student("Mary", 20, "1234");

// Вызов методов объектов
echo $person->getName(); // Output: John
echo $student->getName(); // Output: Mary
echo $student->getStudentId(); // Output: 1234
