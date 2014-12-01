<!--
    available vars :
        filename
        thumbnail_url
        full_url
        file_id
-->
<table class="table" id="par_{{ $file_id }}" >
    <tr>
        <td>
            @if($is_audio == 1)
                {{ View::make('media.audio')->with('title',$filename)->with('artist','-')->with('source',$full_url)->render() }}
            @elseif($is_video == 1)
                {{ View::make('media.video')->with('type',$filetype)->with('source',$full_url)->render() }}
            @endif
            <br />
            <span class="file_copy" data-clipboard-text="{{ $full_url }}><i class="icon-copy"></i> copy URL</span>
        </td>
    </tr>
    <tr>
        <td><input name="mediatitle[]" type="text" class="form-control" value="{{ $filetitle }}"></td>
    </tr>
    <tr>
        <td><span class="img-title">{{ $filename }}</span>&nbsp;<span class="file_del" ><i class="file_del fa fa-trash-o" id="{{ $file_id }}"></i></span></td>
    </tr>
    <tr>
        <td></td>
    </tr>
</table>
