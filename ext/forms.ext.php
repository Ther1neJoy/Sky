    <div class="overlay" id="overlay"></div>
    <div id="loginForm" class="form-popup">
        <form class="form-container" action="includes/login.inc.php" method="post">
            <h2>Login</h2>
            <label for="uid"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uid" required>
            
            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" required>
            <br>
            <br>
            <button type="submit" name="submit" class="btn">Login</button>
            <button type="button" class="btn cancel" onclick="closeLoginForm()">Close</button>
        </form>
    </div>
    
    <div id="signupForm" class="form-popup">
        <form class="form-container" action="includes/signup.inc.php" method="post">
            <h2>Signup</h2>
            <label for="uid"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uid" required>
            
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
            
            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" required>
            
            <label for="pwdRepeat"><b>Password Repeat</b></label>
            <input type="password" placeholder="Repeat Password" name="pwdRepeat" required>
            <br>
            <br>
            <button type="submit" name="submit" class="btn">Signup</button>
            <button type="button" class="btn cancel" onclick="closeSignupForm()">Close</button>
        </form>
    </div>
