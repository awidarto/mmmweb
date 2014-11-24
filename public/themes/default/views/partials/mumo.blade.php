{{Former::open_for_files( URL::to('medialib/post') ,'POST',array('class'=>'','id'=>'upload-form'))}}

    <div class="row">
        <div class="col-md-6">
            <div class="innerLR">
                {{ Former::text('title','Title') }}
                {{ Former::hidden('type','music')->id('media-type') }}
                {{ Former::text('artist','Artist') }}
                {{ Former::text('album','Album') }}
                {{ Former::text('genre','Genre')->class('tag_genre') }}
                {{ Former::select('countryOfOrigin')->options(Config::get('country.countries'))->label('Country') }}

                {{ Former::text('price','Price (IDR)') }}
                {{ Former::text('tags','Tags')->class('tag_keyword') }}
            </div>
        </div>
        <div class="col-md-6">
            <div class="innerLR">

                <?php
                    $fupload = new Fupload();
                ?>

                {{ $fupload->id('coverupload')->title('Select Cover')->label('Upload Cover')
                    ->url('upload/cover')
                    ->singlefile(true)
                    ->prefix('cover')->multi(false)->make() }}

                {{ $fupload->id('mediaupload')->title('Select Media')->label('Upload Media')
                    ->url('upload/media')
                    ->singlefile(true)
                    ->prefix('media')->multi(false)->make() }}
            </div>
        </div>
    </div>

    <div class="form-group form-actions">
        <div class="col-xs-12 text-right">
            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-sm btn-primary">Save</button>
        </div>
    </div>

{{Former::close()}}

        <script type="text/javascript">
            $(document).ready(function(){
                $('#add-music').on('click',function(e){
                    e.preventDefault();
                    $('#media-type').val('music');
                    $('#modal-upload').modal('show');
                });

                $('#add-movie').on('click',function(e){
                    e.preventDefault();
                    $('#media-type').val('video');
                    $('#modal-upload').modal('show');
                });

                $('#modal-upload').on('hidden.bs.modal', function (e) {
                    $('#coverupload_files ul').empty();
                    $('#coverupload_uploadedform ul').empty();
                    $('#mediaupload_files ul').empty();
                    $('#mediaupload_uploadedform ul').empty();
                })

                /*
                $('#upload-form').submit(function(e){
                    e.preventDefault();
                    $(this).ajaxSubmit({
                        url:'{{ URL::to('media/post')}}',
                        dataType:'json',
                        success:function(){
                            $('#modal-upload').modal('hide');
                        }
                    })
                });
                */

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
