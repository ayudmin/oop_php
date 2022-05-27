<?php 



function add($one, $two)
{

    if (! is_float($one) || ! is_float($two)){

        throw new Exception('Please provide a float');
    }
    return $one + $two;
}


try {

    echo add(1, []);
} catch (Exception $e){

    echo 'oh well';
}