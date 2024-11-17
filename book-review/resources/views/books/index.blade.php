@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2xl">Books</h1>

    <form
        method="GET"
        action={{ route('books.index') }}
        class="mb-4 flex items-center space-x-2"
    >
        <input
            type="text"
            class="input h-10"
            value="{{ request('title') }}"
            name="title"
            placeholder="Search by title..."
        />
        <button
            type="submit"
            class="btn"
        >
            Search:
        </button>
        <a
            href="{{ route('books.index') }}"
            class="btn h-10"
        >
            Clear
        </a>
    </form>

    <ul>
        @forelse ($books as $book)
            <li class="mb-4">
                <div class="book-item">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="w-full flex-grow sm:w-auto">
                            <a
                                href={{ route('books.show', $book->id) }}
                                class="book-title"
                            >
                                {{ $book->title }}
                            </a>
                            <span class="book-author">
                                {{ $book->author }}
                            </span>
                        </div>
                        <div>
                            <div class="book-rating">
                                {{ number_format($book->reviews_avg_rating, 1) }}
                            </div>
                            <div class="book-review-count">
                                out of {{ $book->reviews_count }} {{ Str::plural('review', $book->reviews_count) }}
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @empty
            <li class="mb-4">
                <div class="empty-book-item">
                    <p class="empty-text">No books found</p>
                    <a
                        href="#"
                        class="reset-link"
                    >
                        Reset criteria
                    </a>
                </div>
            </li>
        @endforelse
    </ul>
@endsection