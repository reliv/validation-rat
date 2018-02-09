<?php

namespace Reliv\ValidationRat;

use Reliv\ValidationRat\Api\FieldValidator\ValidateFieldsByStrategy;
use Reliv\ValidationRat\Api\FieldValidator\ValidateFieldsByStrategyFactory;
use Reliv\ValidationRat\Api\FieldValidator\ValidateFieldsHasOnlyRecognizedFields;
use Reliv\ValidationRat\Api\FieldValidator\ValidateFieldsHasOnlyRecognizedFieldsFactory;
use Reliv\ValidationRat\Api\ValidationResultFieldsToArray;
use Reliv\ValidationRat\Api\ValidationResultFieldsToArrayBasicFactory;
use Reliv\ValidationRat\Api\ValidationResultToArray;
use Reliv\ValidationRat\Api\ValidationResultToArrayBasicFactory;
use Reliv\ValidationRat\Api\Validator\ValidateByStrategy;
use Reliv\ValidationRat\Api\Validator\ValidateByStrategyFactory;
use Reliv\ValidationRat\Api\Validator\ValidateCompositeByStrategy;
use Reliv\ValidationRat\Api\Validator\ValidateCompositeByStrategyFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsAnyValue;
use Reliv\ValidationRat\Api\Validator\ValidateIsAnyValueFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsArray;
use Reliv\ValidationRat\Api\Validator\ValidateIsArrayFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsAssociativeArray;
use Reliv\ValidationRat\Api\Validator\ValidateIsAssociativeArrayFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsBoolean;
use Reliv\ValidationRat\Api\Validator\ValidateIsBooleanFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsClass;
use Reliv\ValidationRat\Api\Validator\ValidateIsClassFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsEmpty;
use Reliv\ValidationRat\Api\Validator\ValidateIsEmptyFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsNotEmpty;
use Reliv\ValidationRat\Api\Validator\ValidateIsNotEmptyFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsNull;
use Reliv\ValidationRat\Api\Validator\ValidateIsNullFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsObject;
use Reliv\ValidationRat\Api\Validator\ValidateIsObjectFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsRealValue;
use Reliv\ValidationRat\Api\Validator\ValidateIsRealValueFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsString;
use Reliv\ValidationRat\Api\Validator\ValidateIsStringFactory;
use Reliv\ValidationRat\Api\Validator\ValidateIsValue;
use Reliv\ValidationRat\Api\Validator\ValidateIsValueFactory;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ModuleConfig
{
    /**
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => [
                'config_factories' => [
                    ValidateByStrategy::class => [
                        'factory' => ValidateByStrategyFactory::class,
                    ],

                    ValidateCompositeByStrategy::class => [
                        'factory' => ValidateCompositeByStrategyFactory::class,
                    ],

                    ValidateFieldsByStrategy::class => [
                        'factory' => ValidateFieldsByStrategyFactory::class,
                    ],

                    ValidateFieldsHasOnlyRecognizedFields::class => [
                        'factory' => ValidateFieldsHasOnlyRecognizedFieldsFactory::class,
                    ],
                    ValidateIsAnyValue::class => [
                        'factory' => ValidateIsAnyValueFactory::class,
                    ],
                    ValidateIsArray::class => [
                        'factory' => ValidateIsArrayFactory::class,
                    ],
                    ValidateIsAssociativeArray::class => [
                        'factory' => ValidateIsAssociativeArrayFactory::class,
                    ],
                    ValidateIsBoolean::class => [
                        'factory' => ValidateIsBooleanFactory::class,
                    ],
                    ValidateIsClass::class => [
                        'factory' => ValidateIsClassFactory::class,
                    ],
                    ValidateIsEmpty::class => [
                        'factory' => ValidateIsEmptyFactory::class,
                    ],
                    ValidateIsNotEmpty::class => [
                        'factory' => ValidateIsNotEmptyFactory::class,
                    ],
                    ValidateIsNull::class => [
                        'factory' => ValidateIsNullFactory::class,
                    ],
                    ValidateIsObject::class => [
                        'factory' => ValidateIsObjectFactory::class,
                    ],
                    ValidateIsRealValue::class => [
                        'factory' => ValidateIsRealValueFactory::class,
                    ],
                    ValidateIsString::class => [
                        'factory' => ValidateIsStringFactory::class,
                    ],
                    ValidateIsValue::class => [
                        'factory' => ValidateIsValueFactory::class,
                    ],

                    ValidationResultFieldsToArray::class => [
                        'factory' => ValidationResultFieldsToArrayBasicFactory::class,
                    ],

                    ValidationResultToArray::class => [
                        'factory' => ValidationResultToArrayBasicFactory::class,
                    ],
                ],
            ],
        ];
    }
}