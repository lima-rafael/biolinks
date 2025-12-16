<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckHandler implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(!preg_match('/^@[a-zA-Z0-9_-]+$/', $value)){
            $fail('Precisa começar com um @, você só pode user "_" ou "-" e não pode conter espaços');
        }
    }
}
