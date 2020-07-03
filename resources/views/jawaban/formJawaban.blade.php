@extends('adminlte.master')

@section('content')
    <div class="ml-3">
        <form action="/pertanyaan" method="POST">
            @csrf
            <div class="form-group">
                <label for="question">Jawaban pertanyaan {{$pertanyaan_id}}:</label>
                <textarea type="text" class="form-control" placeholder="Enter your question" name="pertanyaan" id="question"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection