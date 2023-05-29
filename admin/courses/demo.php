<?php
// $_POST is a magic PHP variable that will always contain
// any form data that was posted to this page.
// We check here to see if the textfield called 'name' had
// some data entered into it, if so we process it, if not we
// output the form.
if (isset($_POST['name'])) {
  print_name($_POST['name']);
}
else {
  print_form();
}

// In this function we print the name the user provided.
function print_name($name) {
  // $name should be validated and checked here depending on use.
  // In this case we just HTML escape it so nothing nasty should
  // be able to get through:
  echo 'Your name is: '. htmlentities($name);
}

// This function is called when no name was sent to us over HTTP.
function print_form() {
  echo '
    <form name="form1" method="post" action="">
    <p><label><input type="text" name="name" id="textfield"></label></p>
    <p><label><input type="submit" name="button" id="button" value="Submit"></label></p>
    </form>
  ';
}
?>