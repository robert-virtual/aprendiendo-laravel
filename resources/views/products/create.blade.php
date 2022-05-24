@extends('layouts.master')
@section('title',"Create Products")

@section('content')
<h1>Create</h1>
@isset($msg)
   <p>msg: {{$msg}}</p> 
@endisset
<form action="{{$action}}" method="POST">
    @csrf
    @method($method)
    <input 
    type="text" 
    placeholder="Name" 
    name="name" 
    value="{{$product->name}}"
    @if (isset($show))
        disabled
    @endif
    >
    <textarea 
    placeholder="Description" 
    name="description" 
    cols="30" 
    rows="10" 
    @if (isset($show))
        disabled
    @endif
    >{{$product->description}}</textarea>
    <input 
    type="number" 
    placeholder="Price"
    name="price" 
    value="{{$product->price}}"
    @if (isset($show))
        disabled
    @endif
    >
    <input 
    type="number" 
    placeholder="Quantity" 
    name="quantity" 
    value="{{$product->quantity}}"
    @if (isset($show))
        disabled
    @endif

    >
    @if (!isset($show))
        <button class="btn-primary">{{$btn ?? "Crear"}}</button>
    @endif
</form>
@endsection