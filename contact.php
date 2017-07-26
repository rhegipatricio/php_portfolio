<!DOCTYPE html>
<html>


<head>

  <title>Rheginald Patricio Bootstrap Profile</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

 <body>

<?php require '/include/header.php';?>


    <!-- Start of content wrap -->
    <div class="wrap">
      <div class="container">
        <section class="row">
          <div class="col-md-8">
            <form class="contact-form">
              <h1 class="contact-form-header">Contact</h1>
              <hr class="contact-hr"/>
              <div class="form-group">
                <label class="label-name" for="name">Name</label>
                <input type="text" id="name_input" name="user_name" />
              </div>
              <div class="form-group">
                <label class="label-mail" for="mail">E-mail</label>
                <input type="email" id="mail_input" name="user_mail" />
              </div>
              <div class="form-group">
                <label class="label-msg" for="msg">Message</label><br />
                <textarea id="msg" name="user_message_input" cols=600></textarea>
              </div>
              <button class="submit-btn">Submit</button>
            </form>
          </div>
          <div class="col-md-4">


<?php require '/include/sidebar.php';?>


          </div>
        </section>
      </div>
    </div>
    <!-- End of content wrap -->

<?php require '/include/footer.php';?>


    <!-- jQuery CDN -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</html>