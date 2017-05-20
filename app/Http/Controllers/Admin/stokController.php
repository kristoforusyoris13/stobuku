<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\stok;
use Illuminate\Http\Request;
use Session;
use App\buku;
use App\penerbit;
class stokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if (!empty($keyword)) {
            $stok = stok::where('tanggal_masuk', 'LIKE', "%$keyword%")
                ->orWhere('jumlah', 'LIKE', "%$keyword%")

                ->orWhereHas('buku', function ($query) use ($keyword) {
        $query->where('nama_buku', 'like', '%'.$keyword.'%');
    })->
                orWhereHas('penerbit', function ($query) use ($keyword) {
        $query->where('nama', 'like', '%'.$keyword.'%');
        })

                ->paginate($perPage);
        } else {
            $stok = stok::paginate($perPage);
        }

        return view('admin.stok.index', compact('stok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.stok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        stok::create($requestData);

        Session::flash('flash_message', 'stok added!');

        return redirect('admin/stok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $stok = stok::findOrFail($id);

        return view('admin.stok.show', compact('stok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $stok = stok::findOrFail($id);

        return view('admin.stok.edit', compact('stok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $stok = stok::findOrFail($id);
        $stok->update($requestData);

        Session::flash('flash_message', 'stok updated!');

        return redirect('admin/stok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        stok::destroy($id);

        Session::flash('flash_message', 'stok deleted!');

        return redirect('admin/stok');
    }
}
