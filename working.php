<!DOCTYPE html>
<html> 
<head> 
  <title>Quiz</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <meta charset="utf-8" />
</head> 
<body>
  <?php  
    // Shows the initial questions
     function print_form() {
     echo <<<END
       <form action="$_SERVER[PHP_SELF]" method="post">	 
		 <h4>This is a quiz.	   
		   <br>	   
		   It is difficult.	   
		   <br>	   
		   Please don't fail.
		   <br><br>
		 </h4>
		 <div class="content">
		   <p>Question 1: What is your job?</p>
		   <input type="text" name="yourjob"/>
		   <br><br>
		   <p>Question 2: Do you like your job?</p>
		   <input type="text" name="likejob"/>
		   <br><br>
		   <p>Question 3: Do you like your students?</p>
		   Yes<input type="radio" name="students" value="yes" checked="checked"/>
		   No<input type="radio" name="students" value="no"/>
		   <br><br>
		   <p>Question 4: Which student is your favorite?</p>
		   <input type="radio" name="favorite" value="none" checked="checked">No one
		   <br>
		   <input type="radio" name="favorite" value="else">Anyone but Blake
		   <br>
		   <input type="radio" name="favorite" value="blake">Blake
		   <br><br>
		   <p>Question 5: What grade are you going to give our class?</p>
		   A<input type="radio" name="grade" value="a" checked="checked"/>
		   B<input type="radio" name="grade" value="b"/>
		   C<input type="radio" name="grade" value="c"/>
		   D<input type="radio" name="grade" value="d"/>
		   F<input type="radio" name="grade" value="f"/> 
		   <br><br><br>
		   <input type="hidden" name="stage" value="process">
		   <input type="submit" value="Submit">
		   <input type="reset" value="Clear">
		 </div>
	   </form>
END;
     }

     function process_form() {  
       $yourjob = $_POST['yourjob'];
       $likejob = $_POST['likejob'];
	   $students = $_POST['students'];
	   $favorite = $_POST['favorite'];
	   $grade = $_POST['grade'];
    
       print "<h4>I told you it was difficult.</h4>";
    
       // Checks if the answer to Q1 contains the words teacher, professor, or educator
       if (preg_match('/\b(\w*professor|teacher|educator\w*)\b/i', $yourjob)) {
         print "<p>Question 1: Correct</p>";
       }
       else {
         print "<p>Question 1: <strong>Failure</strong></p>";
       }
    
       // Checks if the answer to Q2 contains the words yes, yeah, or affirmative
       if (preg_match('/\b(\w*yes|yeah|affirmative\w*)\b/i', $likejob)) {
         print "<p>Question 2: Correct</p>";
       }
       else {
         print "<p>Question 2: <strong>Failure</strong></p>";
       }
    
      // Checks if the answer to Q3 is "yes"
      if ($students == 'yes') {
        print "<p>Question 3: Correct</p>";
      }
      else {
        print "<p>Question 3: <strong>Failure</strong></p>";
      }
    
      // Checks if the answer to Q4 is "blake"
      if ($favorite == 'blake') {
        print "<p>Question 4: Correct</p>";
      }
        else {
       print "<p>Question 4: <strong>Failure</strong></p>";
      }
    
      // Checks if the answer to Q5 is "a"
      if ($grade == 'a') {
        print "<p>Question 5: Correct</p>";
      }
      else {
        print "<p>Question 5: <strong>Failure</strong></p>";
      }
    }

    // Main controlling mechanism
    if (isset($_POST['stage']) && ('process' == $_POST['stage'])) {
      process_form();
    } else {
      print_form();
    }
  ?>
</body>
</html>
