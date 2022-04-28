<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidRecaptchaResponse implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $response=json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.env('RECAPTCHA_V2_SECRET').'&response='.$_POST['g-recaptcha-response']),true);
        if($response['success'] == false)
        {
            return false;
        }
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Eres un spammer.';
    }
}
