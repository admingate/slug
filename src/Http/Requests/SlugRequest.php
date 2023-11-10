<?php

namespace Admingate\Slug\Http\Requests;

use Admingate\Support\Http\Requests\Request;

class SlugRequest extends Request
{
    public function rules(): array
    {
        return [
            'value' => 'required',
            'slug_id' => 'required',
        ];
    }
}
