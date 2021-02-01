<?php

declare(strict_types=1);

namespace App\Form\Extension;


use App\Entity\Product\ProductColorInterface;
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
                'choices' => $this->getAvailableColorChoices(),
            ]);
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }

    private function getAvailableColorChoices(): array
    {
        return [
            _('app.form.product.color.variants.blue') => ProductColorInterface::COLOR_BLUE,
            _('app.form.product.color.variants.red') => ProductColorInterface::COLOR_RED,
            _('app.form.product.color.variants.green') => ProductColorInterface::COLOR_GREEN,
        ];
    }
}
