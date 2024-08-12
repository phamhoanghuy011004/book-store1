@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Name</th>
            <th>Author</th>
            <th>Description</th>
            <th>Category</th>
            <th>Content</th>
            <th>Publish at</th>
            <th>Image</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Active</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->author }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->content }}</td>
                <td>{{ $product->publish_at }}</td>
                <th><img class="img-thumbnail" style="width: 100px" src="{{$product->image}}" alt=""></th>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
                <td>{{ $product->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/products/edit/{{ $product->id }}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" href="/admin/products/destroy/{{ $product->id }}">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('pagination.default', ['paginator' => $list])
@endsection
