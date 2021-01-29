<?php

declare(strict_types=1);

namespace App\Form\Extension;


use App\Entity\Product\ProductColorInterface;
use App\Service\ProductColorService;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;


final class ProductTypeExtension extends AbstractTypeExtension
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('color', ChoiceType::class, [
                'required' => false,
                'label' => 'app.form.product.color.title',
                'choices' => ProductColorService::getAvailableColorChoices(),
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
