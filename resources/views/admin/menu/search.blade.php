@extends('admin.main')

@section('content')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
    <form method="GET" action="{{ route('search') }}">
        <div>
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" placeholder="Enter ID">
        </div>
        <div>
            <label for="start_date">Start date:</label>
            <input type="date" id="start_date" name="start_date">
        </div>
        <div>
            <label for="end_date">End date:</label>
            <input type="date" id="end_date" name="end_date">
        </div>
        <div>
            <label for="active">Status:</label>
            <select id="active" name="active">
                <option value="">Active</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit">Filter</button>
    </form>
    @if ($hasFilters)
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Content</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Active</th>
        </tr>
        @foreach ($menus as $menu)
            <tr>
                <th>{{ $menu->id }}</th>
                <th>{{ $menu->name }}</th>
                <th>{{ $menu->description }}</th>
                <th>{{ $menu->content }}</th>
                <th>{{ $menu->created_at }}</th>
                <th>{{ $menu->updated_at }}</th>
                <th>{{ $menu->active }}</th>
            </tr>
        @endforeach
        </thead>
        <tbody>
        </tbody>
    </table>
    @else
        <p>Please apply a filter to see the menu list.</p>
    @endif
@endsection
