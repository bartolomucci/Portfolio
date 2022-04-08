<?php include 'partials/_top.php'; ?>
<div class="container">
<h1 class="text-center">Contact</h1>

<form method="POST" action="post/contact-check.php">
  <div class="form-group">
    <label for="email-contact">Email</label>
    <input name="email" type="email" class="form-control" id="email-contact" required>
  </div>
  <div class="form-group">
    <label for="telephone-contact">Telephone</label>
    <input name="telephone" type="telephone" class="form-control" id="telephone-contact" required> 
  </div>
  <div class="form-group">
    <label for="reason">Explain here the reasons you are contacting me</label>
    <textarea name="contact_reason" class="form-control" id="reason" rows="5" maxlength="255" required></textarea>
  </div>
  <div class="form-group">
    <label for="antibot">What's (15 - 2) ?</label>
    <select class="form-control" id="antibot" name="verification" required>
      <option value="13">13</option>
      <option value="29">29</option>
      <option value="Pi" selected>3.14721</option>
    </select>
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="submit" value="Contact">
  </div>

</form>







</div>
<?php include 'partials/_bottom.php'; ?>
