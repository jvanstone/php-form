<!doctype html>
<html lang="en">
  <head>
    <title>PHP FORM</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <meta name="Author" content="Jason Vanstone">
    <meta name="Copyright" content="">
 
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
  </head> 

<body>
  <div id="container">

    <!-- Inner Container -->
    <div id="inner-container">

    <!-- Header -->
      <div id="header"><a href="index.php"></a></div>

    <div class="container-sm">
      <!-- Main Form -->
      <form id="assessmentform" data-toggle="validator" role="form" data-disable="false" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">

      <?php include('assessmentForm.php'); ?>


      </form> <!-- End of the Main Assesment Form -->
    </div> <!-- End Container -->

    </div> <!-- Inner Container -->
  </div>  <!-- Main Container -->

    
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>  

</body>
</html>