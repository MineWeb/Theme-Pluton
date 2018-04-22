
<?php if($theme_config['slider'] == "true"){ ?>
<div id="myCarousel" class=" respc head carousel slide transition-timer-carousel">
    <div class="carousel-inner">
        <?php if(!empty($search_slider)) { ?>
            <?php $i = 0; foreach ($search_slider as $k => $v) { ?>

            <div class="item<?php if($i == 0) { echo ' active'; } ?>">
                <img src="<?= $v['Slider']['url_img'] ?>" width="100%;" height="300px" class="home-carousel-image">
                <div class="carousel-caption" style="font-family: 'Russo One', sans-serif;">
                  <img src="<?= $theme_config['slider_logo'] ?>" class="home-carousel-logo" width="200%">
                    <h1>Bienvenue sur <br> <span class="color"><?= $website_name ?></span></h1>
                    <p><?= before_display($v['Slider']['subtitle']) ?></p>
                </div>
            </div>

            <?php $i++; } ?>
        <?php } else { ?>
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1905x420&text=1905x420');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1905x420&text=1905x420');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1905x420&text=1905x420');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
<?php } ?>
<!-- Information -->
<div class="home-information">
  <div class="container">
    <span class="home-information-span pull-left"><b><?= $theme_config['home_accueil'] ?></b></span> <a href="<?= $theme_config['home_accueil_lien'] ?>" class="btn btn-danger home-information-button pull-right"><?= $theme_config['home_accueil_text'] ?></a>
  </div>
</div>

<!--News -->


<div class="container"><br>
  <section class="news container">
    <div class="news-one">
      <div class="container">
        <?php
        if(!empty($search_news)) { $i = 0; foreach ($search_news as $news) {
          $i++;
          ?>

          <div class="news-all" style="width:100%;">
              <a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])); ?>"><h2 class="scolor"><?= $news['News']['title']; ?></h2></a>
              <span class="date theme-color-text"><?= $Lang->date($news['News']['created']); ?></span>
              <div class="texte"><p><?= $this->Text->truncate($news['News']['content'], 700, array('ellipsis' => '...', 'html' => true)); ?></p></div>
              <div class="likes">
                  <?= $news['News']['count_likes'] ?> <i class="fa fa-thumbs-up"></i>
              </div>
              <div class="commentaires">
                  <?= $news['News']['count_comments'] ?> <i class="fa fa-comments" aria-hidden="true"></i>
              </div>
              <a href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $news['News']['slug'])); ?>" class="btn btn-danger pull-right"><?= $Lang->get('NEWS__READ_MORE'); ?></a>
          </div>


        <?php  } ?>
        <?php } else { echo '<div class="alert alert-danger">'.$Lang->get('NEWS__NONE_PUBLISHED').'</div>'; } ?>

     </div>
   </div>
 </section>
</div>
<br><br>
