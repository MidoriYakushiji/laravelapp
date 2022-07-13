<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Jissyu4_3Myrule implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-zA-Z0-9]+$/', $value);
    }

    public function message()
    {
        return 'ログインIDは半角英数字で入力してください';
    }

}
