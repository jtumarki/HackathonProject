<?php $thisPage="Survey"; ?>
<?php include 'layout/header.php' ?>
<!-- BEGIN PAGE CONTENT -->

<form action="">
  <p>What is your favorite color?</p>
  <input type="radio" name="color" value="red" /> Red<br />
  <input type="radio" name="color" value="green" /> Green<br />
  <input type="radio" name="color" value="blue" /> Blue<br />
  
  <p>List your interests, separated by commas.</p>
  <textarea name="interests" placeholder="Example: music, violin, Ellie Goulding"></textarea>
  
  <p><input type="submit" value="Submit" /></p>
</form>

<!-- END PAGE CONTENT -->
<?php include 'layout/footer.php' ?>