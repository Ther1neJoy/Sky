    <nav>
      <div class="nav-container">
        <div class="logo">
          <a href="index.php">
            <img src="svg/sky.svg" alt="">
          </a>
        </div>
        <div class="action1">
          <div class="navigator">
            <?php 
            if (isset($_SESSION["userid"])) {
            ?>
            <a href="dashboard.php">Dashboard</a>
            <?php
            }
            ?>
          </div>
          <div class="log-user">
            <?php 
            if (isset($_SESSION["userid"])) {
              
            ?>
            <div class="chat">
              <div class="chat-toggle">
                <label for="menu-toggle">
                  <img id="chat" src="svg/chat.svg" alt="">
                </label>
                <input type="checkbox" id="menu-toggle"/>
              </div>
              <div class="menu-list">
                Message Box
              </div>
            </div>
            <div class="not">
              <div class="not-toggle">
                <label for="not-toggle">
                  <img id="bell" src="svg/not.bell.svg" alt="">
                </label>
                <input type="checkbox" id="not-toggle"/>
              </div>
              <div class="not-list">
                Notification Box
              </div>
            </div>
            
            <p>Welcome <?php echo $uid;?></p>
            <button onclick="confirmLogout()" id="logout-button">Logout</button>
            <?php
            } else {
            ?>
            <button onclick="openLoginForm()" id="login-button">
              Login
            </button>
            <button onclick="openSignupForm()" id="signup-button">
              Signup
            </button>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="action2">
          <div class="hamburger-bar-box">
            <label for="menu1-toggle">
              <img src="svg/hamburger.svg" alt="" />
            </label>
            <input type="checkbox" id="menu1-toggle"/>
          </div>
          <div class="menu1-list">
            <?php
            if (isset($_SESSION["userid"])) {
            ?>
            <p>Welcome <?php echo $uid;?></p>
            <?php
            }
            ?>
            <?php 
            if (isset($_SESSION["userid"])) {
            ?>
              <a href="dashboard.php">Dashboard</a>
              <a href="#" onclick="confirmLogout()">Logout</a>
            <?php
            } else {
            ?>
              <a onclick="openLoginForm()">Login</a>
              <a onclick="openSignupForm()">Signup</a>
            <?php
            }
            ?>
          </div>
        </div>
      </div>
    </nav>