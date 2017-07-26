<!DOCTYPE html>
<html>


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>About | Rheginald Patricio</title>
  <link rel="stylesheet" type="text/css" href="reset.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php include './header.php';?>


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
          </div>
        </section>
      </div>
    </div>


<?php include './sidebar.php';?>



<?php include './footer.php';?>


    <!-- jQuery CDN -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <!-- Bootstrap CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</html>