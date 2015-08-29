<?php


include "connect_to_mysql.php";

if($_POST['formSubmit'] == "Submit") 
{ 

	$errorMessage = "";
	$varClassname=$_POST['formclassname'];
	$varProfname=$_POST['formprofname'];
	$varYear=$_POST['formyearid'];
	$varSem=$_POST['formsem'];
	$varReviewText=$_POST['formreviewText'];

     //This is where the recipient of the e-mail is defined. Alter to your need.

 $to = 'alamsakib+site@gmail.com';

     //Mailing

 $subject = "New Data Submitted";

 $headers  = "MIME-Version: 1.0rn";

 $headers .= "Content-type: text/html; charset=iso-8859-1rn";

 $body = "Please see database for further details.";	
 $body .= "Text entered: ".$varClassname."" . " ".$varProfname." ".$varReviewText." ".$varSem." ". $varYear." ".$varReviewText    ;

 mail($to, $subject, $body);
 if(empty($errorMessage)) {
   $sql="INSERT INTO review (formclassname, formprofname, formyearid, formsem, formreviewText) VALUES (".  

     PrepSQL($varClassname) . "," .
     PrepSQL($varProfname) . "," .
     PrepSQL($varYear) . "," .
     PrepSQL($varSem) . "," .
     PrepSQL($varReviewText) . ")";
mysql_query($sql);

header("Location: thankyou.html");
exit();
}
}



function PrepSQL($value)

{

        // Stripslashes

  if(get_magic_quotes_gpc()) 

  {

    $value = stripslashes($value);

  }



        // Quote

  $value = "'" . mysql_real_escape_string($value) . "'";



  return($value);


}

?>


<html lang="en">
<head>
  <meta charset="utf-8">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery.typeahead.css">

  <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
  <script src="js/jquery.typeahead.js"></script>
  <script src="http://yourjavascript.com/54233514131/demo-reviews.js"></script>
</head>
<body>

<div style="width: 100%; max-width: 800px; margin: 0 auto;">

    <h1>Reviews</h1>

  <p><strong><span class="examplestyle">Example Form</span></strong></p>

  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">


  <div class="typeahead-container">
    <div class="input-group">

      <span class="typeahead-query">
        <input id="formclassname"
        name="formclassname"
        class="form-control"
        type="search"
        placeholder="Enter Course Here!"
        autocomplete="on">
      </span>

    </div>
  </div>




  <div class="typeahead-container">
    <div class="input-group">

      <span class="typeahead-query">
        <input id="formprofname"
        name="formprofname"
        class="form-control"
        type="search"
        placeholder="Enter Professor Name here!"
        autocomplete="on">
      </span>

    </div>
  </div>

  <div class="container">

    <h2>When Did you take it?</h2>
    <select class="form-control" name="formyearid" >
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
    </select>




    <select class="form-control" name="formsem" >
      <option value="Fall">Fall</option>
      <option value="Spring">Spring</option>
      <option value="Summer">Summer</option>
    </select>



    <textarea class="form-control" id="formreviewText" name="formreviewText" type="text" placeholder="Leave your review here!"></textarea>
    <div class="form-group">
      <input type="submit" name="formSubmit" value="Submit" />
    </div>


  </div>

</form>

<script>

var data = {
  classes: ["MATH111-Calculus I", "MATH112-Calculus II", "BIO141-Biology I", "BIO142-Biology II"],
  professors: ["Fred Helenius", "Ken Ono", "James Nagy", "Vladmir Oliker", "Rachel Spell"]

};

$('#formclassname').typeahead({
  minLength: 1,
  order: "asc",
  group: true,
  groupMaxItem: 5,
  hint: true,
  selector: {
    filter: "input-group-btn",
    filterButton: "btn btn-default",
    dropdown: "dropdown-menu dropdown-menu-right",
    list: "dropdown-menu",
    hint: "form-control"
  },
  source: {
    classes: {
      data: data.classes
    }
  },
  debug: true
});
$('#formprofname').typeahead({
  minLength: 1,
  order: "asc",
  group: true,
  groupMaxItem: 5,
  hint: true,
  selector: {
    filter: "input-group-btn",
    filterButton: "btn btn-default",
    dropdown: "dropdown-menu dropdown-menu-right",
    list: "dropdown-menu",
    hint: "form-control"
  },
  source: {
    professors: {
      data: data.professors
    }
  },
  debug: true
});
</script>









<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/collapse.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

