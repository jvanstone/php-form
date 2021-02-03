<?php
echo 'hi';
//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';
require 'src/Exception.php';
require 'src/PHPMailer.php';

include('config.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      PHP FORM
    </title>
    <META NAME="description" content="">
    <META NAME="keywords" content="">
    <meta charset="UTF-8">
    <META NAME="Author" CONTENT="Jason Vanstone">
    <META NAME="Copyright" CONTENT="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' type='text/css' href='./css/stye.css' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- GET GOOGLE CAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- USE CAPTCHA -->
    <script>
      function submitUserForm() {
      var response = grecaptcha.getResponse();
      if(response.length == 0) {
        document.getElementById('g-recaptcha-error').innerHTML = '<span style="color:red;">This field is required.</span>';
        return false;
      }
      return true;
      }

      function verifyCaptcha() {
        document.getElementById('g-recaptcha-error').innerHTML = '';
      }
    </script>

    
  </head>


 <body>

 <!-- Main Container -->
 <div id="container">

    <!-- Inner Container -->
    <div id="inner-container">

    <!-- Header -->
    <div id="header"><a href="index.php" class="click"></a></div>

    <!-- Main Form -->
    <form id="assessmentform" onsubmit="return submitUserForm();" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

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

  <p>Below is the data you submitted for review. It has been sent your email for your reference.</p>

 <?php
 //outputs data sent by Post
 foreach ($_POST as $key => $value) {

  //CREATE EMAIL ARRAY
  $emailArray[$key] = $value;
  $xCount++;


  if ($key=='First_Name' ) {

    $fnameSend=substr(strip_tags($value), 0, 255);

    echo '<label class="label">'.$xCount.' '.$key=str_replace('_',' ',$key).': </label><div class="results"> '.$value.'</div>';
    }
    elseif ($key=='Last_Name') {
    $lnameSend=substr(strip_tags($value), 0, 255);

    echo '<label class="label">'.$xCount.' '.$key=str_replace('_',' ',$key).': </label> <div class="results">'.$value.'</div>';
    }
    elseif ($key=='Email' && PHPMailer::validateAddress($key)) {

    $emailSend=$value;
    echo '<label class="label">'.$xCount.' '.$key=str_replace('_',' ',$key).': </label> <div class="results">'.$value.'</div>';

    }
    elseif ($key=='Newsletter') {
      $newsletter=$value;
      echo '<label class="label">'.$xCount.' '.$key=str_replace('_',' ',$key).': </label> <div class="results">'.$value.'</div>';

    }
    elseif ($key=='submit' OR $key=='g-recaptcha-response' OR $key=='MAX_FILE_SIZE'  or $key==''){

    }
  //Creates Confirmation on Website.
  else {

  echo '<label class="label">'.$xCount.' '.$key=str_replace('_',' ',$key).':</label><div class="results">'.$value.'</div>';

  }
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
  //echo "New record created successfully";

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$last_id = $conn->lastInsertId();
$conn = null;
  echo '<label class="label">ID Confirmation:</label><div class="results"> #' . $last_id . '</div>';

//Create email to be sent
 $html  = '<html><body>';
 $html .= '<h2>Free Preliminary Canadian Immigration Assessment Form</h2>';
 $html .= '<p>Thank you '.$fnameSend.' '.$lnameSend.' for taking the time to fill out immigration assessment form</p>';
 $html .= '<p>Someone will get back to you within the next 48 hours.';
 $html .= '<p>Thank you! ~ JobCanada.org</p>';

 $html .= '<table rules="all" cellpadding="10">';

 foreach($emailArray as $key => $row) {

 	if ($key=='submit' OR $key=='g-recaptcha-response' or $key=='MAX_FILE_SIZE' or $key=='') {

 	}
 	else {
 	$html .= '<tr><td cellpadding="10"> '.$yCount.'</td><td cellpadding="10"> '.$key=str_replace('_',' ',$key).':</td><td cellpadding="10">'.$row .'</td></tr>';
  	$yCount++;
  	}

  }
 $html .= '</table>';
 $html .= '</body></html>';


//include ('oldemailsetup.php');

$msg ='';
$content = $html;
if (array_key_exists('userfile', $_FILES)) {
    // First handle the upload
    // Don't trust provided filename - same goes for MIME types
    // See http://php.net/manual/en/features.file-upload.php#114004 for more thorough upload validation
    // Extract an extension from the provided filename
    $ext = PHPMailer::mb_pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
    // Define a safe location to move the uploaded file to, preserving the extension
    $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $_FILES['userfile']['name'])) . '.' . $ext;

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        // Upload handled successfully

  //Create a new PHPMailer instance
  $mail = new PHPMailer();

  //echo '<p>hello this is setting up phpmailer</p>';
  //Set who the message is to be sent from
  $mail->setFrom('assessmentform@jobcanada.org', 'Job Canada');
  //Set an alternative reply-to address
  $mail->addReplyTo('inquire@jobcanda.org', 'Job Canada');
  //Set who the message is to be sent to
  $mail->addAddress($emailSend, $fnameSend . ' ' . $lnameSend, 0);
  $mail->addAddress('jason@vanstoneonline.com');
  $mail->addAddress('inquire@jobcanada.org');
  //Set the subject line
  $mail->isHTML(true);
  $mail->CharSet = "text/html; charset=UTF-8;";

  $mail->Subject = 'Immigration Assessment form: #' . $last_id . ' ' . $fnameSend . ' ' . $lnameSend;
  //Read an HTML message body from an external file, convert referenced images to embedded,
  //convert HTML into a basic plain-text alternative body
  $mail->Body = $content;
  //Replace the plain text body with one created manually

 if (!$mail->addAttachment($uploadfile, $last_id . 'Resume')) {
            $msg .= 'Failed to attach file ' . $_FILES['userfile']['name'];
        }
        if (!$mail->send()) {
            $msg .= 'Mailer Error: ' . $mail->ErrorInfo;
            echo $msg;
        } else {

            $msg .= 'Message sent!';
       		//echo $msg;
        }
    } else {
        $msg .= 'Failed to move file to ' . $uploadfile;
    }
  }
 echo '</fieldset>';

}
 else {
   ?>

  <div class="">
    <h1>Free Preliminary Canadian Immigration Assessment Form</h2>
    <h5 class="purple"> To work, visit or study in Canada there are procedures which must be met and fees apply.</h1>
    <p><b>Please complete this form to the best of your ability. If a question is not applicable to you, write N/A.</b></p>
    <p>The information collected in this form will be shared with our partner, a reputable Canadian Immigration Services firm, helping people just like you achieve their dream of visiting, living or working in our beautiful country, Canada. Rated Durham Region’s #1 top Immigration firm for a reason, offering personalized service and stay by your side every step of the way. They will review your information to determine which Canadian immigration programs you are currently eligible for. You will be contacted shortly.</p>

    <h2>Job Canada is here to help you! 32+ years' experience helping jobseekers & companies achieve goals!</h2>
    <blockquote>Experts in assisting people in the Canadian market easily find Employment and Career Training, Resume Assistance, Employment specialists and more here to serve you since 2000!</blockquote>

    <div class="required"> * is a required field</div>

  </div>

    <!-- THE ACTUAL FORM DATA -->
    <?php include('assessmentForm.php'); ?>

<? } ?>

</form> <!-- End of the Main Assesment Form -->


</div> <!-- Inner Container -->
 </div>  <!-- Main Container -->


</body>
</html>
