@extends('layout.szablon')
@section('tytul', 'Lista postów')
@section('podtytul', 'Lista postów')
@section('tresc')

    <table class="table table-striped">
        <thead>
            <th scope="col">Lp</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Autor</th>
            <th scope="col">Data utworzenia</th>
        </thead>
        <tbody>
            @isset($posty)
                @if($posty->count())
                @foreach ($posty as $post)
                <tr>                    
                    <td>{{$post->id}}</td>
                    <td><a href="{{route('post.show', $post->id)}}">{{$post->tytul}}</a></td>
                    <td>{{$post->autor}}</td>
                    <td>{{date('j F Y',strtotime($post->created_at))}}</td>
                </tr>
                @endforeach
                @else
                    <td colspan="4">Nie ma żadnych postów</td>
                @endif
            @else
                <td colspan="4">Nie ma żadnych postów</td>
            @endisset
        </tbody>
    </table>
@endsection