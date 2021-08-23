@extends('dashboard.master')

@section('content')

    <a class="btn btn-success mt-3 mb-3" href="{{ route('post.create') }}">
        crear
    </a>

    <table class="table">
        <thead>
            <tr>
                <td>
                    id

                </td>
                <td>
                    Titulo

                </td>
                <td>
                    posteado

                </td>
                <td>
                    creacion

                </td>
                <td>
                    actualizacion

                </td>
                <td>
                    Acciones

                </td>

            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)

                <tr>
                    <td>
                        {{ $post->id }}

                    </td>
                    <td>
                        {{ $post->title }}

                    </td>
                    <td>
                        {{ $post->posted }}

                    </td>
                    <td>
                        {{ Carbon\Carbon::parse($post->created_at)->format('d-M-Y') }}


                    </td>
                    <td>
                        {{ $post->updated_at }}

                    </td>
                    <td>
                        <a href="{{ route('post.show', $post->id) }}" class="btn btn-primary mb-2 ">ver </a>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary mb-2 ">actualizar </a>

                    </td>

                </tr>

            @endforeach
        </tbody>
    </table>


    {{ $posts->links() }}
@endsection
