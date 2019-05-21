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
                              <ul class="lista-detalhes-registros">
                                <li><i class="fa fa-calendar"></i> <strong> Data de Nascimento:</strong> <?=$linha['nascimento']?></li>
                                <li><i class="fa fa-phone"></i> <strong> Telefone:</strong> <?=$linha['telefone']?></li>
                                <li><i class="fa fa-envelope"></i> <strong> Email:</strong> <?=$linha['telefone']?></li>
                                <li> <strong>CPF:</strong> <?=$linha['telefone']?></li>
                                <li><i class="fa fa-calendar"></i> <strong>Data do Embarque:</strong> <?=$linha['data']?></li>
                                <li> <strong>Peso:</strong> <?=$linha['peso']?>Kg</li>
                                <li> <strong>Altura:</strong> <?=$linha['altura']?>m</li>
                                <li> <strong>ICM:</strong> <?=$linha['icm']?></li>
                                <li> <strong>Pressão:</strong> <?=$linha['pressao']?> | <?=$linha['nivel_pressao']?></li>
                                <li> <strong>Glicose:</strong> <?=$linha['glicose']?> mg/dl</li>
                                <li> <strong>Temperatura:</strong> <?=$linha['temperatura']?>ºC</li>
                                <li> <strong>Estressado:</strong> <?=$linha['estressado']?></li>
                                <li> <strong>Triste:</strong> <?=$linha['triste']?></li>
                                <li> <strong>Dor de Dente:</strong> <?=$linha['dor_dente']?></li>
                                <li> <strong>Dor de Cabeça:</strong> <?=$linha['dor_cabeca']?></li>
                                <li> <strong>Dor no Corpo:</strong> <?=$linha['dor_corpo']?></li>
                                <li> <strong>Conjuntivite:</strong> <?=$linha['conjuntivite']?></li>
                                <li> <strong>Escoriação:</strong> <?=$linha['escoriacao']?></li>
                                <li> <strong>Tratamento em Andamento:</strong> <?=$linha['tratamento']?></li>
                                <li> <strong>Antiótico ou Antiinflamatório:</strong> <?=$linha['antibio']?></li>
                                <li> <strong>Remédio Tarja Preta:</strong> <?=$linha['tarjapreta']?></li>
                                <li> <strong>Ingeriu Bebida Alcóolica:</strong> <?=$linha['alcool']?></li>
                                <li> <strong>Drogas Ilícitas:</strong> <?=$linha['drogas']?></li>
                                <li> <strong>Atendimento médico (últimos 30 dias):</strong> <?=$linha['atendimento']?></li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="imagens/perfil/<?=$linha['foto']?>" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a><?=$linha['status']?></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <button type="button" class="btn btn-md <?=$linha['btn_class']?>">
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