<!DOCTYPE html>
<html lang="pt-BR">
<!-- Content by header.php -->
<?php include("view/header.php");
?>
<body>
<!-- Contet by topmenu.php-->
<?php include("view/topmenu.php");?>
  <div class="container">
    <div class="section">
        <?php require './appController/AppController.php';
        $app = new AppController();
        $app->getUrlRoute();
        ?>
    </div>
  </div>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">

        <div class="col s12 m12">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">PHP - Playground</h5>

            <p class="center light">Vardomps aqui!.</p>
              <div class="row center">
                <?php var_dump($_GET); ?>
              </div>

          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>
  <!-- content by footer.php-->
  <?php include ("view/footer.php"); ?>
  </body>
</html>
