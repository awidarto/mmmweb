@extends('layout.coralfront')


@section('content')

<!-- Widget -->
<div class="widget widget-tabs border-bottom-none">
  <div class="widget-body">

    <h2>Current Credit : {{ Ks::getAvailableCredit() }}</h2>

    <div class="row">
      <!-- Column -->
      <div class="col-md-6">
        {{ Former::open_vertical('buy/media')}}
            <h4>{{ $m->title }}</h4>
            <img src="{{ $m->defaultpic['medium_url']}}" style="width:150px;height:auto;" />
            <p>
              <b><i>{{ $m->artist }}</i></b><br />
              {{ $m->price }}
            </p>
            @if( (Ks::getAvailableCredit() - $m->price) < 0 )
              <div>
                <p>
                  Sorry, you don't have enough credit to buy this item.<br />
                  You may top up your credit <a href="{{ URL::to('buy/point')}}">here</a>
                </p>
              </div>
            @else

            {{Former::hidden('mediaId')->value($m->_id) }}

            <div class="separator top">
              <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check-square-o"></i> Buy</button>
              <a type="button" href="{{ URL::to('mymumomu') }}" class="btn btn-default"><i class="fa fa-fw fa-times"></i> Cancel</a>
            </div>

            @endif

        {{ Former::close()}}
      </div>

    </div>
  </div>
</div>
<!-- // Widget END -->


@stop