@extends('layouts.master')
@section('title',"Create Products")

@section('content')
<h1>Create</h1>
<div class="row">
    @isset($product->images[0]->url)
    <img 
    src="{{$product->images[0]->url}}" 
    alt="{{$product->name}}">
        
    @endisset
<form action="{{$action}}" method="POST">
    @csrf
    @method($method)
    <input 
    type="text" 
    placeholder="Name" 
    name="name" 
    value="{{$product->name}}"
    @if($show)
        disabled
    @endif
    >
    <textarea 
    placeholder="Description" 
    name="description" 
    cols="30" 
    rows="10" 
    @if($show)
        disabled
    @endif
    >{{$product->description}}</textarea>
    <input 
    type="number" 
    placeholder="Price"
    name="price" 
    value="{{$product->price}}"
    @if($show)
        disabled
    @endif
    >
    <input 
    type="number" 
    placeholder="Quantity" 
    name="quantity" 
    value="{{$product->quantity}}"
    @if($show)
        disabled
    @endif
    >
    @unless($show)
        <input 
        type="url" 
        placeholder="Image Url" 
        name="image"

        @isset($product->images[0]->url)
        value="{{$product->images[0]->url}}"
        @endisset
        >
        <button class="btn-primary">{{$btn ?? "Crear"}}</button>
    @endunless
</form>
</div>
@endsection