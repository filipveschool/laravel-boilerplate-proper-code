<?php
/**
 * Created by PhpStorm.
 * User: filipve
 * Date: 25/10/2016
 * Time: 16:28
 */

namespace App\Http\Validators;

use Hash;
use Illuminate\Validation\Validator;

class HashValidator extends Validator
{
    public function validateHash($attribute, $value, $parameters)
    {
        return Hash::check($value, $parameters[0]);
    }
}