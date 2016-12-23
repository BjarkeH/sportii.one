<?php
include_once 'includes/header.php';
?>

<!-- Body content -->

<div class="header hidden-xs">
  <div class="headerWrapper container">
    <div class="row">
      <div class="col-sm-2">
        <div class="logo">
          <img src="http://www.eatlogos.com/alphabet_logos/png/vector_s_s_letter_logo.png" width="50" height="50" alt="">
        </div>
      </div>
      <div class="col-sm-10">
        <nav class="pull-right">
          <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Registration</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron">
  <div class="jumboWrapper container">
    <div class="row">
      <div class="col-sm-6">
        <div class="intro">
          <div class="formWrapper">
            <h2>Login to Sportii.one</h2>
            <form class="signIn" autocomplete="off" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
              <input type="text" name="email" placeholder="Email">
              <br>
              <input type="password" name="password" placeholder="Password">
              <br>
              <input type="submit" name="logIn" value="Log in">
              <a href="#">Not a user yet?</a>
              <a href="#">Forgot password?</a>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6 hidden-xs">
        <div class="splash">

        </div>
      </div>
    </div>
  </div>
</div>

<div class="latestPost container">
  <div class="row">
    <div class="col-sm-12">
      <h3>Latest Blog Posts</h3>
    </div>
    <div class="col-sm-4">
      <img src="http://placehold.it/600x600" alt="">
      <h4>Blog Title</h4>
    </div>
    <div class="col-sm-4">
      <img src="http://placehold.it/600x600" alt="">
      <h4>Blog Title</h4>
    </div>
    <div class="col-sm-4">
      <img src="http://placehold.it/600x600" alt="">
      <h4>Blog Title</h4>
    </div>
  </div>
</div>



<!-- End of body content -->

<?php
include_once 'includes/footer.php';
?>
