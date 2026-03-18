
<?php
include "views/header.php";
?>
        <div class="reg-form">
            <p class="title">REGISTRATION</p>
            <form method="POST" action="models/register_account.php">
                <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="account@web.com" >
                <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="sherry" >
                <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="mae" >
                <label for="password">Password</label>
                    <input type="password" name="password" id="password" >
                <label for="cpassword">Confirm Password</label>
                    <input type="password" name="cpassword" id="cpassword">
                <input type="submit" value="Signup" >
             
                
            </form>          
        </div>
   
<?php
include "views/footer.php";