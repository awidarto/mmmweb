@extends('layout.coralfront')


@section('content')

<!-- Widget -->
<div class="widget widget-tabs border-bottom-none">
  <div class="widget-body">

    <h2>Current Credit : {{ Ks::getAvailableCredit() }}</h2>

    <div class="row">
      <!-- Column -->
      <div class="col-md-6">
        {{ Former::open_vertical('buy/point')}}
            <h4>Use Voucher Code</h4>
            {{ Former::text('vcode','Voucher Code')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Repeat Password"><i class="fa fa-question-circle"></i></div>')}}
            <div class="separator top">
              <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check-square-o"></i> Submit</button>
              <a type="button" href="{{ URL::to('mymumomu') }}" class="btn btn-default"><i class="fa fa-fw fa-times"></i> Cancel</a>
            </div>
        {{ Former::close()}}

      </div>
      <div class="col-md-6">
        <h4>Pay Using Doku</h4>
        {{ Former::open_vertical('buy/paydoku')}}
            {{ Former::text('amount','Credit Amount')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="First name is mandatory"><i class="fa fa-question-circle"></i></div>')}}

            <div class="separator top">
              <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check-square-o"></i> Pay Doku</button>
              <a type="button" href="{{ URL::to('mymumomu') }}" class="btn btn-default"><i class="fa fa-fw fa-times"></i> Cancel</a>
            </div>
        {{ Former::close()}}

      </div>
    </div>
  </div>
</div>
<!-- // Widget END -->



@stop
