<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class Date_TimeType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param Array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //$form = $this->createFormBuilder($course)
        $builder
            ->add('date', DateType::class, array(
                'required' => true, 
                'label' => 'Datum',
                'format' => 'dd MM yyyy',
                'widget' => 'choice',
                'years' => range(2016,2020),
                'placeholder' => array(
                    'year' => 'Jahr', 'month' => 'Monat', 'day' => 'Tag'
                    )
                ))
            ->add('start', TimeType::class, array(
                'required' => true, 
                'label' => 'Beginn',
                'widget' => 'choice'
                ))
            ->add('end', TimeType::class, array(
                'required' => true, 
                'label' => 'Ende',
                'widget' => 'choice'
                ))
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Date_Time',
        ));
    }
    
}