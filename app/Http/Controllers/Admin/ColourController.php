<?php

namespace App\Http\Controllers\Admin;

use App\Colour;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyColourRequest;
use App\Http\Requests\StoreColourRequest;
use App\Http\Requests\UpdateColourRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ColourController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('colour_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $colours = Colour::all();

        return view('admin.colours.index', compact('colours'));
    }

    public function create()
    {
        abort_if(Gate::denies('colour_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.colours.create');
    }

    public function store(StoreColourRequest $request)
    {
        $colour = Colour::create($request->all());

        return redirect()->route('admin.colours.index');
    }

    public function edit(Colour $colour)
    {
        abort_if(Gate::denies('colour_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.colours.edit', compact('colour'));
    }

    public function update(UpdateColourRequest $request, Colour $colour)
    {
        $colour->update($request->all());

        return redirect()->route('admin.colours.index');
    }

    public function show(Colour $colour)
    {
        abort_if(Gate::denies('colour_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.colours.show', compact('colour'));
    }

    public function destroy(Colour $colour)
    {
        abort_if(Gate::denies('colour_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $colour->delete();

        return back();
    }

    public function massDestroy(MassDestroyColourRequest $request)
    {
        Colour::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
