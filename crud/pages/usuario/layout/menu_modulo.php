            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-section -->
              <div class="page-section">
                <?= getflashdata() ?>
                <!-- grid row -->
                <div class="row">
                  <!-- grid column -->
                  <div class="col-lg-4">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Detalhes </h6><!-- .nav -->
                      <nav class="nav nav-tabs flex-column border-0">
                        <a href="<?= BASE_URL ?>/usuario/modulo" class="nav-link <?=  empty($detalhes) ? "active": "" ?>">Modulos</a> 
                        <a href="<?= BASE_URL ?>/usuario/modulo/menus" class="nav-link <?=   $detalhes == "menus" ? "active": "" ?>">Menus</a>
                      </nav><!-- /.nav -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->