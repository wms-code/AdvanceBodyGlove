<?php

namespace App\Http\Requests;

use App\StockPoint;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStockPointRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('stock_point_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:stock_points,id',
        ];
    }
}
