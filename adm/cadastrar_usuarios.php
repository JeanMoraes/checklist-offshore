          
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
              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Status Verde <small>Últimos Registros</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                    if($total_verde > 0) {
                    do {
                    ?>  
                    <article class="media event">
                      <a class="pull-left border-aero profile_thumb" style="background-image: url('imagens/perfil/<?=$linha_verde['foto']?>'); background-size: cover;">
                        
                      </a>
                      <div class="media-body">
                        <a class="title" href="#"><?=$linha_verde['nome']?></a>
                        <p><strong>Função:</strong> <?=$linha_verde['funcao']?></p>
                        <p><strong>Telefone:</strong> <?=$linha_verde['telefone']?></p>
                        <?php echo "<a href='registro-detalhes.php?id=" . $linha_verde['id'] . "'>Detalhes</a>"; ?>
                      </div>
                    </article>
                    <?php
                       }while($linha_verde = mysqli_fetch_assoc($sql_verde));
                       }
                     ?>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Status Amarelo <small>Últimos Registros</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php
                    if($total_amarelo > 0) {
                    do {
                    ?>  
                    <article class="media event">
                      <a class="pull-left border-aero profile_thumb" style="background-image: url('imagens/perfil/<?=$linha_amarelo['foto']?>'); background-size: cover;">
                        
                      </a>
                      <div class="media-body">
                        <a class="title" href="#"><?=$linha_amarelo['nome']?></a>
                        <p><strong>Função:</strong> <?=$linha_amarelo['funcao']?></p>
                        <p><strong>Telefone:</strong> <?=$linha_amarelo['telefone']?></p>
                        <?php echo "<a href='registro-detalhes.php?id=" . $linha_amarelo['id'] . "'>Detalhes</a>"; ?>
                      </div>
                    </article>
                    <?php
                       }while($linha_amarelo = mysqli_fetch_assoc($sql_amarelo));
                       }
                     ?>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Status Vermelho <small>Últimos Registros</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <?php
                    if($total_vermelho > 0) {
                    do {
                    ?>  
                    <article class="media event">
                      <a class="pull-left border-aero profile_thumb" style="background-image: url('imagens/perfil/<?=$linha_vermelho['foto']?>'); background-size: cover;">
                        
                      </a>
                      <div class="media-body">
                        <a class="title" href="#"><?=$linha_vermelho['nome']?></a>
                        <p><strong>Função:</strong> <?=$linha_vermelho['funcao']?></p>
                        <p><strong>Telefone:</strong> <?=$linha_vermelho['telefone']?></p>
                        <?php echo "<a href='registro-detalhes.php?id=" . $linha_vermelho['id'] . "'>Detalhes</a>"; ?>
                      </div>
                    </article>
                    <?php
                       }while($linha_vermelho = mysqli_fetch_assoc($sql_vermelho));
                       }
                     ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include('build/template_partes/footer.php'); ?>