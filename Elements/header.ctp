<div class="navbar-main">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= $this->Html->url('/') ?>"><h2 class="white navbar-title"><img src="<?= $theme_config['menu_logo'] ?>"></h2></a>
              </div>

              <div id="navbar" class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav navbar-right">
                    <li class="li-nav"><a href="<?= $this->Html->url('/') ?>"><span class="white hscolor">ACCUEIL</span></a></li>
                    <?php
                    if(!empty($nav)) {
                      $i = 0;
                      foreach ($nav as $key => $value) { ?>
                        <?php if(empty($value['Navbar']['submenu'])) { ?>
                          <li class="li-nav">
                              <a href="<?= $value['Navbar']['url'] ?>">
                                <span class="white hscolor">
                                  <?= $value['Navbar']['name'] ?>
                                </span>
                              </a>
                          </li>
                        <?php } else { ?>
                          <li class="dropdown">
                            <a href="#" id="menu-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="white hcolor"><?= $value['Navbar']['name'] ?> <span class="caret"></span></span></a>
                            <ul class="dropdown-menu" role="menu">
                            <?php
                            $submenu = json_decode($value['Navbar']['submenu']);
                            foreach ($submenu as $k => $v) {
                            ?>
                              <li><a href="<?= rawurldecode(rawurldecode($v)) ?>"<?= ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '' ?> id="navbar-dropdown-item"><?= rawurldecode(str_replace('+', ' ', $k)) ?></a></li>
                            <?php } ?>
                            </ul>
                          </li>
                        <?php } ?>
                        <?php
                          $i++;
                        }
                      } ?>

                      <li class="dropdown dd-member">
                        <a href="#" id="menu-dropdown" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="white hcolor">Membre <span class="caret"></span></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <?php if(!$isConnected){ ?>
                              <li><a href="#login" id="navbar-dropdown-item">Connexion</a></li>
                              <li><a href="#register" id="navbar-dropdown-item">Inscription</a></li>
                          <?php }else{ ?>
                            <li><a href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => false)); ?>" id="navbar-dropdown-item"><?= $Lang->get('USER__PROFILE'); ?></a></li>
                            <li><a href="#notifications_modal" onclick="notification.markAllAsSeen(2)" id="navbar-dropdown-item"><span class="notification-indicator"></span>Notification</a></li>
                            <?php if($Permissions->can('ACCESS_DASHBOARD')) { ?>
                            <li><a href="<?= $this->Html->url(array('controller' => 'admin', 'action' => 'index', 'plugin' => false, 'admin' => true)) ?>" id="navbar-dropdown-item"><?= $Lang->get('GLOBAL__ADMIN_PANEL') ?></a></li>
                            <?php } ?>
                            <li><a href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => false)) ?>" id="navbar-dropdown-item"><?= $Lang->get('USER__LOGOUT') ?></a></li>
                          <?php } ?>
                        </ul>
                      </li>
                  </ul>
              </div>
            </div>
        </div>
    </nav>
</div>
