<?php 

require("../config/conexao.php");

$id = $_GET["id"];
$sql = mysqli_query($conexao, "SELECT * FROM registros WHERE id = '$id'") or die( mysqli_error($conexao));
$linha = mysqli_fetch_assoc($sql);
$total = mysqli_num_rows($sql);

?>


<!-- get header and sidebar -->
<?php include ('build/template_partes/header.php');  ?>
<?php include ('build/template_partes/navigation.php');  ?>

<!-- page content -->
<div class="right_col" role="main">
       
        <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabela de Registros <small>Funcionários</small></h2>

                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?=$linha['funcao']?></i></h4>
                            <div class="left col-xs-7">
                              <h2><?=$linha['nome']?></h2>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-phone"></i> Telefone: <?=$linha['telefone']?></li>
                                <li><i class="fa fa-envelope"></i> Email: <?=$linha['telefone']?></li>
                                <li> CPF: <?=$linha['telefone']?></li>
                                <li> Data do Embarque: <?=$linha['data']?></li>
                                <li> Peso: <?=$linha['peso']?>Kg</li>
                                <li> Altura: <?=$linha['altura']?>m</li>
                                <li> ICM: <?=$linha['icm']?></li>
                                <li> Pressão: <?=$linha['pressao']?> | <?=$linha['nivel_pressao']?></li>
                                <li> Glicose: <?=$linha['glicose']?> | <?=$linha['nivel_glicose']?></li>
                                <li> Temperatura: <?=$linha['temperatura']?>ºC | <?=$linha['nivel_temperatura']?></li>
                                <li> Estressado: <?=$linha['estressado']?></li>
                                <li> Triste: <?=$linha['triste']?></li>
                                <li> Dor de Dente: <?=$linha['dor_dente']?></li>
                                <li> Dor de Cabeça: <?=$linha['dor_cabeca']?></li>
                                <li> Dor no Corpo: <?=$linha['dor_corpo']?></li>
                                <li> Conjuntivite: <?=$linha['conjuntivite']?></li>
                                <li> Escoriação: <?=$linha['escoriacao']?></li>
                                <li> Tratamento em Andamento: <?=$linha['tratamento']?></li>
                                <li> Antiótico ou Antiinflamatório: <?=$linha['antibio']?></li>
                                <li> Remédio Tarja Preta: <?=$linha['tarjapreta']?></li>
                                <li> Ingeriu Bebida Alcóolica: <?=$linha['alcool']?></li>
                                <li> Drogas Ilícitas: <?=$linha['drogas']?></li>
                                <li> Atendimento médico (últimos 30 dias): <?=$linha['atendimento']?></li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="imagens/perfil/<?=$linha['foto']?>" alt="" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a><?=$linha['status']?></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> Alterar Status (em breve)
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include('build/template_partes/footer.php'); ?>