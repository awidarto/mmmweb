@extends('layout.coralfront')

@section('content')

<!-- col -->
<div class="col-md-12">
        <div class="box-generic">

            <div class="separator top">
                @include('partials.coverflow',array('media'=>$media))
            </div>

            <div class="separator top">
                @include('partials.hstrip',array('media'=>$media,'title'=>'New Releases'))
            </div>

            <div class="separator top">
                @include('partials.hstrip',array('media'=>$media,'title'=>'Best Sellers'))
            </div>

        </div>
    </div>

</div>
<!-- // END col -->
{{ HTML::style('css/sly-horizontal.css')}}

{{ HTML::script('js/sly.min.js')}}

<script type="text/javascript">
    $(document).ready(function(){
        var $frame = $('#effects');
        var $wrap  = $frame.parent();

        // Call Sly on frame
        $frame.sly({
            horizontal: 1,
            itemNav: 'forceCentered',
            smart: 1,
            activateMiddle: 1,
            activateOn: 'click',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,
            startAt: 3,
            scrollBar: $wrap.find('.scrollbar'),
            scrollBy: 1,
            speed: 300,
            elasticBounds: 1,
            easing: 'swing',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,

            // Buttons
            prev: $wrap.find('.prev'),
            next: $wrap.find('.next')
        });

        var $hframe  = $('#basic');
        var $hslidee = $hframe.children('ul').eq(0);
        var $wrap   = $hframe.parent();

        // Call Sly on frame
        $hframe.sly({
            horizontal: 1,
            itemNav: 'basic',
            smart: 1,
            activateOn: 'click',
            mouseDragging: 1,
            touchDragging: 1,
            releaseSwing: 1,
            startAt: 3,
            scrollBar: $wrap.find('.scrollbar'),
            scrollBy: 1,
            pagesBar: $wrap.find('.pages'),
            activatePageOn: 'click',
            speed: 300,
            elasticBounds: 1,
            easing: 'easeOutExpo',
            dragHandle: 1,
            dynamicHandle: 1,
            clickBar: 1,

            // Buttons
            forward: $wrap.find('.forward'),
            backward: $wrap.find('.backward'),
            prev: $wrap.find('.prev'),
            next: $wrap.find('.next'),
            prevPage: $wrap.find('.prevPage'),
            nextPage: $wrap.find('.nextPage')
        });

    });
</script>

@stop