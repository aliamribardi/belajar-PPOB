@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h2 class="text-center">Pilih Pulsa</h2>
        </div>
    </div>
    <div class="row mt-3">
            @foreach ($pulsas as $pulsa)
                <div class="card m-2" style="width: 10rem;">
                    <div class="card-body">
                        {{-- <h5 class="card-title">{{ $pulsa->description }}</h5> --}}
                        <p class="card-text">{{ $pulsa->pulsa }}.000</p>
                        <a href="#" class="btn btn-primary">Rp.{{ $pulsa->harga }}</a>
                    </div>
                </div>
            @endforeach
    </div>
</div>
    
@endsection