@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h2 class="text-center">Pilih Operator</h2>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            @foreach ($operators as $op => $value)
                <a class="btn btn-outline-info m-3" href="{{ Route('show', $op) }}">{{ $op }}</a>                
            @endforeach


            {{-- <a class="btn btn-outline-info" href="{{ Route('show', 'AXIS') }}">AXIS</a>
            <a class="btn btn-outline-info" href="{{ Route('show', 'TELKOMSEL') }}">TELKOMSEL</a> --}}
        </div>
    </div>
</div>
    
@endsection