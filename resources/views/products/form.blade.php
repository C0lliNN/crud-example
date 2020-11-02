@extends('layouts.main')

@section('content')
<div class="flex items-center justify-between border-b pb-3 mb-3">
  <h2 class="text-xl">New Product</h2>
  <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
</div>
<div>
  <form action="{{ route('products.store')}}" method="post" class="mt-5" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Product Name">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea type="text" id="description" name="description" placeholder="Product Description" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" id="price" name="price" placeholder="Product Price" />
    </div>
    <div class="form-group">
      <label for="image">Image</label>
      <input type="file" name="image" id="image" class="hidden">
      <div id="dropzone" class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded bg-white">
        <div class="text-center">
          <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
            <path
              d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <p id="dropzoneText" class="mt-1 text-sm text-gray-600">
            <button
              type="button"
              id="upload"
              class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none transition duration-150 ease-in-out">
              Upload a image
            </button>
            or drag and drop
          </p>
          <p class="mt-1 text-xs text-gray-500">
            PNG, JPG, GIF up to 10MB
          </p>
        </div>
      </div>
    </div>
    <div class="text-right">
      <button type="submit" class="btn btn-success">Create<button>
    </div>
  </form>
</div>

<script src="{{ asset('/js/app.js') }}"></script>
@endsection