<?php

/******
 * 
 *  Table Array Creation 
 * 
 * 
 */

$tblArray = array(
    'First Name' => array(
        'var'   => 'first_name',
        'input' => 'text',
        'required' => 'true'
    ),
    'Last Name' => array(
        'var'   => 'last_name',
        'input' => 'text',
        'required' => 'true'
    ),
    'Email' => array(
        'var'   => 'user_name',
        'input' => 'email',
        'required' => 'true'
    )
);

/***** 
 * 
 *  Class to create a form
 * 
 * 
 * 
 */

class CreateForm
{

    function stepOne () {
        $name = 'createFormLayout';
        $this->$name(); // This calls the Bar() method
    }

    ///add function
    function createFormLayout() {
        echo 'hello';
    }
}

$create = new CreateForm();
$funcname = "createFormLayout";
$create->$funcname();  // This calls $foo->Variable()
 
?>
