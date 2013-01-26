<?php $thisPage="Survey"; ?>
<?php include 'layout/header.php' ?>
<!-- BEGIN PAGE CONTENT -->

<form action="">
  <p>I see myself as someone who ...</p>
  
  <p class="question">...is talkative</p>
  <input type="radio" name="ptype1" value="1" /> 1 Strongly Agree<br />
  <input type="radio" name="ptype1" value="2" /> 2<br />
  <input type="radio" name="ptype1" value="3" /> 3<br />
  <input type="radio" name="ptype1" value="4" /> 4<br />
  <input type="radio" name="ptype1" value="5" /> 5 Strongly Disagree<br />
	  
  <p class="question">...tends to find fault with others</p>
  <input type="radio" name="ptype2" value="1" /> 1 Strongly Agree<br />
  <input type="radio" name="ptype2" value="2" /> 2<br />
  <input type="radio" name="ptype2" value="3" /> 3<br />
  <input type="radio" name="ptype2" value="4" /> 4<br />
  <input type="radio" name="ptype2" value="5" /> 5 Strongly Disagree<br />
  
  <p class="question">...does a thorough job</p>
  <input type="radio" name="ptype3" value="1" /> 1 Strongly Agree<br />
  <input type="radio" name="ptype3" value="2" /> 2<br />
  <input type="radio" name="ptype3" value="3" /> 3<br />
  <input type="radio" name="ptype3" value="4" /> 4<br />
  <input type="radio" name="ptype3" value="5" /> 5 Strongly Disagree<br />
  
  <p class="question">...is reserved</p>
  <input type="radio" name="ptype4" value="1" /> 1 Strongly Agree<br />
  <input type="radio" name="ptype4" value="2" /> 2<br />
  <input type="radio" name="ptype4" value="3" /> 3<br />
  <input type="radio" name="ptype4" value="4" /> 4<br />
  <input type="radio" name="ptype4" value="5" /> 5 Strongly Disagree<br />
  
  <p class="question">...is helpful and unselfish with others</p>
  <input type="radio" name="ptype5" value="1" /> 1 Strongly Agree<br />
  <input type="radio" name="ptype5" value="2" /> 2<br />
  <input type="radio" name="ptype5" value="3" /> 3<br />
  <input type="radio" name="ptype5" value="4" /> 4<br />
  <input type="radio" name="ptype5" value="5" /> 5 Strongly Disagree<br />
  
  <p class="question">...can be somewhat careless</p>
  <input type="radio" name="ptype6" value="1" /> 1 Strongly Agree<br />
  <input type="radio" name="ptype6" value="2" /> 2<br />
  <input type="radio" name="ptype6" value="3" /> 3<br />
  <input type="radio" name="ptype6" value="4" /> 4<br />
  <input type="radio" name="ptype6" value="5" /> 5 Strongly Disagree<br />
  
  <p class="question">...is relaxed, handles stress well</p>
  <input type="radio" name="ptype7" value="1" /> 1 Strongly Agree<br />
  <input type="radio" name="ptype7" value="2" /> 2<br />
  <input type="radio" name="ptype7" value="3" /> 3<br />
  <input type="radio" name="ptype7" value="4" /> 4<br />
  <input type="radio" name="ptype7" value="5" /> 5 Strongly Disagree<br />
  
  <p class="question">...is full of energy</p>
  <input type="radio" name="ptype8" value="1" /> 1 Strongly Agree<br />
  <input type="radio" name="ptype8" value="2" /> 2<br />
  <input type="radio" name="ptype8" value="3" /> 3<br />
  <input type="radio" name="ptype8" value="4" /> 4<br />
  <input type="radio" name="ptype8" value="5" /> 5 Strongly Disagree<br />
  
  
  <p class="question">...is a deep thinker</p>
  <input type="radio" name="ptype9" value="1" /> 1 Strongly Agree<br />
  <input type="radio" name="ptype9" value="2" /> 2<br />
  <input type="radio" name="ptype9" value="3" /> 3<br />
  <input type="radio" name="ptype9" value="4" /> 4<br />
  <input type="radio" name="ptype9" value="5" /> 5 Strongly Disagree<br />
  
  <p class="question">...tends to be disorganized</p>
  <input type="radio" name="ptype10" value="1" /> 1 Strongly Agree<br />
  <input type="radio" name="ptype10" value="2" /> 2<br />
  <input type="radio" name="ptype10" value="3" /> 3<br />
  <input type="radio" name="ptype10" value="4" /> 4<br />
  <input type="radio" name="ptype10" value="5" /> 5 Strongly Disagree<br />
  
  <br />
  <p>List your interests, separated by commas.</p>
  <textarea name="interests" rows="5" cols="50" placeholder="Example: music, violin, Ellie Goulding"></textarea>
  
  <p><input type="submit" value="Submit" /></p>
</form>

<!-- END PAGE CONTENT -->
<?php include 'layout/footer.php' ?>