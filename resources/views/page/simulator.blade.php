@extends('layout.basic')

@section('content')
<script type="text/javascript" src="{{ URL::asset('js/spa.js') }}"></script>

<div class="row">
    
  <div class="column"></div>
      
      <a href="step1">
      <img src="{{ URL::asset('ico/house.png') }}">
      </a>
  </div>

  <div class="column">
      <a href="">
      <img src="{{ URL::asset('ico/invest.png') }}">
      </a>
  </div>

  <div class="column">
      <a href="">
      <img src="{{ URL::asset('ico/budget.png') }}">
      </a>
  </div>
</div>
@endsection