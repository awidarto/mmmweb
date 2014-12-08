@extends('layout.coralfront')

@section('content')

<!-- col -->
<div class="col-md-12">
        <div class="box-generic">

        <!-- Tabs Heading -->
        <div class="tabsbar">
            <ul>
                <li class="glyphicons albums tab-stacked {{ at('list',$active) }}"><a href="{{ URL::to('medialib') }}"><i></i> <span>My Media</span></a></li>
                <li class="glyphicons circle_plus tab-stacked {{ at('upload',$active) }}"><a href="{{ URL::to('medialib/upload') }}"><i></i> <span>Add Music / Movie</span></a></li>
                <li class="glyphicons folder_plus tab-stacked {{ at('createalbum',$active) }}"><a href="{{ URL::to('medialib/album') }}"><i></i> <span>Create Album</span></a></li>
            </ul>
        </div>
        <!-- // Tabs Heading END -->

        <div class="tab-content">

            <!-- Tab content -->
            <div class="tab-pane {{ at('list',$active) }}" id="tab1">
                <h4>My Media</h4>
                @if($active == 'list')
                    @include('partials.gallery',array('media'=>$media))
                @endif
            </div>
            <!-- // Tab content END -->

            <!-- Tab content -->
            <div class="tab-pane {{ at('upload',$active) }}" id="tab2">
                <h4>Upload Music / Movie</h4>
                @if($active == 'upload')
                    @include('partials.mumo')
                @endif
            </div>
            <!-- // Tab content END -->

            <!-- Tab content -->
            <div class="tab-pane {{ at('createalbum',$active) }}" id="tab3">
                <h4>Create Album</h4>
                @if($active == 'createalbum')
                    @include('partials.albumcreate')
                @endif
            </div>
            <!-- // Tab content END -->

        </div>
    </div>

</div>
<!-- // END col -->
<script type="text/javascript">
    $(document).ready(function(){

        $('.tag_genre').tagsInput({
            'autocomplete_url': base + 'ajax/genre',
           'height':'100px',
           'width':'100%',
           'interactive':true,
           'onChange' : function(c){

                },
           'onAddTag' : function(t){
                    console.log(t);
                },
           'onRemoveTag' : function(t){
                    console.log(t);
                },
           'defaultText':'add tag',
           'removeWithBackspace' : true,
           'minChars' : 0,
           'maxChars' : 0, //if not provided there is no limit,
           'placeholderColor' : '#666666'
        });

        $('.tag_keyword').tagsInput({
            'autocomplete_url': base + 'ajax/tag',
           'height':'100px',
           'width':'100%',
           'interactive':true,
           'onChange' : function(c){

                },
           'onAddTag' : function(t){
                    console.log(t);
                },
           'onRemoveTag' : function(t){
                    console.log(t);
                },
           'defaultText':'add tag',
           'removeWithBackspace' : true,
           'minChars' : 0,
           'maxChars' : 0, //if not provided there is no limit,
           'placeholderColor' : '#666666'
        });

    });
</script>
<style type="text/css">
    #coverupload_files ul,
    #coverupload_uploadedform ul{
        margin-left: -15px;
    }
</style>


@stop