<?php

namespace App\Http\Controllers;

use App\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Sample::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sample = new Sample();
        $sample->name = $request->get('name');
        $sample->description = $request->get('description');
        $sample->save();

        return $sample;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function show(Sample $sample)
    {
        return $sample;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function edit(Sample $sample)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sample $sample)
    {
        if ($request->get('name')) {
            $sample->name = $request->get('name');
        }

        if ($request->get('description')) {
            $sample->description = $request->get('description');
        }

        $sample->save();

        return $sample;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sample $sample)
    {
        $id = $sample->id;
        $sample->delete();

        return [
            'status' => 'success',
            'id' => $id,
        ];
    }
}
