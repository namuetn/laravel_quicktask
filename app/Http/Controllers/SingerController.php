<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Models\Singer;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $singers = Singer::all();

        return view('singers.index', compact('singers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('singers.create', compact('singers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Singer::create($request->all());
        } catch (Exception $e) {
            Log::error($e);

            return back()->with('message', __('text.create.error'));
        }

        return redirect()->route('singers.index')->with('message', __('text.create.success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singer = Singer::findOrFail($id);

        return view('singers.edit', compact('singer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $singer = Singer::findOrFail($id);

        try {
            $singer->update($request->all());
        } catch (Exception $e) {
            Log::error($e);

            return back()->with('message', __('text.update.error'));
        }

        return redirect()->route('singers.index')->with('message', __('text.update.success'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singer = Singer::findOrFail($id);
        $singer->delete();

        return redirect()->route('singers.index')->with('message', __('text.delete.success'));
    }
}
