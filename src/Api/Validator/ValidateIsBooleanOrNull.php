<?php

namespace Reliv\ValidationRat\Api\Validator;

use Reliv\ValidationRat\Api\BuildOptionCode;
use Reliv\ValidationRat\Model\ValidationResult;
use Reliv\ValidationRat\Model\ValidationResultBasic;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ValidateIsBooleanOrNull implements Validate
{
    const OPTION_CODES = BuildOptionCode::OPTION_CODES;
    const CODE_MUST_BE_BOOLEAN_OR_NULL = 'must-be-boolean-or-null';

    /**
     * @param mixed $value
     * @param array $options
     *
     * @return ValidationResult
     */
    public function __invoke(
        $value,
        array $options = []
    ): ValidationResult {
        if (!is_bool($value) && $value !== null) {
            return new ValidationResultBasic(
                false,
                BuildOptionCode::invoke($options, static::CODE_MUST_BE_BOOLEAN_OR_NULL)
            );
        }

        return new ValidationResultBasic();
    }
}
