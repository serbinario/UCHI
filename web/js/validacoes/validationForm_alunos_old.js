
$(document).ready(function() {

    $('.form-horizontal').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            'escolabundle_alunos[instituicaoInstituicao]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_alunos[nomeAlunos]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_alunos[dataNascimentoAlunos]': {
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
            'escolabundle_alunos[sexoSexo]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_alunos[naturalidadeAlunos]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_alunos[racaRaca]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_alunos[enderecoAlunosEnderecoAlunos][logradouroEnderecoAlunos]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_alunos[enderecoAlunosEnderecoAlunos][numeroEnderecoAlunos]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_alunos[enderecoAlunosEnderecoAlunos][cepEnderecoAlunos]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_alunos[enderecoAlunosEnderecoAlunos][bairroBairro]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'escolabundle_alunos[enderecoAlunosEnderecoAlunos][cidadeCidade]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            }
        }
    }).find('[name="escolabundle_alunos[enderecoAlunosEnderecoAlunos][numeroEnderecoAlunos]"]').mask('00000000000000000000000');
});
