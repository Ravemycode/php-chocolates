<?php

namespace Prodotti\Form;

use Zend\InputFilter\InputFilter;

class ProdottoInputFilter extends InputFilter
{

    public function __construct()
    {

        $this->add([
            'name' => 'codice',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'nome',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ]
        ]);

        $this->add([
            'name' => 'prezzo',
            'required' => "true",
            'filters' => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
            'validators' => [
                ['name' => 'Zend\I18n\Validator\IsFloat'] /*AGGIUNTO IL 20.04.2016*/
            ]
        ]);

    }

}
