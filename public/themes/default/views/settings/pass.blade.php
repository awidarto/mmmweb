<div class="widget widget-tabs border-bottom-none">
  <div class="widget-body">
    <div class="row">
      <!-- Column -->
      <div class="col-md-4">

        <h4 class="innerTB">Change your Password</h4>
        {{ Former::open_vertical('settings/pass')}}
          {{ Former::password('password','Password')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="First name is mandatory"><i class="fa fa-question-circle"></i></div>')}}
          {{ Former::password('repass','Repeat Password')->append('<div class="add-on" data-toggle="tooltip" data-container="body" data-placement="top" data-original-title="Repeat Password"><i class="fa fa-question-circle"></i></div>')}}

          <div class="separator top">
              <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-check-square-o"></i> Save changes</button>
              <a type="button" href="{{ URL::to('mymumomu') }}" class="btn btn-default"><i class="fa fa-fw fa-times"></i> Cancel</a>
          </div>
        </form>


      </div>
    </div>
  </div>
</div>
