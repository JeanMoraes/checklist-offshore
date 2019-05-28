          
          <!-- get header and sidebar -->
          <?php include ('build/template_partes/header.php');  ?>
          <?php include ('build/template_partes/navigation.php');  ?>

          <?php
          require("../config/conexao.php");

          # Listando Registros Verdes
          $sql_verde = mysqli_query($conexao, "SELECT * FROM registros WHERE status = 'verde' ORDER BY id DESC LIMIT 5") or die( mysqli_error($conexao));
          $linha_verde = mysqli_fetch_assoc($sql_verde);
          $total_verde = mysqli_num_rows($sql_verde);

          # Listando Registros Amarelos
          $sql_amarelo = mysqli_query($conexao, "SELECT * FROM registros WHERE status = 'amarelo' ORDER BY id DESC LIMIT 5") or die( mysqli_error($conexao));
          $linha_amarelo = mysqli_fetch_assoc($sql_amarelo);
          $total_amarelo = mysqli_num_rows($sql_amarelo);

          # Listando Registros Vermelhos
          $sql_vermelho = mysqli_query($conexao, "SELECT * FROM registros WHERE status = 'vermelho' ORDER BY id DESC LIMIT 5") or die( mysqli_error($conexao));
          $linha_vermelho = mysqli_fetch_assoc($sql_vermelho);
          $total_vermelho = mysqli_num_rows($sql_vermelho);

          ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Senha <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="senha" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Nível de Acesso
                          <br>
                          <small class="text-navy">Normal Bootstrap elements</small>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" checked name="iCheck"> Monitor
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="iCheck"> Administrador
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                      </div>

                    </form>
                    
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- /page content -->

        <?php include('build/template_partes/footer.php'); ?>