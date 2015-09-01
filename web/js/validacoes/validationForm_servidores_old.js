
$(document).ready(function() {

    $('.form-horizontal').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            'escolabundle_servidor[nomeServidor]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_servidor[dataNascimentoServidor]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    },
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'A data não está no formato correto'
                    }
                }
            },
            'escolabundle_servidor[sexoSexo]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_servidor[estadoCivilEstadoCivil]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_servidor[naturalidadeServidor]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_servidor[emailServidor]': {
                validators: {
                    emailAddress: {
                        message: 'O e-mail informado não é válido'
                    }
                }
            },
            'escolabundle_servidor[rgServidor]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_servidor[orgaoExpRg]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_servidor[cpfServidor]': {
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
            'escolabundle_servidor[enderecoServidorEnderecoServidor][logradouroServidor]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[enderecoServidorEnderecoServidor][ufServidor]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[enderecoServidorEnderecoServidor][bairroBairro]': {
                validators: {
                    notEmpty: {
                        message: 'Este campo é obrigatório'
                    }
                }
            },
            'escolabundle_servidor[enderecoServidorEnderecoServidor][cidadeCidade]': {
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
