<?php

namespace App\Http\Requests;

use App\StockPoint;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreStockPointRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('stock_point_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
        ];
    }
}
