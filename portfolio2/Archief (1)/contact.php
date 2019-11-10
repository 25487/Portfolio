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

