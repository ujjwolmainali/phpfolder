<?php

//anynomous class(it is defined and instantaite at once)
//it is used to 
$x = new class {

    public function sau()
    {
        echo "hello<br>";
    }
};
$x->sau();

//normal class
class animal
{
    public function sam()
    {
        echo "Hello guyz<br>";
    }
}
$y = new animal();
$y->sam();
