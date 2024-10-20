@extends('layout.main')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6">Edit Post</h1>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('udpatePost', $post->id) }}" method="POST">
        @csrf
        @method('PUT')  <!-- This method is important for updates -->

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500" placeholder="Enter post title">
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="content" id="content" required rows="4"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-500 focus:border-blue-500" 
                placeholder="Enter post description">{{ old('content', $post->description) }}</textarea>
        </div>

        <button type="submit"
            class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-200">
            Update Post
        </button>
    </form>
</div>
@endsection
