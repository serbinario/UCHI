
$(document).ready(function() {
    
    //cursos
    $('.form-horizontal').bootstrapValidator({
        excluded: [':disabled'],
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            'eescolabundle_cursos[instituicaoInstituicao]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_cursos[nomeCurso]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_cursos[nivelCursosNivelCursos]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_cursos[regimeCursosRegimeCursos]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            },
            'eescolabundle_cursos[tipoCursosTipoCursos]': {
                validators: {
                    notEmpty: {
                        message: "Este campo é obrigatório"
                    }
                }
            }
        }
    });
});
