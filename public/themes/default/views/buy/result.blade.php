@extends('layout.coralfront')


@section('content')

<!-- Widget -->
<div class="widget widget-tabs border-bottom-none">
  <div class="widget-body">


    <div class="row">
      <!-- Column -->
      <div class="col-md-12 center">
          <h3>{{ $resulthead }}</h3>
          <p>{{ $resultbody }}</p>

          <h2>Current Credit : {{ Ks::getAvailableCredit() }}</h2>

      </div>

    </div>
  </div>
</div>
<!-- // Widget END -->



@stop
