@extends('admin.main')

@section('content')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="name">Tên Sản Phẩm</label>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Nhập tên sản phẩm">
            </div>

            <div class="form-group">
                <label>Tác Giả</label>
                <input type="text" name="author" value="{{ $product->author }}" class="form-control" placeholder="Nhập tên tác giả">
            </div>

            <div class="form-group">
                <label>Mô Tả</label>
                <textarea name="description" class="form-control">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label>Thể Loại</label>
                <input type="text" name="category" value="{{ $product->category }}" class="form-control" placeholder="Nhập thể loại">
            </div>

            <div class="form-group">
                <label>Mô Tả Chi Tiết</label>
                <textarea name="content" id="content" class="form-control">{{ $product->content }}</textarea>
            </div>

            <div class="form-group">
                <label>Ngày Xuất Bản</label>
                <input type="number" name="publish_at" value="{{ $product->publish_at }}" class="form-control" placeholder="Nhập năm xuất bản">
            </div>

            <div class="form-group">
                <label>Ảnh</label>
                <input type="hidden" name="image" value="{{ $product->image }}" class="form-control"/>
                <button class="btn btn-primary mt-2" type="button" id="upload_widget">Upload ảnh</button>
            </div>

            <div class="form-group">
                <label>Số Lượng</label>
                <input type="number" name="amount" value="{{ $product->amount }}" class="form-control" placeholder="Nhập số lượng">
            </div>

            <div class="form-group">
                <label>Giá</label>
                <input type="number" name="price" value="{{ $product->price }}" class="form-control" placeholder="Nhập giá sản phẩm">
            </div>

            <div class="form-group">
                <label>Trạng Thái</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active"
                           name="status" {{ $product->status == 1 ? 'checked' : '' }}>
                    <label for="active" class="custom-control-label">Kích Hoạt</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active"
                           name="status" {{ $product->status == 0 ? 'checked' : '' }}>
                    <label for="no_active" class="custom-control-label">Không Kích Hoạt</label>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Cập Nhật Sản Phẩm</button>
        </div>
        @csrf
    </form>
    <script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        var myWidget = cloudinary.createUploadWidget({
                cloudName: 'dficfkyug',
                uploadPreset: 'hellopreset'}, function (error, result) {
                if (!error && result && result.event === "success") {
                    document.forms['menu-form']['image'].value = result.info.secure_url;
                }
            }
        )

        document.getElementById("upload_widget").addEventListener("click", function(){
            myWidget.open();
        }, false);
    </script>
@endsection

@section('footer')
@endsection
