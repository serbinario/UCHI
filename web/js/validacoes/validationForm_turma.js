
$(document).ready(function() {

    $('.form-horizontal').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            'escolabundle_turmas[idEscola]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_turmas[idSeries]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_turmas[nomeTurmas]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_turmas[capacidadeDeAlunos]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_turmas[idTipoTurmas]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_turmas[idTurno]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_turmas[horarioInicial]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_turmas[horarioFinal]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_turmas[intervaloInicial]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_turmas[intervaloFinal]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            }
        }
    });
   
});
