<?php session_start()?>
<!DOCTYPE>
<html>
<body>
    <form action='index.php' method='post'>
        <fieldset>
        <label for='firstName'>First Name:</label>
        <input type ='text' name='fistName' id='firstName' value='<?php $firstname ?>'><br>
        <label>Last Name:</label>
        <input type ='text' name='lastName'value='<?php $lastname ?>'><br>
        <label>Email Address:</label>
        <input type ='text' name='emailAddress'value='<?php $emailaddress ?>'><br>
        <label>Password:</label>
        <input type ='password' name='password'value='<?php $password ?>'><br>
        <label>Submit</label>
        <input type="submit" name='action' value="RegSubmit">
        </fieldset>
    </form>
</body>

</html>