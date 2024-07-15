<div class="tab-pane fade show" id="appearace-settings" role="tabpanel" aria-labelledby="appearace-settings">
    <div class="card border">
      <div class="card-body">
          <form action="{{ route("admin.appearance-settings.update") }}" method="POST" enctype="multipart/form-data">
              @csrf

                <div class="form-group">
                    <label>Default Site Color</label>
                    <div class="input-group colorpickerinput">
                      <input type="text" class="form-control" name="site_default_color" value="{{ config('settings.site_default_color') }}">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <i class="fas fa-fill-drip"></i>
                        </div>
                      </div>
                    </div>
                  </div>


              <button type="submit" class="btn btn-primary">Save</button>
          </form>
      </div>
    </div>
  </div>

  @push('scripts')
    <script>
        $(".colorpickerinput").colorpicker({
        format: 'hex',
        component: '.input-group-append',
        });
    </script>
@endpush
