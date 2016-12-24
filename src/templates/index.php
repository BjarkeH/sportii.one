<?php
include_once 'includes/header.php';
// sleep(2);
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
            <form class="signIn" autocomplete="on" action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
              <h2>Login to Sportii.one</h2>
              <input type="text" name="email" placeholder="Email">
              <br>
              <input type="password" name="password" placeholder="Password">
              <br>
              <input type="submit" name="logIn" value="Log in">
              <a href="#">New to Sportii.one?</a>
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
      <!-- <h3>Mød nogle af vores engagerede trænere</h3> -->
    </div>
    <div class="col-sm-3">
      <div class="thumbnail trainer">
        <img style="margin: 0 auto; max-width: 100%" src="http://placehold.it/128x128" alt="">
        <div class="caption">
          <h4>Post Title</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p>
            <a href="#" class="btn btn-primary" role="button">Read More</a>
            <a href="#" class="btn btn-default pull-right" role="button">&hearts;</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail trainer">
        <img style="margin: 0 auto; max-width: 100%" src="http://placehold.it/128x128" alt="">
        <div class="caption">
          <h4>Post Title</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p>
            <a href="#" class="btn btn-primary" role="button">Read More</a>
            <a href="#" class="btn btn-default pull-right" role="button">&hearts;</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail trainer">
        <img style="margin: 0 auto; max-width: 100%" src="http://placehold.it/128x128" alt="">
        <div class="caption">
          <h4>Post Title</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p>
            <a href="#" class="btn btn-primary" role="button">Read More</a>
            <a href="#" class="btn btn-default pull-right" role="button">&hearts;</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail trainer">
        <img style="margin: 0 auto; max-width: 100%" src="http://placehold.it/128x128" alt="">
        <div class="caption">
          <h4>Post Title</h4>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p>
            <a href="#" class="btn btn-primary" role="button">Read More</a>
            <a href="#" class="btn btn-default pull-right" role="button">&hearts;</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- End of body content -->

<?php
include_once 'includes/footer.php';
?>
