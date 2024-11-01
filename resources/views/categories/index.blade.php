<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between mb-3">
                    <h1 class="text-2xl font-bold">Category</h1>
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
                </div>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mt-5">
                    @if(isset($selectedCategory))
                        <h2 class="text-xl font-bold">Category Details</h2>
                        <p><strong>ID:</strong> {{ $selectedCategory->id }}</p>
                        <p><strong>Name:</strong> {{ $selectedCategory->name }}</p>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to Categories List</a>
                    @else
                        <table class="table table-bordered mt-3">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>
                                            <a href="{{ route('categories.index') }}?category_id={{ $category->id }}">{{ $category->name }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('categories.destroy', $category->id) }}" method="post" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
