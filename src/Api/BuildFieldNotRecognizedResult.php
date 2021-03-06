<?php

namespace Reliv\ValidationRat\Api;

use Reliv\ValidationRat\Model\ValidationResultBasic;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class BuildFieldNotRecognizedResult
{
    const OPTION_CODES = BuildOptionCode::OPTION_CODES;

    const CODE_UNRECOGNIZED_FIELD = 'unrecognized-field';

    /**
     * @param string $fieldName
     * @param array  $options
     *
     * @return ValidationResultBasic
     */
    public static function invoke(
        string $fieldName,
        array $options = []
    ) {
        return new ValidationResultBasic(
            false,
            BuildOptionCode::invoke($options, self::CODE_UNRECOGNIZED_FIELD),
            ['message' => 'Unrecognized field received: (' . $fieldName . ')']
        );
    }

    /**
     * @param string $fieldName
     * @param array  $options
     *
     * @return ValidationResultBasic
     */
    public function __invoke(
        string $fieldName,
        array $options = []
    ) {
        return self::invoke(
            $fieldName,
            $options
        );
    }
}
