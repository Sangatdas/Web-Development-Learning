<!DOCTYPE html>
<html>
  <head>
      <title>Get in Touch</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
      integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
      crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
      integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
      crossorigin="anonymous">
      </script>

      <style type="text/css">
        #success-msg{
          display: none;
        }
        #error-msg{
          display: none;
        }


      </style>
  </head>
  <body>

    <div class="container" id="page">
      <h1>Get in touch!</h1>
      <div class="alert alert-success" role="alert" id="success-msg">
        The message was successfully sent.We'll get to you ASAP
      </div>
	    <div class="alert alert-danger" role="alert" id="error-msg">
        <strong>There were error(s) in your form</strong>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" placeholder="someone@something.com" name="email">
        <small class="form-text text-muted">We will never share your email with someone else</small>
      </div>
      <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject">
      </div>
      <div class="form-group">
        <label for="content">What would you like to ask us?</label>
        <textarea class="form-control" id="content" name="content" rows="3">
        </textarea>
      </div>
      <button type="submit" class="btn btn-primary" id="suubmit">Submit</button>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
    integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
    crossorigin="anonymous">
    </script>
  </body>

</html>
