<?php if(current_user_can('administrator')): ?>

  <div class="container">
    <form id="interfaceTelescopeLesUsinesForm">
      <div class="row">
        <div class="col">
          <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1">Démarrage des moteurs</label>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col">
          <div class="btn-toolbar mb-3">
            <div class="btn-group mr-2 btn-group-sm">
              <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-fast-backward"></i></button>
              <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-step-backward"></i></button>
            </div>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" placeholder="Déclinaison" aria-label="Déclinaison" aria-describedby="d">
              <div class="input-group-append">
                <div class="input-group-text" id="d">°</div>
              </div>
            </div>
            <div class="btn-group ml-2 btn-group-sm">
              <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-step-forward"></i></button>
              <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-fast-forward"></i></button>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-1">
        <div class="col">
          <div class="btn-toolbar mb-3">
            <div class="btn-group mr-2 btn-group-sm">
              <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-fast-backward"></i></button>
              <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-step-backward"></i></button>
            </div>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" placeholder="Horaire" aria-label="Horaire" aria-describedby="h">
              <div class="input-group-append">
                <div class="input-group-text" id="h">°</div>
              </div>
            </div>
            <div class="btn-group ml-2 btn-group-sm">
              <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-step-forward"></i></button>
              <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-fast-forward"></i></button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <form>
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

  <h2>Vous devez disposer d'un compte habilité pour accéder à la gestion du télescope.</h2>

<?php endif; ?>