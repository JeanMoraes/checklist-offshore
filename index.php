<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="Jean Moraes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checklist Pré Embarque</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Preencha o Formulário Abaixo </h2>
            <form method="POST" id="signup-form" class="signup-form">
                <h3>
                    <span class="title_text">Identificação</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">
                    <div class="form-group">
                            <label for="foto" class="form-label">Escolha uma foto</label>
                            <div class="form-file">
                                <input type="file" name="foto" id="foto" class="custom-file-input" />
                                <span id='val'></span>
                                <span id='button'>Buscar</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome Completo" />
                        </div>
                        <div class="form-group">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" name="telefone" id="telefone" placeholder="(ddd) _____-____" />
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" name="cpf" id="cpf" placeholder="___.___.___-__" />
                        </div>
                        <div class="form-group">
                            <label for="funcao" class="form-label">Função</label>
                            <input type="text" name="funcao" id="funcao" placeholder="" />
                        </div>
                        <div class="form-group">
                            <label for="funcao" class="form-label">Data do Embarque ou início do serviço</label>
                            <input type="text" name="funcao" id="funcao" placeholder="" />
                        </div>
                    </div>
                    <div class="fieldset-footer">
                        <span>Etapa 1 de 3</span>
                    </div>
                </fieldset>

                <h3>
                    <span class="title_text">Informações de Saúde</span>
                </h3>
                <fieldset>

                    <div class="fieldset-content">
                        
                        <div class="form-group">
                            <label for="peso" class="form-label">Peso</label>
                            <input type="text" name="peso" id="peso" placeholder="Peso em Kg" />
                        </div>

                        <div class="form-group">
                            <label for="altura" class="form-label">Altura</label>
                            <input type="text" name="altura" id="altura" placeholder="Altura em m" />
                        </div>

                        <div class="form-group">
                            <label for="pressao" class="form-label">Pressão</label>
                            <input type="text" name="pressao" id="pressao" placeholder="Aferir até um dia antes de preencher" />
                        </div>

                        <div class="form-group">
                            <label for="glicose" class="form-label">Glicose</label>
                            <input type="text" name="glicose" id="glicose" placeholder="Última avaliacao" />
                        </div>

                        <div class="form-group">
                            <label for="temperatura" class="form-label">Temperatura Corporal</label>
                            <input type="text" name="temperatura" id="temperatura" placeholder="Medida em Celsius (ºC)" />
                        </div>

                        <div class="form-select">
                            <label for="estressado" class="form-label">Estressado</label>
                            <select name="estressado" id="estressado">
                                <option value="">Escolha uma opção</option>
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>
                        </div>

                        <div class="form-select">
                            <label for="triste" class="form-label">Triste</label>
                            <select name="triste" id="triste">
                                <option value="">Escolha uma opção</option>
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>
                        </div>

                        <div class="form-select">
                            <label for="dor_dente" class="form-label">Dor de Dente?</label>
                            <select name="dor_dente" id="dor_dente">
                                <option value="">Escolha uma opção</option>
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>
                        </div>

                        <div class="form-select">
                            <label for="dor_cabeca" class="form-label">Dor de Cabeça?</label>
                            <select name="dor_cabeca" id="dor_cabeca">
                                <option value="">Escolha uma opção</option>
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>
                        </div>
     
                    </div>

                    <div class="fieldset-footer">
                        <span>Etapa 2 de 3</span>
                    </div>

                </fieldset>

                <h3>
                    <span class="title_text">Informações de Saúde</span>
                </h3>
                <fieldset>
                    <div class="fieldset-content">

                    <div class="form-select">
                            <label for="dor_corpo" class="form-label">Dor em alguma parte do corpo?</label>
                            <select name="dor_corpo" id="dor_corpo">
                                <option value="">Escolha uma opção</option>
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>
                    </div>

                    <div class="form-select">
                        <label for="conjuntivite" class="form-label">Conjuntivite</label>
                        <select name="conjuntivite" id="conjuntivite">
                            <option value="">Escolha uma opção</option>
                            <option value="nao">Não</option>
                            <option value="sim">Sim</option>
                        </select>
                    </div>

                    <div class="form-select">
                        <label for="conjuntivite" class="form-label">Está com ferida ou escoriação no corpo</label>
                        <select name="conjuntivite" id="conjuntivite">
                            <option value="">Escolha uma opção</option>
                            <option value="nao">Não</option>
                            <option value="sim">Sim</option>
                        </select>
                    </div>

                    <div class="form-select">
                        <label for="tratamento" class="form-label">Algum tipo de tratamento em andamento (físico, emocional ou saúde)</label>
                        <select name="tratamento" id="tratamento">
                            <option value="">Escolha uma opção</option>
                            <option value="nao">Não</option>
                            <option value="sim">Sim</option>
                        </select>
                    </div>
                        
                    <div class="form-select">
                        <label for="antibio" class="form-label">Está tomando antinflamatório ou antibiótico?</label>
                        <select name="antibio" id="antibio">
                            <option value="">Escolha uma opção</option>
                            <option value="nao">Não</option>
                            <option value="sim">Sim</option>
                        </select>
                    </div>

                    <div class="form-select">
                        <label for="tarjapreta" class="form-label">Está tomando algum medicamento tarja preta?</label>
                        <select name="tarjapreta" id="tarjapreta">
                            <option value="">Escolha uma opção</option>
                            <option value="nao">Não</option>
                            <option value="sim">Sim</option>
                        </select>
                    </div>

                    <div class="form-select">
                        <label for="bebida" class="form-label">Ingeriu bebida alcóolica nas últimas 24 horas antes do serviço ou do embarque?</label>
                        <select name="bebida" id="bebida">
                            <option value="">Escolha uma opção</option>
                            <option value="nao">Não</option>
                            <option value="sim">Sim</option>
                        </select>
                    </div>

                    <div class="form-select">
                        <label for="drogas" class="form-label">Faz uso de drogas ilícitas?</label>
                        <select name="drogas" id="drogas">
                            <option value="">Escolha uma opção</option>
                            <option value="nao">Não</option>
                            <option value="sim">Sim</option>
                        </select>
                    </div>

                    <div class="form-select">
                        <label for="atendimento" class="form-label">Passou por algum atendimento médico nos últimos 30 dias?</label>
                        <select name="atendimento" id="atendimento">
                            <option value="">Escolha uma opção</option>
                            <option value="nao">Não</option>
                            <option value="sim">Sim</option>
                        </select>
                    </div>
                    
                    </div>

                    <div class="fieldset-footer">
                        <span>Etapa 3 de 3</span>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="vendor/minimalist-picker/dobpicker.js"></script>
    <script src="vendor/jquery.pwstrength/jquery.pwstrength.js"></script>
    <script src="js/main.js"></script>
</body>

</html>