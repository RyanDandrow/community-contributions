@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Commnuity</h1>

    <ul class="Links">

    </ul>

    @foreach ($links as $link)
      <li class="Links__link">
        <a href="{{ $link->link }}" target="_blank">
          {{ $link->title }}
        </a>

        <small>
          Contributed by: <a href="#"> {{ $link->creator->name }} </a>
          {{ $link->updated_at->diffForHumans() }}
        </small>
      </li>
    @endforeach
  </div>
@stop