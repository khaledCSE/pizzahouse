@extends('layouts.app')

@section('content')
    <div class="container pizza-details">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="type">
            Type - {{ $pizza->type }}
        </p>
        <p class="base">
            Base - {{ $pizza->base }}
        </p>
        <p class="toppings">Extra toppings:</p>
        <ul>
            @foreach ($pizza->toppings as $topping)
                <li>{{ $topping }}</li>
            @endforeach
        </ul>
        <form action="/pizzas/{{ $pizza->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
        <a href="/pizzas" class="back"><- Back to All Pizzas</a>
    </div>
@endsection
