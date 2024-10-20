@extends('layout.main')

@section('content')
<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-bold mb-4">Posts</h1>

    @if (session('success'))
        <div class="bg-green-500 text-white p-4 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b text-left">ID</th>
                <th class="py-2 px-4 border-b text-left">Title</th>
                <th class="py-2 px-4 border-b text-left">Description</th>
                <th class="py-2 px-4 border-b text-left">Created At</th>
                <th class="py-2 px-4 border-b text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $post)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $post->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $post->title }}</td>
                    <td class="py-2 px-4 border-b">{{ $post->description }}</td>
                    <td class="py-2 px-4 border-b">{{ $post->created_at->format('Y-m-d H:i') }}</td>
                    
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('editPost', $post->id) }}" class="ml-2 text-yellow-600 hover:text-yellow-800">Edit</a>
                        
                        <form action="{{ route('deletePost', $post->id) }}" method="POST" class="inline ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
