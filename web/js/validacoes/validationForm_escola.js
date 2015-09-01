
$(document).ready(function() {

    $('.form-horizontal').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            'eescolabundle_escola[instituicaoInstituicao]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_escola[nomeEscola]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_escola[portariaEscola]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_escola[dtPubPortariaEscola]': {
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
            'eescolabundle_escola[enderecoEscolaEnderecoEscola][bairroBairro]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_escola[emailEscola]': {
                validators: {
                    emailAddress: {
                        message: 'O e-mail informado não é válido'
                    }
                }
            },
            'eescolabundle_escola[enderecoEscolaEnderecoEscola][logradouroEscola]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_escola[enderecoEscolaEnderecoEscola][numeroEscola]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_escola[enderecoEscolaEnderecoEscola][cepEscola]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_escola[enderecoEscolaEnderecoEscola][cidadeCidade]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            }
        }
    });

});
