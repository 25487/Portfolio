<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Portfolio -Taurese</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  </head>
  <style>
  * {box-sizing: border-box;}

  input[type=text], select, textarea {

    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }

  input[type=submit] {
    background-color: #000000;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #ffffff;
    color: black;

  }

  .container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  </style>
  <div id="test">
  <span><a href="index.html"><h3>Home</h3></a></span>
  <span><a href="projects.html"><h3>Projects</h3></a></span>
  <span><a href="contact.php"><h3>Contact</h3></a></span>
  </div>
  <body>
    <h1><i>Contact</i></h1>
  <br><i>By Taurese Usman</i><br>
  <body>



  <div id="white">_____________________</div>
  <span style="display:block; height: 15px;"></span>
    <div id="white">Please fill in the contact form to get connected:</div>
    <span style="display:block; height: 15px;"></span>




    <div id="after_submit"></div>
    <form id="contact_form" action="php/submit.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <label class="required" for="name">Your name:</label><br />
        <input id="name" class="input" name="firstname" type="text" value="" placeholder="Your Name..." size="30" /><br />
        <span id="name_validation" class="error_message"></span>
      </div>
      <div class="row">
        <label class="required" for="name">Subject:</label><br />
        <input id="name" class="input" name="subject" type="text" value="" placeholder="The Subject..." size="30" /><br />
        <span id="name_validation" class="error_message"></span>
      </div>
      <div class="row">
        <label class="required" for="email">Your email:</label><br />
        <input id="email" class="input" name="email" type="text" value="" placeholder="Your Email..." size="30" /><br />
        <span id="email_validation" class="error_message"></span>
      </div>
      <div class="row">
        <label class="required" for="message">Your message:</label><br />
        <textarea id="message" class="input" name="message" rows="7" cols="30" placeholder="Your Message..."></textarea><br />
        <span id="message_validation" class="error_message"></span>
      </div>
      <input id="submit_button" type="submit" value="Send email" />
    </form>



  <footer>
    <footer color="white" style="text-align: center;">

    <span style="display:block; height: 20px;"></span>

  <a href="https://www.linkedin.com/in/taurese-usman-2b22b4183/">
    <img src="https://image.flaticon.com/icons/png/512/61/61109.png" width="3%"></a>

  <a href="https://github.com/25487">
  <img src="https://cdn.freebiesupply.com/logos/large/2x/github-icon-logo-png-transparent.png" width="3%">
  </a>
  <p>&copy;Taurese Usman
  	</p>
  </footer>
</html>
