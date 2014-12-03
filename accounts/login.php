<?php ?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<html>
<body>
    <form action='index.php' method='post'>
        <fieldset>
        <label>Email Address:</label>
        <input type ='text' name='emailAddress'value='<?php $emailaddress ?>'><br>
        <label>Password:</label>
        <input type ='password' name='password'value='<?php $password ?>'><br>
        <label>Submit</label>
        <input type="submit" name='action' value="login">
        </fieldset>
    </form>
</body>

</html>