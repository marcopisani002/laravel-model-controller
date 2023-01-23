@extends('index')

@section('content')
    @foreach ($movies as $movie)
        <div class="text-center">
            <div class="row mt-5 text-center mx-5 px-5">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->original_title }}</p>
                            <a href="#" class="btn btn-primary">{{ $movie->nationality }}</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
@endsection
