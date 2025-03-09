<?php
session_start();
if (isset($_SESSION['unique_id'])) {// if user is logged in
  header("location: users.php");
}
include_once "header.php"
  ?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#" enctype="multipart/form-data" autocomplete="off">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label for="">First Name</label>
            <input type="text" name="fname" placeholder="First Name" required />
          </div>

          <div class="field input">
            <label for="">Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" required />
          </div>
        </div>

        <div class="field input">
          <label for="">Email Address</label>
          <input type="text" name="email" placeholder="Email Address" required />
        </div>

        <div class="field input">
          <label for="">Password</label>
          <input type="password" placeholder="Password" name="password" required />
          <i class="fa-solid fa-eye"></i>
        </div>

        <div class="field image">
          <label for="">Select Image</label>
          <input type="file" name="image" required />
        </div>

        <div class="field button">
          <input type="submit" value="Continue to Chat" />
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/SignUp.js"></script>

</body>

</html>