<?php
namespace etopian\Tests\Rules;

use Illuminate\Contracts\Validation\Rule;
use etopian\ValidatorFactory;

class isEqualToOneRule implements Rule
{
    public function passes($attribute, $value)
    {
        if ($value !== 1) {
            return false;
        }

        return true;
    }

    public function message()
    {
        $key = 'validation.custom.isequaltoone';

        return ValidatorFactory::$translator->get($key);
    }
}
