<div class="container">
  <h1><?= $Lang->get('MAINTENANCE__TITLE') ?></h1>

<h3><?= $msg ?></h3>
<?php if($theme_config['compteur'] == "true"){ ?>
  <script>
  function getTimeRemaining(endtime) {
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor((t / 1000) % 60);
      var minutes = Math.floor((t / 1000 / 60) % 60);
      var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
      var days = Math.floor(t / (1000 * 60 * 60 * 24));
      return {
          'total': t,
          'days': days,
          'hours': ("0" + hours).slice(-2),
          'minutes': ("0" + minutes).slice(-2),
          'seconds': ("0" + seconds).slice(-2),
          'odd': seconds % 2 === 0
      };
  }
  window.setInterval(function() {
      var time = getTimeRemaining(<?= '"'.$theme_config['mois'].' '.$theme_config['day'].' '.$theme_config['years'].' '.$theme_config['hour'].' GMT+0200"' ?>);
      var string = "";
      if (time.days > 0) {
          string += time.days + " <small>jour" + (time.days > 1 ? "s" : "") + "</small> ";
      }
      if (time.days > 0 || time.hours > 0) {
          string += time.hours + " <small>heure" + (time.hours > 1 ? "s" : "") + "</small> ";
      }
      if (time.days > 0 || time.hours > 0 || time.minutes > 0) {
          string += time.minutes + " <small>minute" + (time.minutes > 1 ? "s" : "") + "</small> ";
      }
      if (time.days > 0 || time.hours > 0 || time.minutes > 0 || time.seconds > 0) {
          string += time.seconds + " <small>seconde" + (time.seconds > 1 ? "s" : "") + "</small>";
      } else {
          string = '<a href="/">Actualiser la page</a>';
      }
      document.getElementsByClassName('countdown')[0].innerHTML = "" + string + "";
  }, 1000);</script>


  <h2><div class="countdown"></div></h2>

  <?php } ?>

  <style media="screen">
    footer{
      position: absolute;
      bottom: 0;
      width: 100%;
    }
  </style>
</div>
</div>
