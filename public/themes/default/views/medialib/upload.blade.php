@extends('layout.coralfront')

@section('content')

<?php
    function at($tab, $active){
        if($tab == $active){
            return 'active';
        }else{
            return '';
        }
    }
?>

<!-- col -->
<div class="col-md-12">
        <div class="box-generic">

        <!-- Tabs Heading -->
        <div class="tabsbar">
            <ul>
                <li class="glyphicons albums tab-stacked {{ at('list',$active) }}"><a href="#tab1" data-toggle="tab"><i></i> <span>My Media</span></a></li>
                <li class="glyphicons circle_plus tab-stacked {{ at('upload',$active) }}"><a href="#tab2" data-toggle="tab"><i></i> <span>Add Music / Movie</span></a></li>
                <li class="glyphicons folder_plus tab-stacked {{ at('createalbum',$active) }}"><a href="#tab3" data-toggle="tab"><i></i> <span>Create Album</span></a></li>
            </ul>
        </div>
        <!-- // Tabs Heading END -->

        <div class="tab-content">

            <!-- Tab content -->
            <div class="tab-pane {{ at('list',$active) }}" id="tab1">
                <h4>My Media</h4>
                @include('partials.gallery',array('media'=>$media))
            </div>
            <!-- // Tab content END -->

            <!-- Tab content -->
            <div class="tab-pane {{ at('upload',$active) }}" id="tab2">
                <h4>Upload Music / Movie</h4>
                @include('partials.mumo')
            </div>
            <!-- // Tab content END -->

            <!-- Tab content -->
            <div class="tab-pane {{ at('createalbum',$active) }}" id="tab3">
                <h4>Create Album</h4>
            </div>
            <!-- // Tab content END -->

        </div>
    </div>

</div>
<!-- // END col -->


@stop