@extends('admin.main')


@section('content')
    <form name="menu-form" action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Menu Name</label>
                <input type="text" name="name" class="form-control"  placeholder="Enter category name">
            </div>

            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="parent_id">
                    <option value="0"> Parent Directory</option>
                    @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Image </label>
                <input type="hidden" name="description" class="form-control"/>
                <button class="btn btn-primary mt-2" type="button" id="upload_widget">Upload image</button>
            </div>

            <div class="form-group">
                <label>Detailed Description</label>
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>


            <div class="form-group">
                <label>Active</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active" checked="">
                    <label for="active" class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active" >
                    <label for="no_active" class="custom-control-label">No</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create Category</button>
        </div>
        @csrf
    </form>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'dficfkyug',
                uploadPreset: 'hellopreset'}, function (error, result) {
                if (!error && result && result.event === "success") {
                    //console.log('Done! Here is the image info: ', result.info.url);
                    console.log('Done! Here is the image info: ', result.info.secure_url);
                    document.forms['menu-form']['description'].value = result.info.secure_url;
                }
            }
        )

        document.getElementById("upload_widget").addEventListener("click", function(){
            myWidget.open();
        }, false);
    </script>

@endsection


