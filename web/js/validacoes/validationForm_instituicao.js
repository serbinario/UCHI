
$(document).ready(function() {

    $('.form-horizontal').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            'eescolabundle_instituicao[nomeInstituicao]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_instituicao[nomeResponsavelInstituicao]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_instituicao[cepInstituicao]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_instituicao[emailInstituicao]': {
                validators: {
                    emailAddress: {
                        message: 'O e-mail informado não é válido'
                    }
                }
            }
        }
    });
   
});
