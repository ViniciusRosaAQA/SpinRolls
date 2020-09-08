@extends('layouts.app')

@section('content')
    <section id="comojogar">
        <div>
        <h2>Como jogar?</h2>
        </div>
        <hr class="my-4">
        <div>
            <h4>Para jogar é fácil, apenas necessita de um mouse ou de um smartphone com touchscreen.</h4>
            <a href="{{ route('principal') }}">Jogar</a>
        </div>
    </section>
@endsection