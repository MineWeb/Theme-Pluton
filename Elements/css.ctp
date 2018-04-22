<style media="screen">
  .color, .page-h2 {color:<?= $theme_config['color']; ?>;}
  .hcolor:hover{color:<?= $theme_config['color']; ?>;}

  .bg-color{background-color: <?= $theme_config['color'] ?>}
  .scolor{color:<?= $theme_config['scolor'] ?>;}
    .hscolor:hover{color:<?= $theme_config['scolor'] ?>;}
  .scolorbg{background:<?= $theme_config['scolor'] ?>;}
  .panel-pluton,  #panel-head, {background-color: <?= $theme_config['color']; ?>;}
  .panel-title, #shop-panel{background: <?= $theme_config['color'] ?>;}
   .dropdown-menu{
    border-bottom:4px solid <?= $theme_config['color'] ?>;
  }

  .navbar, .carousel{
    border-bottom: 4px solid <?= $theme_config['scolor'] ?>
  }
  footer{
    border-top:4px solid <?= $theme_config['scolor'] ?>;
  }
  #active{
    color:white;
    background-color: <?= $theme_config['color'] ?>;
    border-radius: 3.5px;
  }

.btn-danger{
  border-bottom: <?= $theme_config['color'] ?> solid 3px;
  transition-duration: 0.3s;
}

.btn-danger:hover{
  border:0px;
}
    <?php if($isConnected){ ?>
      @media (min-width: 1200px) {.dd-member{display:none;}}
      <?php } ?>

      #loader {
       position: fixed;
       top: 0;
       left: 0;
       width: 100%;
       height: 100%;
       background-color: #111111;
        background-image: url(<?= $theme_config['slider_logo'] ?>);
       z-index: 1000;
       background-repeat: no-repeat;
       background-position: center center;
      }
</style>
<script type="text/javascript">
$(function($){
  $('#loader').fadeOut(1500);
}

)
</script>
