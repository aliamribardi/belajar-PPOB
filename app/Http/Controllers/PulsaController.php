<?php

namespace App\Http\Controllers;

use App\Models\Pulsa;
use App\Http\Helpers\PPOB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePulsaRequest;
use App\Http\Requests\UpdatePulsaRequest;
use App\Http\Repositories\PulsaRepository;

class PulsaController extends Controller
{
    protected $repository;

    public function __construct(PulsaRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->repository->indexCekHarga();
        
        return view('index', [
            'operators' => $data,
        ]);
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
     * @param  \App\Http\Requests\StorePulsaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePulsaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pulsa  $pulsa
     * @return \Illuminate\Http\Response
     */
    public function show($pulsa)
    {
        // dd($pulsa);
        $data = $this->repository->detailPulsa($pulsa);

        return view('show', [
            'pulsas' => $data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pulsa  $pulsa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pulsa $pulsa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePulsaRequest  $request
     * @param  \App\Models\Pulsa  $pulsa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePulsaRequest $request, Pulsa $pulsa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pulsa  $pulsa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pulsa $pulsa)
    {
        //
    }
}
