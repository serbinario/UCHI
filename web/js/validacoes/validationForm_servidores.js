
$(document).ready(function() {

    $('.form-horizontal').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            'escolabundle_servidor[cgm]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_servidor[carteiraProfServidor]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_servidor[serieCarteiraServidor]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_servidor[tituloEleitorServidor]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_servidor[sessaoTituloEleitor]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[zonaTituloEleitor]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[pisPasep]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[instituicao]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[matriculaServidor]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[idDadosProfServidor][dataAdmicaoServidor]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[idDadosProfServidor][tipoVinculoServidorTipoVinculoServidor]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[idDadosProfServidor][habilitacaoEscolaridadeHabilitacaoEscolaridade]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[idDadosProfServidor][cargaHorariaServidor]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            }
        }
    });

});
