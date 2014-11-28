var thumb = '<table class="table" id="par_'+ file.file_id +'" >' +
    '    <tr>' +
    '        <td>' + file.thumbnail + '<br />' +
    '            <span class="file_copy" data-clipboard-text="'+ file.url +'"><i class="fa fa-copy"></i> copy URL</span>' +
    '        </td>' +
    '    </tr>' +
    '    <tr>' +
    '        <td><span class="img-title">' + file.name + '</span>&nbsp;<span class="file_del" ><i class="file_del fa fa-trash-o" id="' + file.file_id +'"></i></span></td>' +
    '    </tr>' +
'</table>';