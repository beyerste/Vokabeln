<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('/');?>">home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Konfiguration <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('sprache/');?>">Sprachen</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo site_url('buecher/');?>">Bücher</a></li>
            <li><a href="<?php echo site_url('kapitel/');?>">Kapitel</a></li>
            <li><a href="<?php echo site_url('unterkapitel/');?>">Unterkapitel</a></li>
            <li role="separator" class="divider"></li>            
            <li><a href="#">Vokabeln</a></li>
            <li role="separator" class="divider"></li>            
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>

  </div>
</nav>