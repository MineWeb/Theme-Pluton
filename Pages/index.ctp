<div class="container">
  <br><br>
  <div class="panel panel-pluton">
      <div class="panel-heading"><?= before_display($page['title']) ?><span class="pull-right"><small>Le <?= $Lang->date($page['updated']) ?></small></span></div>
      <div class="panel-body">
          <?= $page['content'] ?>
      </div>
  </div>

</div>
