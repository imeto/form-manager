<?php
namespace FormManager\Validators;

use FormManager\InputInterface;
use FormManager\InvalidValueException;

class Email
{
    public static $error_message = 'This value is not a valid email';

    /**
     * Validates the input value according to this attribute.
     *
     * @param InputInterface $input The input to validate
     * 
     * @throws InvalidValueException If the value is not valid
     */
    public static function validate(InputInterface $input)
    {
        $value = $input->val();

        if (!empty($value) && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidValueException(sprintf(static::$error_message, $value));
        }
    }
}