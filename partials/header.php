<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Web developer à Bruxelles - PHP Javascript Laravel">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= isset($title) ? $title : 'Gianni 3G - web developer Bruxelles'; ?></title>

    <!-- Bootstrap core CSS 
    <link href="<?= WEBROOT; ?>/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="<?= WEBROOT; ?>/css/style.css" rel="stylesheet">
    
    


  </head>

  <body>

    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?= WEBROOT; ?>">Gianni 3G</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="<?=WEBROOT; ?>#apropos">A propos</a></li>
              <li><a href="<?=WEBROOT; ?>#realisations">Mes réalisations</a></li>
              <li><a href="<?=WEBROOT; ?>#contact">Contact</a></li>
            </ul>
        </div>
    </div> 
  

        
        <?= flash(); ?>
    