@extends('adminlte.master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Pertanyaan</th>
            
        </tr>
        </thead>
        <tbody>
            @foreach($items as $key => $item)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$item->pertanyaan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>    
@endsection