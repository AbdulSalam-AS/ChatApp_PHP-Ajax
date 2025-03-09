<?php
session_start();
if (isset($_SESSION['unique_id'])) {// if user is logged in
  header("location: users.php");
}
include_once "header.php"
  ?>

<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#" autocomplete="off">
        <div class="error-txt"></div>

        <div class="field input">
          <label for="">Email Address</label>
          <input type="text" name="email" placeholder="Email Address" />
        </div>

        <div class="field input">
          <label for="">Password</label>
          <input type="password" name="password" placeholder="Password" />
          <i class="fa-solid fa-eye"></i>
        </div>

        <div class="field button">
          <input type="submit" value="Continue to Chat" />
        </div>
      </form>
      <div class="link">Don't have an account? <a href="index.php">Sign Up</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/Login.js"></script>

</body>

</html>