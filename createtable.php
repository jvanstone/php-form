<?php

/***** 
 * 
 *  Class to create a form
 * 
 * 
 * 
 */

class CreateForm {
   
    function stepOne () {

        $tblArray = array(
            'First Name' => array(
                'type' => 'text',
                'name' => 'first_name',
                'required' => true
            ),
            'Last Name' => array(
                'type' => 'text',
                'name'   => 'last_name',
                'required' => false
            ),
            'Email' => array(
                'type' => 'email',
                'name'   => 'user_email',
                'required' => true
            ),
            'How did you hear about us?' => array(
                'type' => 'select',
                'answers' => array(
                    'fb'=> 'Facebook', 
                    'in' => 'Instagram',
                    'li' => 'linkedIn'
                ),
                'name' => 'hear_about',
                'required' => false
            )
        );

      // Printing all the keys and values one by one
        $keys = array_keys($tblArray);


        for($i = 0; $i < count($tblArray); $i++) {

            //create the label
            echo '<label>' . $keys[$i] . '</label>';

             /******
              * 
              * Create the input field 
              *
              */   
            foreach($tblArray[$keys[$i]] as $key => $value) {

                //get the value for name and put it into name and id variable. 
                
                    if ($key == 'name') { 
                        $name = 'name="'.$value.'"';
                        $id = 'id="' .$value.'"';
                    } else if ($key =='type') {
                        $type = 'type="'.$value.'"';
                    }                    

                    if ($key == 'type' && $value == 'select') {
                    
                    //Get the {answers} from the array
                    $optAnswer = array_keys($tblArray['answers']);

                    var_dump($optAnswer);

                    //put the {answers} into html value in sequence
                    $inputValue = '<select type="'.$type.'"' .$name.' '. $id .'>';

                        foreach($optAnswer[$j] as $key=>$value){
        
                            $inputValue.= '<option value="'.$optAnswer.'">'.$optAnswer.'</option>';
                            $j++;
                        }

                    $inputValue.= '</select>';
                } else {
                    
                    $inputValue= '<input '.$type.' '.$id.' '.$name.'" />';
                }
          
            }
            echo $inputValue;
        }
        ?>
        <button value="submit">Submit</button>
        <?php
    }    

  
}

$create = new CreateForm();
$stepOne = "stepOne";

?>
