<?php
$form_input = array('title' => $Lang->get('THEME__UPLOAD_LOGO'));

if(isset($config['logo']) && $config['logo']) {
  $form_input['img'] = $config['logo'];
  $form_input['filename'] = 'theme_logo.png';
}


?>
<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $Lang->get('THEME__CUSTOMIZATION') ?></h3><span class="pull-right">Tronai</span>
        </div>
        <div class="box-body">



          <div class="tabbable">
            <ul class="nav nav-tabs">
             <li class="active"><a href="#tab1" data-toggle="tab">Option General</a></li>
             <li><a href="#tab2" data-toggle="tab">Maintenance</a></li>
             <li><a href="#tab3" data-toggle="tab">Menu</a></li>
             </ul>
             <form method="post" enctype="multipart/form-data" data-ajax="false">
          <div class="tab-content">
            <div class="tab-pane active" id="tab1">
              <br>
               <div class="form-group">
                 <label>General</label>

                 <table class="table">
                   <tr>
                     <td>Couleur Principale</td>
                     <td><i>Par default : #dc4f4f</i></td>
                     <td><input type="text" class="form-control" name="color" value="<?= $theme_config['color'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Couleur Secondaire</td>
                     <td><i>Par default : #ff5858</i></td>
                     <td><input type="text" class="form-control" name="scolor" value="<?= $theme_config['scolor'] ?>"></td>
                   </tr>
                   <tr>
                     <td><?= $Lang->get('THEME__FAVICON_URL') ?></td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="favicon_url" value="<?= $theme_config['favicon_url'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Text sur le footer</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="footer-text" value="<?= $theme_config['footer-text'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Slider</td>
                     <td><i>Par default : oui</i></td>
                     <td>
                       <select name="slider" class="form-control">
                          <option value="true"<?= ($config['slider'] == "true") ? ' selected' : '' ?>>Oui</option>
                          <option value="false"<?= ($config['slider'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>
                     </td>
                   </tr>
                   <tr>
                     <td>Logo Menu</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="menu_logo" value="<?= $theme_config['menu_logo'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Logo Slider</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="slider_logo" value="<?= $theme_config['slider_logo'] ?>"></td>
                   </tr>
                   <tr>
                     <td>IP</td>
                     <td><i>Par default : 127.0.0.1</i></td>
                     <td>
                       <input type="text" class="form-control" name="ip" value="<?= $theme_config['ip'] ?>"></td>
                     </td>
                   </tr>
                   <tr>
                     <td>Message Accueil</td>
                     <td><i>Par default : #</i></td>
                     <td>
                       <input type="text" class="form-control" name="home_accueil" value="<?= $theme_config['home_accueil'] ?>"></td>
                     </td>
                   </tr>
                   <tr>
                     <td>Texte Bouton Accueil</td>
                     <td><i>Par default : #</i></td>
                     <td>
                       <input type="text" class="form-control" name="home_accueil_text" value="<?= $theme_config['home_accueil_text'] ?>"></td>
                     </td>
                   </tr>
                   <tr>
                     <td>Lien Bouton Accueil</td>
                     <td><i>Par default : #</i></td>
                     <td>
                       <input type="text" class="form-control" name="home_accueil_lien" value="<?= $theme_config['home_accueil_lien'] ?>"></td>
                     </td>
                   </tr>
                 </table>
               </div>
            </div>

            <!-- Section 2 -->
            <div class="tab-pane" id="tab2">
              <br>

              <div class="form-group">
                <label>Maintenance</label>

                <table class="table">

                  <tr>
                    <td>Compteur</td>
                    <td>
                      <select name="compteur" class="form-control">
                         <option value="true"<?= ($config['compteur'] == "true") ? ' selected' : '' ?>>Oui</option>
                         <option value="false"<?= ($config['compteur'] == "false") ? ' selected' : '' ?>>Non</option>
                       </select>
                    </td>
                  </tr>


                  <tr>
                    <td>Mois</td>
                    <td>
                      <select name="mois" class="form-control">
                         <option value="January"<?= ($config['mois'] == "January") ? ' selected' : '' ?>>January</option>
                         <option value="February"<?= ($config['mois'] == "February") ? ' selected' : '' ?>>February</option>
                         <option value="March"<?= ($config['mois'] == "March") ? ' selected' : '' ?>>March</option>
                         <option value="April"<?= ($config['mois'] == "April") ? ' selected' : '' ?>>April</option>
                         <option value="May"<?= ($config['mois'] == "May") ? ' selected' : '' ?>>May</option>
                         <option value="June"<?= ($config['mois'] == "June") ? ' selected' : '' ?>>June</option>
                         <option value="July"<?= ($config['mois'] == "July") ? ' selected' : '' ?>>July</option>
                         <option value="August"<?= ($config['mois'] == "August") ? ' selected' : '' ?>>August</option>
                         <option value="September"<?= ($config['mois'] == "September") ? ' selected' : '' ?>>September</option>
                         <option value="October"<?= ($config['mois'] == "October") ? ' selected' : '' ?>>October</option>
                         <option value="November"<?= ($config['mois'] == "November") ? ' selected' : '' ?>>November</option>
                         <option value="December"<?= ($config['mois'] == "December") ? ' selected' : '' ?>>December</option>
                       </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Jour</td>
                    <td><input type="text" class="form-control" name="day" value="<?= $theme_config['day'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Année</td>
                    <td><input type="text" class="form-control" name="years" value="<?= $theme_config['years'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Heure</td>
                    <td><input type="text" class="form-control" name="hour" value="<?= $theme_config['hour'] ?>" placeholder="15:00:00"></td>
                  </tr>


                </table>


              </div>
            </div>


            <!-- Section 3 -->
            <div class="tab-pane" id="tab3">
              <br>

              <div class="form-group">
                <label>Menu</label>

                <table class="table">
                  <tr>
                    <td>Top</td>
                    <td><i>Par default : oui</i></td>
                    <td>
                      <select name="top" class="form-control">
                         <option value="true"<?= ($config['top'] == "true") ? ' selected' : '' ?>>Oui</option>
                         <option value="false"<?= ($config['top'] == "false") ? ' selected' : '' ?>>Non</option>
                       </select>
                    </td>
                  </tr>

                  <tr>
                    <td>Menu</td>
                    <td><i>Par default : 1</i></td>
                    <td>
                      <select name="menu" class="form-control">
                         <option value="Menu 1"<?= ($config['menu'] == "1") ? ' selected' : '' ?>>Menu 1</option>
                         <option value="Menu 2"<?= ($config['menu'] == "2") ? ' selected' : '' ?>>Menu 2</option>
                       </select>
                    </td>
                  </tr>

                </table>
              </div>
            </div>




                            <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                <button class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>" type="button" class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>

            </form>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
