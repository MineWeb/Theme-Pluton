<div class="top container">
  <p><i class="fa fa-users scolor"></i> Il y a <label class="scolor"><?= $server_infos['GET_PLAYER_COUNT'] ?></label> joueurs en ligne. <span>

    <?php if(!$isConnected){ ?>
    <i class="fa fa-arrow-right scolor"></i> <?= $theme_config['ip'] ?></span></p>
    <?php }else{ ?>
      <a href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => false)); ?>"><i class="fa fa-user white bd-r-10 hcolor"></i></a>
      <a href="#notifications_modal" onclick="notification.markAllAsSeen(2)"><span class="notification-indicator"></span><i class="fa fa-bell white bd-r-10 hcolor"></i></a>
      <?php if($Permissions->can('ACCESS_DASHBOARD')) { ?>
        <a href="<?= $this->Html->url(array('controller' => 'admin', 'action' => 'index', 'plugin' => false, 'admin' => true)) ?>"><i class="fa fa-cogs white bd-r-10 hcolor"></i></a>
      <?php } ?>
      <a href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => false)) ?>"><i class="fa fa-sign-out white hcolor"></i></a>
      <?php } ?>
</div>
