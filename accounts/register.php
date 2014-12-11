<?php session_start()?>
<!DOCTYPE>
<html>
<body>
    <form role="form" action='index.php' method='post'>
        <div class="form-group">
        <label for='firstName'>First Name:</label>
        <input type ='text' class="form-control" name='fistName' id='firstName' value='<?php $firstname ?>' placeholder="First Name">
        </div>
        <div class="form-group">
             <label for="lastName">Last Name:</label>
             <input type ='text' class="form-control" name='lastName' value='<?php $lastname ?>' placeholder="Last Name">
        </div>
        <div class="form-group">
        <label for="email" >Email Address:</label>
        <input type ='email' class="form-control" name='emailAddress' value='<?php $emailaddress ?>' placeholder="Email Address">
        </div>
        <div class="form-group">
        <label for="password">Password:</label>
        <input type ='password' class="form-control" name='password' value='<?php $password ?>' placeholder="Password">
        <label>Submit</label>
        <input type="submit" name='action' value="UpdSubmit">
        </div>
    </form>
</body>

</html>