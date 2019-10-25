<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyStockPointRequest;
use App\Http\Requests\StoreStockPointRequest;
use App\Http\Requests\UpdateStockPointRequest;
use App\StockPoint;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StockPointController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('stock_point_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stockPoints = StockPoint::all();

        return view('admin.stockPoints.index', compact('stockPoints'));
    }

    public function create()
    {
        abort_if(Gate::denies('stock_point_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stockPoints.create');
    }

    public function store(StoreStockPointRequest $request)
    {
        $stockPoint = StockPoint::create($request->all());

        return redirect()->route('admin.stock-points.index');
    }

    public function edit(StockPoint $stockPoint)
    {
        abort_if(Gate::denies('stock_point_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stockPoints.edit', compact('stockPoint'));
    }

    public function update(UpdateStockPointRequest $request, StockPoint $stockPoint)
    {
        $stockPoint->update($request->all());

        return redirect()->route('admin.stock-points.index');
    }

    public function show(StockPoint $stockPoint)
    {
        abort_if(Gate::denies('stock_point_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stockPoints.show', compact('stockPoint'));
    }

    public function destroy(StockPoint $stockPoint)
    {
        abort_if(Gate::denies('stock_point_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stockPoint->delete();

        return back();
    }

    public function massDestroy(MassDestroyStockPointRequest $request)
    {
        StockPoint::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
