<?php if(current_user_can('administrator')): ?>
  <!--IP des usines-->
  <!--<form action="http://78.206.32.41:8081/motors/goto/eqt/deg" enctype="multipart/form-data" type="POST">-->
  <!--ip chez Simon J-->
  <form id="interfaceTelescopeLesUsinesForm">
    <div class="row">
      <div class="col-xs-6">
          <div class="form-group">
            <label for="d">Axe de déclinaison</label>
            <input type="text" class="form-control" id="d" name="d" placeholder="Déclinaison">
          </div>
      </div>
      <div class="col-xs-6">
          <div class="form-group">
            <label for="h">Axe horaire</label>
            <input type="text" class="form-control" id="h" name="h" placeholder="horaire">
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="form-group">
          <button type="submit" name="submit" id="submit" class="btn btn-default">Déplacer le téléscope</button>
        </div>
      </div>
    </div>
  </form>

<?php else: ?>

  <h2>Vous devez posséder un compte administrateur pour voir ce contenu.</h2>

<?php endif; ?>