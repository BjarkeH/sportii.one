<?php include_once 'includes/header.php' ?>

<!-- Body Content -->

<div class="header trainer-header hidden-xs">
  <div class="headerWrapper container">
    <div class="row">
      <div class="col-sm-4">
        <h2>Trainer Board</h2>
      </div>
      <div class="col-sm-8">
        <div class="greeting pull-right">
          <p>
            <span class="greeting">Godaften, <?= 'Trainername' ?></span>
            <img style="border-radius: 100%;" src="http://placehold.it/40x40" alt="" width="30" height="30">
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="trainer-info">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="content container-fluid">
          <div class="col-sm-6">
            <p>info:</p>
            <h3>Trainername</h3>
            <p>Email</p>
            <p class="text-muted">Profile Progress</p>
            <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 50%">
                50%
              </div>
            </div>
          </div>
          <div class="col-sm-6 hidden-xs">
            <div class="profileimage">
              <img class="pull-right" src="http://placehold.it/600x600" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="content container-fluid">
          <div class="col-xs-12">
            <h4>Latest Clients</h4>
            <div class="list-group">
              <a href="#" class="list-group-item"><span class="badge">2</span>Jan Jansen</a>
              <a href="#" class="list-group-item"><span class="badge">10</span>Kristina Jansen</a>
              <a href="#" class="list-group-item"><span class="badge">5</span>Erina Jansen</a>
              <a href="#" class="list-group-item"><span class="badge">4</span>Ulla Jansen</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="clients container">
  <div class="row">
    <div class="col-sm-12 title">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>Clients</h4>
        </div>
        <table class="table">
          <a href="#">
          <tr>
            <td>1</td>
            <td>Bjarke</td>
            <td class="hidden-xs">Timestamp</td>
            <td><button type="button" class="btn btn-default">&hearts;</button></td>
          </tr>
          </a>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- End of Content -->

<?php include_once 'includes/footer.php' ?>
