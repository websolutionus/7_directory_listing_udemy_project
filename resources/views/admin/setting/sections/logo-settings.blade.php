<div class="tab-pane fade show" id="contact4" role="tabpanel" aria-labelledby="home-tab4">
    <div class="card border">
      <div class="card-body">
          <form action="{{ route("admin.logo-settings.update") }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Logo <span class="text-danger">*</span></label>
                        <div id="image-preview" class="image-preview preview-1">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="logo" id="image-upload" />
                            <input type="hidden" name="old_logo" value="{{ config('settings.logo') }}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Favicon <span class="text-danger">*</span></label>
                        <div id="image-preview-2" class="image-preview preview-2">
                            <label for="image-upload-2" id="image-label-2">Choose File</label>
                            <input type="file" name="favicon" id="image-upload-2" />
                            <input type="hidden" name="old_favicon" value="{{ config('settings.favicon') }}">

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
        $.uploadPreview({
            input_field: "#image-upload-2", // Default: .image-upload
            preview_box: "#image-preview-2", // Default: .image-preview
            label_field: "#image-label-2", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false, // Default: false
            success_callback: null // Default: null
        });

        $(document).ready(function() {
            $('.preview-1').css({
                'background-image': 'url({{ config("settings.logo") }})',
                'background-size': 'cover',
                'background-position': 'center center'
            });

            $('.preview-2').css({
                'background-image': 'url({{ config("settings.favicon") }})',
                'background-size': 'cover',
                'background-position': 'center center'
            });
        })
    </script>
@endpush
