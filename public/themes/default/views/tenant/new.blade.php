@extends('layout.front')


@section('content')

<h3>{{$title}}</h3>

{{Former::open_for_files($submit,'POST',array('class'=>'custom addAttendeeForm'))}}

<div class="row-fluid">
    <div class="span6">

        {{ Former::select('salutation')->options(Config::get('kickstart.salutation'))->label('Salutation')->class('span2') }}
        {{ Former::text('firstname','First Name') }}
        {{ Former::text('lastname','Last Name') }}
        {{ Former::text('phone','Phone') }}

        {{ Former::text('address','Address') }}
        {{ Former::text('city','City') }}
        {{ Former::text('zipCode','ZIP / Postal Code')->id('zip')->class('span2')->maxlength(5) }}
        <div class="us" style="display:none;">
            {{ Former::select('state')->class('us')->options(Config::get('country.us_states'))->label('State')->style('display:none;')->id('us_states') }}
        </div>
        <div class="au" style="display:none;">
            {{ Former::select('state')->class('au')->options(Config::get('country.aus_states'))->label('State')->style('display:none;')->id('au_states') }}
        </div>
        <div class="outside">
            {{ Former::text('state','State / Province')->class('outside span6')->id('other_state') }}
        </div>

        {{ Former::select('countryOfOrigin')->id('country')->options(Config::get('country.countries'))->label('Country of Origin') }}
    </div>
    <div class="span6">
        {{ Former::text('email','Email') }}

        {{ Former::password('pass','Password')->help('Leave blank for no changes') }}
        {{ Former::password('repass','Repeat Password') }}

    </div>
</div>

<div class="row-fluid right">
    <div class="span12">
        {{ Form::submit('Save',array('class'=>'btn btn-primary'))}}&nbsp;&nbsp;
        {{ HTML::link($back,'Cancel',array('class'=>'btn'))}}
    </div>
</div>
{{Former::close()}}

{{ HTML::script('js/wysihtml5-0.3.0.min.js') }}
{{ HTML::script('js/parser_rules/advanced.js') }}

<script type="text/javascript">


$(document).ready(function() {

    $('#name').keyup(function(){
        var title = $('#name').val();
        var slug = string_to_slug(title);
        $('#permalink').val(slug);
    });

});

</script>

@stop