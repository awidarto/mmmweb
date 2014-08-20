<script type="text/javascript">
    $(document).ready(function(){

    });

</script>
<style type="text/css">
    b.icon-caret-down{
        margin-left: 8px;
    }

    .nav-tabs.nav-stacked>li>ul>li>a {
        padding: 10px 25px;
    }

    .nav-tabs.nav-stacked>li>ul>li>ul>li>a {
        padding: 10px 28px;
    }

    .nav-tabs.nav-stacked>li>ul>li>ul>li>a{
        color: #fff;
        border: 0;
        background: transparent;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        text-decoration: none;
        display: block;
    }

    .box{
        overflow-x: auto !important;
        background-color: white;
    }

    .box-content{
        display:block !important;
    }

    #sidebar-left .label {
        -webkit-border-radius: 2px 0 0 2px;
        -moz-border-radius: 2px 0 0 2px;
        border-radius: 2px 0 0 2px;
        position: absolute;
        right: 0;
        background: transparent;
        color: white;
    }
</style>

@if( isset(Auth::user()->organization['apptype']) && Auth::user()->organization['apptype'] != '')
    @include('appmenus.'.Auth::user()->organization['apptype'])
@endif
