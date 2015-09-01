
$(document).ready(function() {

    $('.form-horizontal').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            'escolabundle_cgm[nome]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_cgm[sexoSexo]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_cgm[dataNascimento]': {
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
            'escolabundle_cgm[nacionalidade]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_cgm[CGMMunicipio]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_cgm[estadoCivil]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_cgm[escolaridade]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_cgm[email]': {
                validators: {
                    emailAddress: {
                        message: 'O e-mail informado não é válido'
                    }
                }
            },
            'escolabundle_cgm[endereco][logradouro]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_cgm[endereco][numero]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    },
                    integer: {
                        message: 'O valor informado não é um número',
                    }
                }
            },
            'escolabundle_cgm[endereco][cep]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_cgm[endereco][bairro]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_cgm[endereco][cidade]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            }
        }
    }).find('[name="escolabundle_alunos[enderecoAlunosEnderecoAlunos][numeroEnderecoAlunos]"]').mask('00000000000000000000000');
});
