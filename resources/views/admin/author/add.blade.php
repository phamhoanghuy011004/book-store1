@extends('admin.main')

@section('content')
    <form name="author-form" action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="author">Author Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter author name">
            </div>

            <div class="form-group">
                <label for="bio">Biography</label>
                <textarea name="bio" id="bio" class="form-control" placeholder="Enter author's biography"></textarea>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" placeholder="Enter date of birth">
            </div>

            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" class="form-control" placeholder="Enter nationality">
            </div>

            <div class="form-group">
                <label>Photo</label>
                <input type="hidden" name="photo" class="form-control"/>
                <button class="btn btn-primary mt-2" type="button" id="upload_widget">Upload Photo</button>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email address">
            </div>

            <div class="form-group">
                <label>Status</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="status" checked="">
                    <label for "active" class="custom-control-label">Active</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="inactive" name="status">
                    <label for="inactive" class="custom-control-label">Inactive</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create Author</button>
        </div>
        @csrf
    </form>

    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'dficfkyug',
                uploadPreset: 'hellopreset'
            }, function (error, result) {
                if (!error && result && result.event === "success") {
                    console.log('Done! Here is the photo info: ', result.info.secure_url);
                    document.forms['author-form']['photo'].value = result.info.secure_url;
                }
            }
        );

        document.getElementById("upload_widget").addEventListener("click", function () {
            myWidget.open();
        }, false);
    </script>

@endsection
