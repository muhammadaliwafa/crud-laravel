@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="/jawaban/1" method="POST">
            @csrf
            <div class="form-group">
                <label for="jawaban">Jawaban pertanyaan {{$pertanyaan_id}}:</label>
                <textarea type="text" class="form-control" placeholder="Enter your answer" name="jawaban" id="jawaban"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection