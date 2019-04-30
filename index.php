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
                        <div class="form-radio">
                            <label for="payment_type">Payment Type</label>
                            <div class="form-radio-flex">
                                <input type="radio" name="payment_type" id="payment_visa" value="payment_visa" checked="checked" />
                                <label for="payment_visa"><img src="images/icon-visa.png" alt=""></label>
    
                                <input type="radio" name="payment_type" id="payment_master" value="payment_master" />
                                <label for="payment_master"><img src="images/icon-master.png" alt=""></label>
    
                                <input type="radio" name="payment_type" id="payment_paypal" value="payment_paypal" />
                                <label for="payment_paypal"><img src="images/icon-paypal.png" alt=""></label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="credit_card" class="form-label">Credit Card</label>
                                <input type="text" name="credit_card" id="credit_card" />
                            </div>
                            <div class="form-group">
                                <label for="cvc" class="form-label">CVC</label>
                                <input type="text" name="cvc" id="cvc" />
                            </div>
                        </div>
                        <div class="form-date">
                            <label for="expiry_date">Expiration Date</label>
                            <div class="form-flex">
                                <div class="form-date-item">
                                    <select id="expiry_date" name="expiry_date"></select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                                <div class="form-date-item">
                                    <select id="expiry_year" name="expiry_year"></select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name_of_card" class="form-label">Name of card</label>
                            <input type="text" name="name_of_card" id="name_of_card" />
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