<?php 

require("../config/conexao.php");

$sql = mysqli_query($conexao, "SELECT * FROM registros") or die( mysqli_error($conexao));
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
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Utilize o campo de "Buscar" para filtrar os registros
                    </p>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                        <th>Foto</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Data do Embarque</th>
                        <th>Status</th>
                        <th>Ações</th>
                        </tr>
                      </thead>

                      <tbody>
                    <?php
                        if($total > 0) {
                        do {
                    ?>  
                      <tr>
                        <td align="center">
                            <ul class="list-inline">
                              <li>
                                <img src="imagens/perfil/<?=$linha['foto']?>" class="avatar" alt="<?=$linha['nome']?>">
                              </li>
                            </ul>
                        </td>
                          <td><?=$linha['nome']?></td>
                          <td><?=$linha['telefone']?></td>
                          <td><?=$linha['data']?></td>
                          <td><?=$linha['status']?></td>
                          <td><a href="javascript:;">Editar Registro</a></td>
                        </tr>
                        <?php
              }while($linha = mysqli_fetch_assoc($sql));
            }
            ?>
                        <!-- <tr>
                        <td align="center">
                            <ul class="list-inline">
                              <li>
                                <img src="imagens/perfil/perfil.jpg" class="avatar" alt="Avatar">
                              </li>
                            </ul>
                        </td>
                          <td>Jean</td>
                          <td>(21) 99209-5364</td>
                          <td>06/06/2019</td>
                          <td>Verde</td>
                          <td><a href="javascript:;">Editar Registro</a></td>
                        </tr> -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php include('build/template_partes/footer.php'); ?>