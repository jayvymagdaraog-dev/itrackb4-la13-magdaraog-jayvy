
@extends('layouts.app')

@section('title', 'Movie List')

@section('content')

<div class="container py-4">

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="fw-bold mb-1">Movie List</h2>
                    <p class="text-muted mb-0">Manage your movie collection</p>
                </div>

                <a href="{{ route('movies.create') }}" class="btn btn-primary">
                    + Add New Movie
                </a>
            </div>

            <hr>

            <form action="{{ route('movies.index') }}" method="GET" class="card card-body bg-light mb-4">

                <div class="row g-3">

                    <div class="col-md-3">
                        <label class="form-label fw-bold">Search Movie</label>
                        <input type="text"
                               name="search"
                               class="form-control"
                               placeholder="Enter movie title"
                               value="{{ request('search') }}">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label fw-bold">Filter by Genre</label>
                        <select name="genre_id" class="form-select">
                            <option value="">All Genres</option>

                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}"
                                    @selected(request('genre_id') == $genre->id)>
                                    {{ $genre->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label class="form-label fw-bold">Showing Status</label>
                        <select name="is_showing" class="form-select">
                            <option value="">Any</option>
                            <option value="1" @selected(request('is_showing') === '1')>
                                Yes
                            </option>
                            <option value="0" @selected(request('is_showing') === '0')>
                                No
                            </option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label fw-bold">Sort By</label>
                        <select name="sort" class="form-select">
                            <option value="title" @selected($sort == 'title')>
                                Title
                            </option>
                            <option value="year" @selected($sort == 'year')>
                                Year
                            </option>
                        </select>
                    </div>

                    <div class="col-md-2 d-flex align-items-end gap-2">
                        <button type="submit" class="btn btn-primary">
                            Apply
                        </button>

                        <a href="{{ route('movies.index') }}" class="btn btn-secondary">
                            Clear
                        </a>
                    </div>

                </div>

            </form>

            <div class="mb-4">
                <strong>Filter by Year:</strong>

                @foreach ([2023, 2017, 2018, 2012, 2014] as $y)
                    <a href="{{ route('movies.index', [
                        'search' => request('search'),
                        'genre_id' => request('genre_id'),
                        'is_showing' => request('is_showing'),
                        'sort' => $sort,
                        'year' => $y
                    ]) }}"
                       class="btn btn-outline-primary btn-sm me-1 mb-1">
                        {{ $y }}
                    </a>
                @endforeach

                <a href="{{ route('movies.index') }}"
                   class="btn btn-secondary btn-sm mb-1">
                    Clear Filters
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Rating</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($movies as $movie)
                            <tr>
                                <td>{{ $movie->id }}</td>

                                <td class="fw-semibold">
                                    <a href="{{ route('movies.show', $movie->id) }}"
                                       class="text-decoration-none">
                                        {{ $movie->title }}
                                    </a>
                                </td>

                                <td>
                                    <span class="badge bg-info text-dark">
                                        {{ $movie->genre->name }}
                                    </span>
                                </td>

                                <td>{{ $movie->rating }}/10</td>

                                <td>
                                    {{ $movie->year }}

                                    @if ($movie->year >= 2020)
                                        <span class="badge bg-success">New Release</span>
                                    @else
                                        <span class="badge bg-secondary">Classic</span>
                                    @endif
                                </td>

                                <td>
                                    <div class="d-flex gap-1">
                                        <a href="{{ route('movies.edit', $movie) }}"
                                           class="btn btn-warning btn-sm">
                                            Edit
                                        </a>

                                        <form action="{{ route('movies.destroy', $movie) }}"
                                              method="POST"
                                              onsubmit="return confirm('Delete this record?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    No movies found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>

                <div class="mt-3">
                    {{ $movies->links() }}
                </div>

            </div>

            <hr>

            <p class="text-muted text-end mb-0">
                Prepared by: Jayvy P. Magdaraog
            </p>

        </div>
    </div>

</div>

@endsection
