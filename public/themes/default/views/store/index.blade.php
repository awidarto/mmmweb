@extends('layout.coralfront')

@section('content')

<!-- col -->
<div class="col-md-12">
        <div class="box-generic">

            <div class="separator top">
                <h4>Highlights</h4>
                @include('partials.gallery',array('media'=>$media))
            </div>

            <div class="separator top">
                <h4>New Releases</h4>
                @include('partials.gallery',array('media'=>$media))
            </div>

            <div class="separator top">
                <h4>Best Sellers</h4>
                @include('partials.gallery',array('media'=>$media))
            </div>

        </div>
    </div>

</div>
<!-- // END col -->


@stop