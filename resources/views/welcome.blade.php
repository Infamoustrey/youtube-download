@extends('layouts.app')

@section('content')

<section class="hero">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Enter a video url:
        </h1>
        <h2 class="subtitle">
          Supported urls: youtube, vimeo
        </h2>
        <form method="POST" action="download">
            {{ csrf_field() }}
            <div class="field">
                <div class="control">
                    <input class="input is-large" name="url" type="text" placeholder="https://www.youtube.com/watch?v=DLzxrzFCyOs">
                </div>
            </div>
            <button type="submit" class="button is-large is-primary">Download</button>
        </form>
      </div>
    </div>
  </section>
    
@endsection