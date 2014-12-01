{{Former::open_for_files( URL::to('medialib/album') ,'POST',array('class'=>'','id'=>'upload-form'))}}

    <div class="row">
        <div class="col-md-6">
            <div class="innerLR">
                {{ Former::text('title','Title') }}
                {{ Former::hidden('type','music')->id('media-type') }}
                {{ Former::text('artist','Artist') }}
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

                {{ $fupload->id('albumcoverupload')->title('Select Cover')->label('Upload Cover')
                    ->url('upload/cover/albumcover')
                    ->singlefile(true)
                    ->prefix('albumcover')
                    ->multi(false)->make() }}

                {{ $fupload->id('albummediaupload')->title('Select Media')->label('Upload Media')
                    ->url('upload/media/albummedia')
                    ->singlefile(false)
                    ->prefix('albummedia')
                    ->multi(true)->make() }}
            </div>
        </div>
    </div>
    <!-- Form actions -->
    <div class="separator top">
        <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check-square-o"></i> Save</button>
        <button type="button" class="btn btn-default"><i class="fa fa-fw fa-times"></i> Cancel</button>
    </div>
    <!-- // Form actions END -->


{{Former::close()}}

        <script type="text/javascript">
            $(document).ready(function(){
            });
        </script>
        <style type="text/css">
            #coverupload_files ul,
            #coverupload_uploadedform ul{
                margin-left: -15px;
            }
        </style>
