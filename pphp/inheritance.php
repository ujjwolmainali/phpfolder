<?php
//WAP to implement inheritance class.
class animal
{
    private $color, $height;
    protected static $x = 5;
    public function __construct($x, $y)
    {
        $this->color = $x;
        $this->height = $y;
    }
    public function display()
    {
        echo "Color: $this->color<br> Height: $this->height inch <br>";
    }
}
class dog extends animal
{
    public function show()
    {
        echo "I am a dog.<br>";
        echo parent::$x;
    }
}
$d = new dog("Black", 5);
$d->display();
$d->show();
