<!DOCTYPE html>
<html>
    <head>
        <title>Simple Form</title>
    </head>
    <body>
        <h2>Thank You For Submitting The Form</h2>
        <!-- Getting the output from the form value provided through 'form.php' -->
        First Name: <?php echo $_POST['Fname'];
         // displaying the value of First Name provided in 'Form.php' while submitting the form ?><br/>
        Last Name: <?php echo $_POST['Lname'];
         // displaying the value of Last Name provided in 'Form.php' while submitting the form ?><br/>
        Username: <?php echo $_POST['Username']; ?><br/>
        Password: <?php echo $_POST['Password']; // displaying the value of Password provided in 'Form.php' while submitting the form ?><br/>
        <!-- End of getting the value from the submitted form -->
    </body>
</html>