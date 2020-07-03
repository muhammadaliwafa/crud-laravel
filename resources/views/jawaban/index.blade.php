@extends('adminlte.master')

@section('content')
    <table class="table">
    <h1>Jawaban pertanyaan dengan id pertanyaan : {{$id}}</h1>
        <thead>
        <tr>
            <th>No</th>
            <th>Jawaban</th>
            
        </tr>
        </thead>
        <tbody>
            @foreach($items as $key => $item)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$item->jawaban}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@endsection