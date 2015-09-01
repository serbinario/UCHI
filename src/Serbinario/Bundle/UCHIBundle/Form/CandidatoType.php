<?php

namespace Serbinario\Bundle\UCHIBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CandidatoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomeCanditato', 'text', array(
                'label' => 'Nome: ',               
                'attr'  => array(
                    'placeholder' => 'Nome da Agencia',
                    'widget_col'=> '4',
                )))
            ->add('nascimentoCanditato', 'date', array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'label' => 'Data de nascimento *',                
                'attr' => array(
                    'placeholder' => 'Data de nascimento',
                    'widget_col'=> '3',
                    'class' => 'datenottime'
                )
            ))
            ->add('rgCandidato', 'text', array(
                'label' => 'Nº registro de nascimento', 
                'required'     => false,
                'attr' => array(
                    'placeholder' => 'Nº registro de nascimento',
                    'widget_col'=> '4',
                    "class"    => " mask_numero"
                )))
            ->add('cpfCandidato', 'text', array(
                'label' => 'CPF *',           
                'attr' => array(
                    'placeholder' => 'Número do CPF',
                    'widget_col'=> '3',
                    "class"    => " mask_cpf"
                )))
            ->add('cepCanditato', 'text', array(
                'label' => 'CEP *',           
                'attr' => array(
                    'placeholder' => 'CEP',
                    'widget_col'=> '2',
                    "class"    => " mask_cep"
                )))
            ->add('logradouroCandidato', 'text', array(
                'label' => 'Logradouro *',           
                'attr' => array(
                    'placeholder' => 'Logradouro',
                    'widget_col'=> '6',
                )))
            ->add('bairroCanditato', 'text', array(
                'label' => 'Bairro *',           
                'attr' => array(
                    'placeholder' => 'Bairro',
                    'widget_col'=> '4',
                )))
            ->add('cidadeCandidato', 'text', array(
                'label' => 'Cidade *',           
                'attr' => array(
                    'placeholder' => 'Cidade',
                    'widget_col'=> '4',
                )))
            ->add('estadoCanditato', 'text', array(
                'label' => 'Estado *',           
                'attr' => array(
                    'placeholder' => 'Estado',
                    'widget_col'=> '2',
                )))
            ->add('paisCandidato', 'text', array(
                'label' => 'País *',           
                'attr' => array(
                    'placeholder' => 'País',
                    'widget_col'=> '3',
                )))
            ->add('profissaoProfissao', 'entity', array(
                'label'        => 'Profissao *',
                'empty_value' => "Selecione uma profissão",
                'class' => 'SerBinario\Bundle\UCHIBundle\Entity\Profissao',
                'attr' => array(
                     'widget_col'=> '4',
                    )
                ))
            ->add('experienciaProfissionalExperienciaProfissional', array(
                'label'        => 'Experiencia Profissional *',
                'multiple'     => false,
                'expanded'     => true,
                'class' => 'SerBinario\Bundle\UCHIBundle\Entity\ExperienciaProfissional',
                'attr' => array(
                     'widget_col'=> '4',
                    )
                ))
            ->add('posGraduacaoPosGraduacao', array(
                'label'        => 'Pós Graduação *',
                'multiple'     => true,
                'expanded'     => true,
                'class' => 'SerBinario\Bundle\UCHIBundle\Entity\PosGraduacao',
                'attr' => array(
                     'widget_col'=> '4',
                    )
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Serbinario\Bundle\UCHIBundle\Entity\Candidato'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'serbinario_bundle_uchibundle_candidato';
    }
}
