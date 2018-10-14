<footer>
  <div class="container">

        <div class="row">
            <div class="col-lg-4 have-border">
              <img src="<?= $theme_config['menu_logo'] ?>" alt="">
              <p class="white">
                <br>
                <?= $theme_config['footer-text'] ?>
              </p>
            </div>
            <div class="col-lg-4 have-border">
              <?php
              if(!empty($youtube_link)) {
              ?>

              <div class="youtube">
                <a href="<?= $youtube_link; ?>" class="none" target="_blank">
                  <div class="social__yt"><i class="fa fa-youtube" id="logo__social"></i></div>
                  <div class="title__social">Youtube</div>
                  <div class="desc__social">Retrouvez nous sur youtube</div>
                </a>
              </div>

              <?php
              }
              if(!empty($twitter_link)) {
                ?>
                <div class="twitter">
                  <a href="<?= $twitter_link; ?>" class="none" target="_blank">
                    <div class="social__twt"><i class="fa fa-twitter" id="logo__social"></i></div>
                    <div class="title__social">Twitter</div>
                    <div class="desc__social">Retrouvez nous sur twitter</div>
                  </a>
                </div>
                <?php
              }
              if(!empty($facebook_link)) {
                ?>
                <div class="fb">
                  <a href="<?= $facebook_link; ?>" class="none" target="_blank">
                    <div class="social__fb"><i class="fa fa-facebook" id="logo__social"></i></div>
                    <div class="title__social">Facebook</div>
                    <div class="desc__social">Retrouvez nous sur facebook</div>
                  </a>
                </div>
                <?php
              }

              if(!empty($skype_link)){
              ?>
              <div class="skype" style="opacity:0;">
                <a href="#" class="none">
                  <div class="social__skype"><i class="fa fa-skype" id="logo__social"></i></div>
                  <div class="title__social">Skype</div>
                  <div class="desc__social">Retrouvez nous sur skype</div>
                </a>
              </div>
              <?php } ?>

            </div>
            <div class="col-lg-4 white">
              <h4><span class="scolor">MEILLEURS</span> VOTEURS</h4><br>


              <?php if($EyPlugin->isInstalled('eywek.vote')) {
                  $users_vote = ClassRegistry::init('Vote.Vote')->find('all', [
                      'fields' => ['username', 'COUNT(id) AS count'],
                      'conditions' => ['created LIKE' => date('Y') . '-' . date('m') . '-%'],
                      'order' => 'count DESC',
                      'group' => 'username',
                      'limit' => 3
                  ]);
                  ?>
                  <ul>

                  <?php $i_cl = 0;foreach($users_vote as $userv): $i_cl++; ?>
                      <div style="margin-left:-18%;">
                        <div class="player-skin col-lg-2">
                            <img src='<?= $this->Html->url(['controller' => 'API', 'action' => 'get_head_skin', 'plugin' => false, $userv['Vote']['username'], 35]); ?>' class='img-rounded' alt=''>
                        </div>
                        <div class="player-info col-lg-10">
                            <strong class="player-name" style="text-transform: uppercase;"><?= $userv['Vote']['username']; ?></strong>
                            <div class="votes"><?= $userv[0]['count']; ?> vote<?php if($userv[0]['count'] == 1){ ?> <?php }else{ ?>s<?php }?></div>
                        </div>
                      </div>
                  <?php endforeach; ?>
              </ul>
              <?php } else { ?>
              <div class="alert alert-danger">
                  <b>Erreur</b>: Information indisponible
              </div>
              <?php } ?>
            </div>
        </div>
  </div>
</footer>
<div class="container white" style="padding:15px; text-transform:uppercase;">
   <b>Propulsé par <a href="http://mineweb.org/" class="color hcolor footer-a">Mineweb</a> | Thème Pluton développé par <a href="https://tronai.fr" class="color hcolor footer-a">Tronai</a>.</b>

</div>
