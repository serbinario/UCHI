
$(document).ready(function() {
    $('.form-horizontal').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            'eescolabundle_funcoes[idInstituicao]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_funcoes[nomeFuncao]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            }
        }
    });
});
