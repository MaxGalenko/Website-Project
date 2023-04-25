<!DOCTYPE html>
<html dir="<?=_('ltr')?>" lang="<?=_('en')?>">
<head>
  <title><?= $data ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/HeaderFooter.css">
</head>

<body>
  <div class="container">
    <nav class="navbar fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href='/Main/index'><img src="/images/PathlorLogo.png" id="logo"></a>
          <a class="navbar-brand" href="/Main/index" id="pathlor"><?=_('Pathlor Tech')?></a>
        </div>
        <a href="/User/index">Sign in</a>
        <form class="navbar-form navbar-left" action="/action_page.php">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" id="searchBox">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit" id="searchButton">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    </nav>
  </div>
  
    <!-- <div class='container'>
        <nav class="navbar fixed-top" style="background-color: #324A5F;">
            <div class="container-fluid">
              <a href='/Main/index'><img src="/images/cliquebait.png" style="max-width: 200px;" /></a>

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li>
                        <?php if (!isset($_SESSION['user_id'])) {?>
                            <a class="nav-link" href="/User/index"><i style="font-size: 2rem;" class='bi-door-closed' title="Log in"></i></a>
                        <?php } else { ?>
                            <a class="nav-link" href="/User/logout"><i style="font-size: 2rem;" class='bi-door-open' title='Log out'></i></a>
                        <?php }
                        ?>
                    </li>

                  <li class="nav-item">
                    <a class="nav-link" href='/Publication/create'><i style="font-size: 2rem;" class='bi-plus-square' title='New publication'></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='/Profile/index'><i style="font-size: 2rem;" class='bi-file-earmark-person' title='My Profile'></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href='/Follow/index'><i style="font-size: 2rem;" class='bi-people-fill' title='Following'></i></a>
                  </li>
                </ul>

                <?php
                $url = $_SERVER['REQUEST_URI'];
                $regEx = "/^\/Follow\/(index||search).*$/";
                if(isset($_SESSION['profile_id']) && preg_match($regEx, $url) == 1){ ?>
                    <form class="d-flex" action="/Follow/search" method="get" role="search">
                      <input class="form-control me-2" type="search" name='search_term' placeholder="Search Following" aria-label="Search">
                      <button class="btn btn-outline-primary" type="submit" value="search">
                        <i class="bi-search"></i>
                      </button>
                    </form>
                <?php } else{ ?>
                    <form class="navbar-form navbar-left" action="/action_page.php">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                <?php } ?>
              </div>
            </div>
        </nav> -->