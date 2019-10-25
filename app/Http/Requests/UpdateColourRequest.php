<?php

namespace App\Http\Requests;

use App\Colour;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateColourRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('colour_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'min:4',
                'required',
                'unique:colours,name,' . request()->route('colour')->id,
            ],
        ];
    }
}
