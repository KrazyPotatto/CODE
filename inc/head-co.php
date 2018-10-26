<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CODE</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if($page == "Home") { ?>class="active"<?php } ?>><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li <?php if($page == "Missions") { ?>class="active"<?php } ?>><a href="level.php">Missions</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="php/logout.php">Log out</a></li>
      </ul>
    </div>
  </div>
</nav>