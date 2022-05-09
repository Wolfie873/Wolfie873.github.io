<!DOCTYPE html>
<html lang="en-us">
<header>
  <title>Test It!</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <!--JQuery input call-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
  </script>
  <!--Jquery UI-->
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js" integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous">
  </script>

  <!--<link rel="stylesheet" href="mainStyle.css" />-->
  <!--/*Website Colors:
      --davys-grey: #494947ff;
      --eggshell: #f0ebd8ff;
      --cerulean-frost: #6b9ac4ff;
      --vermilion: #ca3c25ff;
      --venetian-red: #c20114ff;-->

  <style type="text/css">
  </style>
</header>

<body>

  <div class="container">

    <h1>Get In Touch!</h1>

    <div class="row">

      <div class="alert alert-success" role="alert" id="successalert"></div>
      <div class="alert alert-danger" role="alert" id="dangeralert"></div>

      <div class="col-md-12">

        <form class="form-horizontal">

          <fieldset class="form-group">

            <label for="email">E-Mail Here</label>

            <input type="text" class="form-control" placeholder="email@email.com" id="email" name="email" />

            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small><br>

          </fieldset>

          <fieldset class="form-group">

            <label for="subject">Subject</label>

            <input type="text" class="form-control" id="subject" name="subject" /><br>

          </fieldset>

          <fieldset class="form-group">

            <label for="description">What would you like to ask me?</label>

            <textarea class="form-control" id="description" name="description" rows="10" cols="10"></textarea><br>

          </fieldset>

          <button type="submit" class="bg-primary" id="submit">Submit</button>

        </form>

      </div>

    </div>

  </div>

  <script type="text/javascript">
    function isEmail(email) {
      let regexEmail =
        /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/gim;
      return regexEmail.test(email);
    }

    $(function() {
      $("#description").resizable();
    });

    $("#submit").click(function() {

      var user = $("#email").val();

      var subject = $("#subject").val();

      var message = $("#description").val();

      var successmsg = "";

      var failmsg = "";

      if (isEmail(user)) {
        $("#successalert").css("display", "block");
        successmsg += "<p>This is a valid email address</p>";
      } else {
        $("#dangeralert").css("display", "block");
        failmsg += "<p>Not a valid email address</p>";
      }

      if (subject != "") {
        successmsg += "<p>Subject was not empty</p>";
      } else {
        failmsg += "<p>No subject was specified</p>";
      }

      if (message != "") {
        successmsg += "<p>Message field was not empty</p>";
      } else {
        failmsg += "<p>No message was provided</p>";
      }

      if (successmsg != "") {
        $("#successalert").css("display", "block");
        $("#successalert").html(successmsg);
      }
      if (failmsg != "") {
        $("#dangeralert").css("display", "block");
        $("#dangeralert").html(failmsg);
      }

      debugger;
    });
  </script>
  <!-- Option 1: Bootstrap Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

</body>

</html>