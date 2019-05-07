(function($) {

    var form = $("#signup-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            nome: { required: true, },
            telefone: { required: true, },
            email: { required: true, email : true },
            cpf: { required: true, },
            funcao: { required: true, },
            data: { required: true, },
            peso: { required: true, },
            altura: { required: true, },
            pressao: { required: true, },
            nivel_pressao: { required: true, },
            glicose: { required: true, },
            nivel_glicose: { required: true, },
            temperatura: { required: true, },
            nivel_temperatura: { required: true, },
            estressado: { required: true, },       
            triste: { required: true, },
            dor_dente: { required: true, },
            dor_cabeca: { required: true, },
            dor_corpo: { required: true, },
            conjuntivite: { required: true, },
            escoriacao: { required: true, },
            tratamento: { required: true, },
            antibio: { required: true, },
            tarjapreta: { required: true, },
            alcool: { required: true, },
            drogas: { required: true, },
            atendimento: { required: true, }
        },
        messages : {
            nivel_pressao: "Item Obrigatório",
            nivel_glicose: "Item Obrigatório",
            nivel_temperatura: "Item Obrigatório",
            estressado: "Item Obrigatório",
            triste: "Item Obrigatório",
            dor_dente: "Item Obrigatório",
            dor_cabeca: "Item Obrigatório",
            dor_corpo: "Item Obrigatório",
            conjuntivite: "Item Obrigatório",
            escoriacao: "Item Obrigatório",
            tratamento: "Item Obrigatório",
            antibio: "Item Obrigatório",
            tarjapreta: "Item Obrigatório",
            alcool: "Item Obrigatório",
            drogas: "Item Obrigatório",
            atendimento: "Item Obrigatório",
            estressado: "Item Obrigatório!",
            email: {
                email: 'Email Inválido <i class="zmdi zmdi-info"></i>'
            }
        },
        onfocusout: function(element) {
            $(element).valid();
        },
    });
    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        labels: {
            previous: 'Voltar',
            next: 'Próximo',
            finish: 'Enviar',
            current: ''
        },
        titleTemplate: '<div class="title"><span class="number">#index#</span>#title#</div>',
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
             //console.log(form.steps("getCurrentIndex"));
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            //console.log("getCurrentIndex");
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            //alert('Sumited');
            var form = $(this);
            form.submit();
        },
        // onInit : function (event, currentIndex) {
        //     event.append('demo');
        // }
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });


    $.dobPicker({
        daySelector: '#expiry_date',
        monthSelector: '#expiry_month',
        yearSelector: '#expiry_year',
        dayDefault: 'DD',
        yearDefault: 'YYYY',
        minimumAge: 0,
        maximumAge: 120
    });

    $('#password').pwstrength();

    $('#button').click(function () {
        $("input[type='file']").trigger('click');
    })
    
    $("input[type='file']").change(function () {
        $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
    })

})(jQuery);