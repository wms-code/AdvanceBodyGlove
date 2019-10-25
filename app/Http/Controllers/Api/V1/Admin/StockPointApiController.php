<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStockPointRequest;
use App\Http\Requests\UpdateStockPointRequest;
use App\Http\Resources\Admin\StockPointResource;
use App\StockPoint;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StockPointApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('stock_point_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StockPointResource(StockPoint::all());
    }

    public function store(StoreStockPointRequest $request)
    {
        $stockPoint = StockPoint::create($request->all());

        return (new StockPointResource($stockPoint))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(StockPoint $stockPoint)
    {
        abort_if(Gate::denies('stock_point_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new StockPointResource($stockPoint);
    }

    public function update(UpdateStockPointRequest $request, StockPoint $stockPoint)
    {
        $stockPoint->update($request->all());

        return (new StockPointResource($stockPoint))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(StockPoint $stockPoint)
    {
        abort_if(Gate::denies('stock_point_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stockPoint->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
