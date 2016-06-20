<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;


class CourseType extends AbstractType
{
    /**
    * @param FormBuilderInterface $builder
    * @param Array $options
    */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'required' => true, 'max_length' => 150
                ))
            ->add('number', NumberType::class)
            ->add('targetGroup', TextType::class, array(
                'required' => true, 'max_length' => 50
                ))
            ->add('price', NumberType::class, array(
                'required' => true, 'label' => 'Kursgebühr in Euro'
                ))
            ->add('place', TextType::class, array(
                'required' => true, 'label' => 'Veranstaltungsort'
                ))
            ->add('description', TextareaType::class, array(
                'required' => true, 'label' => 'Kursbeschreibung'))
            ->add('category', EntityType::class, array(
                'class' => 'AppBundle:Category', 'choice_label' => 'name', 'label' => 'Kategorie'
                ))
            ->add('dates', CollectionType::class, array(
                'entry_type'   => Date_TimeType::class, 'label' => 'Termine'
                ))
            ->add('availablePlaces', NumberType::class, array(
                'required' => true, 'label' => 'Anzahl Kursplätze'
                ))
            ->add('save', SubmitType::class, array('label' => 'Kurs anlegen'))
            ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Course',
        ));
    }
    
}