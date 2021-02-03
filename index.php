<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PHP FORM</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <meta name="Author" content="Jason Vanstone">
    <meta name="Copyright" content=="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
  </head>

<body>
  <div id="container">

    <!-- Inner Container -->
    <div id="inner-container">

    <!-- Header -->
      <div id="header"><a href="index.php"></a></div>


      <!-- Main Form -->
      <form id="assessmentform" onsubmit="return submitUserForm();" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

      <?php include('assessmentForm.php'); ?>


      </form> <!-- End of the Main Assesment Form -->


    </div> <!-- Inner Container -->
  </div>  <!-- Main Container -->
</body>
</html>