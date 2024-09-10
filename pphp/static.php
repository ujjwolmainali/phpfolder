
<?php
//object is particular of the genralized group
//static data member

class student //student is generalize
{
    public static $k = 12;
    public static function display()
    {
        echo "<br>This is static function.<br>";
    }
    public function action()
    {
        self::display();
    }
}
$x = new student;
echo student::$k; //calling data member
student::display(); //calling function without creating object
$x->action();
