<?php

namespace App\Http\Controllers\Admin;

use App\Fabric;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Requests\MassDestroyFabricRequest;
use App\Http\Requests\StoreFabricRequest;
use App\Http\Requests\UpdateFabricRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FabricController extends Controller
{
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('fabric_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fabrics = Fabric::all();

        return view('admin.fabrics.index', compact('fabrics'));
    }

    public function create()
    {
        abort_if(Gate::denies('fabric_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fabrics.create');
    }

    public function store(StoreFabricRequest $request)
    {
        $fabric = Fabric::create($request->all());

        return redirect()->route('admin.fabrics.index');
    }

    public function edit(Fabric $fabric)
    {
        abort_if(Gate::denies('fabric_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fabrics.edit', compact('fabric'));
    }

    public function update(UpdateFabricRequest $request, Fabric $fabric)
    {
        $fabric->update($request->all());

        return redirect()->route('admin.fabrics.index');
    }

    public function show(Fabric $fabric)
    {
        abort_if(Gate::denies('fabric_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.fabrics.show', compact('fabric'));
    }

    public function destroy(Fabric $fabric)
    {
        abort_if(Gate::denies('fabric_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $fabric->delete();

        return back();
    }

    public function massDestroy(MassDestroyFabricRequest $request)
    {
        Fabric::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
