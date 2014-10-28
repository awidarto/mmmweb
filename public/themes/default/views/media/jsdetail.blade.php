var thumb = '<table class="table" id="par_'+ file.file_id +'" >' +
    '    <tr>' +
    '        <td colspan="2">' + file.thumbnail + '<br />' +
    '            <span class="file_copy" data-clipboard-text="'+ file.url +'"><i class="fa fa-copy"></i> copy URL</span>' +
    '        </td>' +
    '    </tr>' +
    '    <tr>' +
    '        <td><span class="img-title">' + file.name + '</span></td>' +
    '        <td><span class="file_del fa fa-trash" id="' + file.file_id +'"></td>' +
    '    </tr>' +
'</table>';