
@extends('layouts.master')
@section('title',"Products")

@section('content')
<h1>Products</h1>
<div class="row justify-end">
    <a href="/products">Productos Activos</a>
    <a href="/products?active=0">Productos Inactivos</a>
</div>
@if (count($products) == 0)
    <h3>Aun no hay Productos</h3> 
@else
    <p>Total Products: {{count($products)}}</p> 
    <div class="grid">
        @foreach ($products as $product)
            <div class="product">
                <img src="{{$product->images[0]->url}}" alt="">
                <h4 class="title">{{$product->name}}</h4> 
                <p class="description">{{$product->description}}</p>
                <p class="price">LPS.{{$product->price}}</p>
                <p class="quantity"> available: {{$product->quantity}}</p>
                <a href="/products/{{$product->id}}" class="btn-primary">Ver</a>
                <a href="/products/{{$product->id}}/edit" class="btn-primary">Editar</a>
                <form action="/products/{{$product->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button class="btn-primary {{$product->active?'red':'green'}}">
                        {{$product->active?'Eliminar':'Activar'}}</button>
                </form>
            </div>
        @endforeach
    </div>
@endif
@endsection