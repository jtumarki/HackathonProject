<?php include 'layout/header.html' ?>
<!-- BEGIN PAGE CONTENT -->

<form action="">
  <p>I see myself as someone who ...</p>
  
  <p1>is talkative<\p1>
  <input type="radio" name="ptype1" value="1" /> Stongly Agree 1<br />
  <input type="radio" name="ptype1" value="2" /> 2<br />
  <input type="radio" name="ptype1" value="3" /> 3<br />
    <input type="radio" name="ptype1" value="4" /> 4<br />
	  <input type="radio" name="ptype1" value="5" /> 5 Strongly Disagree<br />
  
  <p>List your interests, separated by commas.</p>
  <textarea name="interests" placeholder="Example: music, violin, Ellie Goulding"></textarea>
  
  <p><input type="submit" value="Submit" /></p>
</form>

<!-- END PAGE CONTENT -->
<?php include 'layout/footer.html' ?>