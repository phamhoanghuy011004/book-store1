@extends('admin.main')

@section('content')
    <form name="product-form" action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="product">Product Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter product name">
            </div>

            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" placeholder="Enter author name">
            </div>
            <div class="form-group">
                <label for="author">Category</label>
                <input type="text" name="author" class="form-control" placeholder="Enter category">
            </div>


            <div class="form-group">
                <label>Image</label>
                <input type="hidden" name="image" class="form-control"/>
                <button class="btn btn-primary mt-2" type="button" id="upload_widget">Upload Image</button>
            </div>

            <div class="form-group">
                <label>Detailed Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea name="content" id="content" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="publish_at">Publish Year</label>
                <input type="number" name="publish_at" class="form-control" placeholder="Enter publish year">
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" class="form-control" placeholder="Enter amount">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" step="0.01" name="price" class="form-control" placeholder="Enter price">
            </div>

            <div class="form-group">
                <label>Status</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="status" checked="">
                    <label for="active" class="custom-control-label">Active</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="inactive" name="status">
                    <label for="inactive" class="custom-control-label">Inactive</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create Product</button>
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
                    console.log('Done! Here is the image info: ', result.info.secure_url);
                    document.forms['product-form']['image'].value = result.info.secure_url;
                }
            }
        );

        document.getElementById("upload_widget").addEventListener("click", function () {
            myWidget.open();
        }, false);
    </script>

@endsection
