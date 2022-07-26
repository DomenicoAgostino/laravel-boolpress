@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Elenco Post</h1>
    @if (session('post_deleted'))
    <div class="alert alert-danger" role="alert">
        {{ session('post_deleted') }}
      </div>

    @endif
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Tags</th
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td>{{ $post->title }}</td>
                <td>{{ !empty($post->category) ? $post->category->name: '-'}}</td>
                <td>
                    @forelse ($post->tags as $tag)
                    <span class="badge bg-success">{{ $tag->name }}</span>


                    @empty
                    <span>&#10060;</span>
                    @endforelse
                </td>
                <td>
                    <a class="btn btn-warning" href="{{ route('admin.posts.show', $post) }}">VEDI</a>
                    <a class="btn btn-success" href="{{ route('admin.posts.edit', $post) }}">MODIFICA</a>
                    <form onsubmit="return confirm ('Confermi l\'eliminazione del post: {{ $post->title }}?')" class="d-inline" action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">ELIMINA</button>

                </form>


                </td>



            </tr>
            @endforeach
        </tbody>
        </table>

        {{ $posts->links() }}


        <div>
            <h2>Elenco post divisi per categorie</h2>
            @foreach ($categories as $category )
            <h3>{{ $category->name }}</h3>
            <ul>
                @foreach ($category->posts as $post )
                <li><a href="{{route('admin.posts.show', $post) }}">{{ $post->title }}</a></li>
                @endforeach
            </ul>



            @endforeach

        </div>

</div>
@endsection
