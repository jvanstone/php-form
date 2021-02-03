<?php 

  //Create Variables
  $emailArray = [];
  $xCount = 0; 
  $yCount = 1; //USED IN TO NUMBER EMAIL
  $emailSend ='';
  $fnameSend = '';
  $lnameSend = '';
  $newsletter = '';


 //Create Email Array 
 if(isset($_POST['submit'])) {

?>
 <fieldset>

  <legend>The form has been sent!</legend>

 	<p><b>Your free preliminary Canadian immigration assessment form has been sent.</b></p>
 	<p>Someone will get back to you within the next 48 hours.</p>
 	<p>Below is the data you submitted for review.</p>
 
 
 <?
 //outputs data sent by Post
 foreach ($_POST as $key => $value) {
  
  //CREATE EMAIL ARRAY 
  $emailArray[$key] = $value;
  $xCount++;
  
  
  if ($key=='First_Name') {
  
  $fnameSend=$value;
  
  echo '<p>'.$xCount.' '.$key=str_replace('_',' ',$key).': '.$value.'</p>';
  }
  elseif ($key=='Last_Name') {
  
  $lnameSend=$value;
  
  echo '<p>'.$xCount.' '.$key=str_replace('_',' ',$key).': '.$value.'</p>';
  }
  elseif ($key=='Email') {
  
  $emailSend=$value;
  echo '<p>'.$xCount.' '.$key=str_replace('_',' ',$key).': '.$value.'</p>';
 
  }
  elseif ($key=='Newsletter') {
    $newsletter=$value;
  	
  }
  elseif ($key=='submit' OR $key=='g-recaptcha-response'){
  
  }
  //Creates Confirmation on Website.
  else {
 
  echo '<p>'.$xCount.' '.$key=str_replace('_',' ',$key).': '.$value.'</p>';
 
  
  }


 /* foreach($value as $k => $v)
  {
  echo '<p>'.$xCount.' '.$k==str_replace('_',' ',$k).'</p>';
  echo '<p>'.$v.'</p>';
  echo '<hr />';
  }
	*/  
}

 //insert data into database
  try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO ImmigrationAssesment (first_name, last_name, email, newsletter)
  VALUES ('$fnameSend', '$lnameSend', '$emailSend', '$newsletter')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}



$last_id = $conn->lastInsertId();
$conn = null;
 

//include ('oldemailsetup.php');

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//require '../vendor/autoload.php';
require 'src/Exception.php';
require 'src/PHPMailer.php';

try { 
//Create a new PHPMailer instance
$mail = new PHPMailer();

echo 'hello this is in the begining of setting up phpmailer';
//Set who the message is to be sent from
$mail->setFrom('jason@vanstoneonline.com', 'Vanstone Online');
//Set an alternative reply-to address
$mail->addReplyTo('jasonvanstonemusic@gmail.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('jason.vanstone.ca@gmail.com', 'Jason Vanstone');
//Set the subject line
echo 'hello this is in the middle of setting up phpmailer';
$mail->Subject = 'Assesment Form mail() test';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
$mail->addAttachment('../simages/pink.gif');
} catch (Exception $e) {
    echo $e->errorMessage();
}

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}



?>



} else { 
   ?> 
   
          <fieldset>
            <legend></legend>
            <h2>Free Preliminary Canadian Immigration Assessment Form</h2>
            <h5 class="purple"> To work, visit or study in Canada there are procedures which must be met and fees apply.</h5>
            <p><b>Please complete this form to the best of your ability. If a question is not applicable to you, write N/A.</b></p>
            <p>The information collected in this form will be shared with our partner, a reputable Canadian Immigration Services firm, helping people just like you achieve their dream of visiting, living or working in our beautiful country, Canada. 
				Rated Durham Region’s #1 top Immigration firm for a reason, offering personalized service and stay by your side every step of the way. They will review your information to determine which Canadian immigration programs you are currently eligible for. You will be contacted shortly.
			<p>At JobCanada.org we are here to help you! 31+ years' experience helping jobseekers & companies achieve goals!</p>   
		   <blockquote>Experts in assisting people in the Canadian market easily find Employment and Career Training, Resume Assistance, Employment specialists and more here to serve you since 2000!</blockquote>
          
         </fieldset>
                    
<?
  //TEST THAT THE ARRAY IS WORKING PROPERLY
  //echo'<p>EMPTY ' . count($emailArray).'</p>  </fieldset> ';
 
}

 ?>