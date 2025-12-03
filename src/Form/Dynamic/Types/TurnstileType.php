<?php

namespace App\Form\Dynamic\Types;

use PixelOpen\CloudflareTurnstileBundle\Validator\CloudflareTurnstile;
use Sulu\Bundle\FormBundle\Dynamic\FormFieldTypeConfiguration;
use Sulu\Bundle\FormBundle\Dynamic\FormFieldTypeInterface;
use Sulu\Bundle\FormBundle\Entity\FormField;
use Symfony\Component\Form\FormBuilderInterface;

class TurnstileType implements FormFieldTypeInterface
{
    public function getConfiguration(): FormFieldTypeConfiguration
    {
        return new FormFieldTypeConfiguration(
            'app.form.dynamic.type_turnstile',
            __DIR__ . '/../../../../config/form-fields/field_turnstile.xml',
            'special'
        );
    }

    public function build(FormBuilderInterface $builder, FormField $field, string $locale, array $options): void
    {
        $options['mapped'] = false;
        $options['constraints'] = [new CloudflareTurnstile()];

        $builder->add(
            $field->getKey(),
            \PixelOpen\CloudflareTurnstileBundle\Type\TurnstileType::class,
            $options
        );
    }

    public function getDefaultValue(FormField $field, string $locale)
    {
        return null;
    }
}
