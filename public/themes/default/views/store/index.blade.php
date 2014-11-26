@extends('layout.coralfront')

@section('content')

<!-- col -->
<div class="col-md-12">
        <div class="box-generic">

                <h4>Latest</h4>
                @include('partials.gallery',array('media'=>$media))

                <h4>Upload Music / Movie</h4>
                @include('partials.gallery',array('media'=>$media))

                <h4>Create Album</h4>
                @include('partials.gallery',array('media'=>$media))

        </div>
    </div>

</div>
<!-- // END col -->


@stop