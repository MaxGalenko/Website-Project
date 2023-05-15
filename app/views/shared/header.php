<!DOCTYPE html>
<html dir="<?=_('ltr')?>" lang="<?=_('en')?>">
<head>
  <title><?= $data ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar sticky-top">
    <a href='/Main/index'><img src="/images/PathlorLogo.png" id="logo"></a>
    <a class="navbar-brand" href="/Main/index" id="pathlor"><?=_('Pathlor Tech')?></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <?php if(!isset($_SESSION['user_id'])) {?>
                  <a class="nav-link" href="/User/index"><i style="font-size: 2rem; color: #FFFFFF; " name="log_in" class='bi-door-closed' title="<?=_('Log in')?>"></i></a>
                <?php } else { ?>
                  <a class="nav-link" href="/User/logout"><i style="font-size: 2rem; color: #FFFFFF; " class='bi-door-open' title="<?=_('Log out')?>"></i></a>
                <?php }
                ?>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['user_id'])) {?>
                  <a class="nav-link" href="/Orders/index"><i style="font-size: 2rem; color: #FFFFFF; " class='bi bi-file-earmark' title="<?=_('Orders')?>"></i></a>
                <?php } ?>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'customer') {?>
                  <a class="nav-link" href="/Profile/index"><i style="font-size: 2.2rem; color: #FFFFFF; " class='bi bi-person-lines-fill' title="<?=_('Profile')?>" id="profileStuff"></i></a>
                <?php } ?>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'customer') {?>
                  <a class="nav-link" href="/Cart/index"><i style="font-size: 2.1rem; color: #FFFFFF; " class='bi bi-cart3' title="<?=_('Cart')?>"></i></a>
                <?php } ?>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {?>
                  <a class="nav-link" href="/Product/create"><i style="font-size: 2rem; color: #FFFFFF; " class='bi bi-plus-square' title="<?=_('Post Product')?>"></i></a>
                <?php } ?>
        </li>
      </ul>
      <form action="/Main/search/" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_term">
        <button class="btn btn-outline-light" type="submit" name="search"><?= _('Search') ?></button>
      </form>
      <a href="?lang=fr_CA" class="btn btn-outline-light">FR</a>
      <a href="?lang=en" class="btn btn-outline-light">EN</a>
    </div>
  </nav>