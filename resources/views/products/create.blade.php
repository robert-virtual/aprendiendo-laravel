@extends('layouts.master')
@section('title',"Create Products")

@section('content')
<h1>Create</h1>
@isset($msg)
   <p>msg: {{$msg}}</p> 
@endisset
<form action="{{$action}}" method="{{$method}}">
    @csrf
    <input 
    type="text" 
    placeholder="Name" 
    name="name" 
    value="{{$product->name}}"
    disabled={{isset($show)}}
    >
    <textarea 
    placeholder="Description" 
    name="description" 
    cols="30" 
    rows="10" 
    disabled={{isset($show)}}
    >{{$product->description}}</textarea>
    <input 
    type="number" 
    placeholder="Price"
    name="price" 
    value="{{$product->price}}"
    disabled={{isset($show)}}
    >
    <input 
    type="number" 
    placeholder="Quantity" 
    name="quantity" 
    value="{{$product->quantity}}"
    disabled={{isset($show)}}
    >
    @if (!isset($show))
        <button class="btn-primary">{{$btn ?? "Crear"}}</button>
    @endif
</form>
@endsection