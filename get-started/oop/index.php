<?php
    spl_autoload_register(function ($class) {
        include 'classes/' . $class . '.php';
    });

    // Example of visibilibty(students.php)
    $object = new students;
    $object->user();
    // $objects = new school;
    // echo $objects->myschool();
    // example of inheritance(student.php)
    $obj=new student;
     
    $obj=new newstudent;
    $obj->getvalue(11,12);//set the argumnets value
    $obj->display();//print the value;

    // example for resolution operator(scope.php)
     $scope = 'scope'; //we can store the class in a veriable
    // echo $scope::NAME;
    echo $scope::showdata();

    // examples of abstract classes(example.php)
    // $ob1=new Example;
    include __DIR__."/classes/example.php";
    $ob = new newexample;
    $ob->myname();
    $ob->demo();
    // example 2
    // $b1 = new explain; 
    // $b1->printdata(); 
    

    // examples of abstract classes(fruits.php)
    $obj1 = new fruits('apple', 'red');

    echo "<br>";
// examples of interfaces
 
    $interface = new user();
$interface->getname('Mohit', 'walia');
//  $clss='user';
user::getemail('mohitw420@gmail.com<br>');

// examples of traits
$traits = new car();
echo $traits->get_parts('BS-4', "black");
echo "<br>";

$house = new demo();
   echo 'My house is in' . ' ' . $house->getLocation();
   echo "<br>";
 
// examples of object iteration

$iteration=new myclass();
// iterate the object
foreach($iteration as $key=>$value){
    echo "$key=>$value<br>";
}
$iteration->iterate();