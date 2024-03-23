<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gamers Hub</title>
  <link rel="shortcut icon" href="./LandPage/icon/GH_Gaming_Copy.png" type="image/x-icon">
  <link rel="stylesheet" href="./LandPage/land.css">
  <link rel="stylesheet" href="./LandPage/land.cssgloble.css">
</head>

<body>

  <section class="showcase">
    <header>
      <div class="logo">
        <h1><a href="/">Gamers<span>Hub</span></a></h1>
      </div>
    </header>
    <video src="vid/Gamershub-log.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>Endless Adventure</h2>
      <h3>Awaits you in</h3>
      <section class="brandsec flex">
        <div class="brand flex">
          <div class="flex">
            <h2>Gamers<span>Hub</span></h2>
            <p></p>
          </div>
        </div>
      </section>


      <div class="container" id="signupContainer">

        <form method="post" action="./reg-proc.php">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
          </div>
          <button type="submit" class="btn">Register</button>
        </form>
        <p>Sign Up As Admin? <a href="#" onclick="toggleContainer('admin')">Sign Up</a></p>
      </div>


      <div class="container" id="adminRegistrationContainer">
        <form method="post" action="admin-reg-proc.php">
          <div class="form-group">
            <label for="adminUsername">Admin Username</label>
            <input type="text" id="adminUsername" name="adminUsername" required>
          </div>
          <div class="form-group">
            <label for="adminEmail">Admin Email</label>
            <input type="email" id="adminEmail" name="adminEmail" required>
          </div>
          <div class="form-group">
            <label for="adminAge">Admin Age</label>
            <input type="number" id="adminAge" name="adminAge" required>
          </div>
          <div class="form-group">
            <label for="adminPassword">Admin Password</label>
            <input type="password" id="adminPassword" name="adminPassword" required>
          </div>
          <button type="submit" class="btn">Register</button>
        </form>
        <p>Sign Up As User? <a href="#" onclick="toggleContainer('user')">Sign Up</a></p>
      </div>



      <div class="container" id="loginContainer">
        <form action="#">
          <div class="form-group">
            <label for="loginUsername">Username</label>
            <input type="text" id="loginUsername" name="loginUsername" required>
          </div>
          <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" id="loginPassword" name="loginPassword" required>
          </div>
          <button type="submit" class="btn">Login</button>
        </form>
        <p>Log In As Admin? <a href="#" onclick="toggleContainer('adminLogin')">Login</a></p>
      </div>




      <div class="container" id="adminLoginContainer">
        <form action="#">
          <div class="form-group">
            <label for="adminLoginUsername">Admin Username</label>
            <input type="text" id="adminLoginUsername" name="adminLoginUsername" required>
          </div>
          <div class="form-group">
            <label for="adminLoginPassword">Admin Password</label>
            <input type="password" id="adminLoginPassword" name="adminLoginPassword" required>
          </div>
          <button type="submit" class="btn">Login</button>
        </form>
        <p>Log In As User? <a href="#" onclick="toggleContainer('userLogin')">Login</a></p>
      </div>
      <div class="lsbtn flex">
        <button onclick="toggleContainer('user')">Sign Up</button>
        <button onclick="toggleContainer('userLogin')">Login</button>
      </div>
    </div>
  </section>
  <script>
    function toggleContainer(containerType) {
      var signupContainer = document.getElementById("signupContainer");
      var adminContainer = document.getElementById("adminRegistrationContainer");
      var loginContainer = document.getElementById("loginContainer");
      var adminLoginContainer = document.getElementById("adminLoginContainer");

      if (containerType === 'user') {
        signupContainer.classList.toggle("active");
        if (adminContainer.classList.contains("active")) {
          adminContainer.classList.remove("active");
        }
        if (loginContainer.classList.contains("active")) {
          loginContainer.classList.remove("active");
        }
        if (adminLoginContainer.classList.contains("active")) {
          adminLoginContainer.classList.remove("active");
        }
      } else if (containerType === 'admin') {
        adminContainer.classList.toggle("active");
        if (signupContainer.classList.contains("active")) {
          signupContainer.classList.remove("active");
        }
        if (loginContainer.classList.contains("active")) {
          loginContainer.classList.remove("active");
        }
        if (adminLoginContainer.classList.contains("active")) {
          adminLoginContainer.classList.remove("active");
        }
      } else if (containerType === 'userLogin') {
        loginContainer.classList.toggle("active");
        if (signupContainer.classList.contains("active")) {
          signupContainer.classList.remove("active");
        }
        if (adminContainer.classList.contains("active")) {
          adminContainer.classList.remove("active");
        }
        if (adminLoginContainer.classList.contains("active")) {
          adminLoginContainer.classList.remove("active");
        }
      } else if (containerType === 'adminLogin') {
        adminLoginContainer.classList.toggle("active");
        if (signupContainer.classList.contains("active")) {
          signupContainer.classList.remove("active");
        }
        if (adminContainer.classList.contains("active")) {
          adminContainer.classList.remove("active");
        }
        if (loginContainer.classList.contains("active")) {
          loginContainer.classList.remove("active");
        }
      }
      if (containerType === 'user') {
        if (action === 'signup') {
          signupContainer.classList.toggle("active");
        } else if (action === 'login') {
          loginContainer.classList.toggle("active");
        }
      } else if (containerType === 'admin') {
        if (action === 'signup') {
          adminSignupContainer.classList.toggle("active");
        } else if (action === 'login') {
          adminLoginContainer.classList.toggle("active");
        }
      }
    }
  </script>
</body>

</html>