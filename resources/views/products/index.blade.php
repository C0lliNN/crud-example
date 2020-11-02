@extends('layouts.main')

@section('content')
<div class="flex items-center justify-between border-b pb-3 mb-3">
  <h2 class="text-xl">Products</h2>
  <a href="{{ route('products.create') }}" class="btn btn-success">New</a>
</div>
<div>
  @if ($products->count())
  <table class="table-fixed w-full">
    <thead>
      <tr>
        <td class="w-1/3 border px-3 h-12 text-gray-700 font-medium">Name</td>
        <td class="w-1/3 border px-3 h-12 text-gray-700 font-medium">Price</td>
        <td class="w-1/3 border px-3 h-12 text-gray-700 font-medium"></td>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
      <tr>
        <td class="border px-3 h-12">
          <div class="flex items-center">
            <img class="w-10 h-10 rounded-full" src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
            <span class="ml-3 text-gray-600">{{ $product->name }}</span>
          </div>
        </td>
        <td class="border px-3 h-12 text-gray-600">$ {{ $product->price}}</td>
        <td class="w-1/3 border px-3 h-12 ">
          <div class="text-center">
            <form action="{{ route('products.destroy', $product)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-sm btn-danger">Delete</button>
            </form>
          </div>
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
  @else
  <p class="mt-3 mb-1 text-center text-gray-600 text-lg">
    No Items Yet
  </p>
  @endif
</div>
@endsection