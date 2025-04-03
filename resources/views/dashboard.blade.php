@extends('layouts.master_layout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Page Title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0"><i class="fas fa-tachometer-alt"></i> Dashboard</h4>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Blog Categories</li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Blog Categories Section -->
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="fas fa-folder"></i> Blog Categories</h5>
                    <a href="{{ route('categories.create') }}" class="btn btn-light btn-sm">
                        <i class="fas fa-plus"></i> Add New
                    </a>
                </div>
                <div class="card-body">
                    @if ($categories->isEmpty())
                        <p class="text-center text-muted">No blog categories found.</p>
                    @else
                        <ul class="list-group">
                            @foreach ($categories as $category)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>{{ $category->name }}</strong> <br>
                                        <small class="text-muted">{{ $category->slug }}</small>
                                    </div>
                                    <div>
                                        <button class="btn btn-sm toggle-status {{ $category->status ? 'btn-success' : 'btn-danger' }}"
                                            data-id="{{ $category->id }}">
                                            {{ $category->status ? 'Active' : 'Inactive' }}
                                        </button>
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button class="btn btn-danger btn-sm delete-category" data-id="{{ $category->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        // Toggle Status
        $('.toggle-status').click(function () {
            let button = $(this);
            let categoryId = button.data('id');

            $.ajax({
                url: "{{ route('blogCategories.toggleStatus') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: categoryId
                },
                success: function (response) {
                    if (response.status) {
                        button.removeClass('btn-danger').addClass('btn-success').text('Active');
                    } else {
                        button.removeClass('btn-success').addClass('btn-danger').text('Inactive');
                    }
                },
                error: function (xhr, status, error) {
                    alert('Error: ' + xhr.responseText);
                }
            });
        });

        // Delete Category (AJAX)
        $('.delete-category').click(function () {
            let button = $(this);
            let categoryId = button.data('id');

            if (confirm('Are you sure you want to delete this category?')) {
                $.ajax({
                    url: "{{ url('/blog-categories') }}/" + categoryId,
                    type: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        button.closest('li').fadeOut();
                    },
                    error: function (xhr, status, error) {
                        alert('Failed to delete category: ' + xhr.responseText);
                    }
                });
            }
        });

    });
</script>
@endpush
