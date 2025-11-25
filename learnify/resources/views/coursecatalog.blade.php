@extends('layout.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/coursecatalog.css') }}">

<body class="bg-white text-gray-700 antialiased">

<div class="min-h-screen p-6">

    <!-- Header -->
    <header class="bg-gray-200 rounded-b px-6 py-4 mb-6 flex items-center justify-between">
        <h1 class="text-2xl font-medium text-center w-full">Course Catalogue</h1>
        <div class="w-6 h-6 bg-white border rounded shadow-sm ml-auto"></div>
    </header>

    <!-- Card List -->
    <div class="card-list">

        @forelse(($courses ?? []) as $course)
            <div class="course-card">
                <!-- Thumbnail -->
                <div class="thumb-wrapper">
                    <img
                        src="{{ asset($course->image ?? 'webdev.png') }}"
                        alt="{{ $course->title }}"
                        class="thumb"
                        onerror="this.src='{{ asset('webdev.png') }}'">
                </div>

                <!-- Course Content -->
                <div class="content">

                    <div class="top-row">
                        <div>
                            <h3 class="title">{{ $course->title }}</h3>

                            <div class="rating-price">
                                <div class="rating">
                                    <span class="star">★</span>
                                    <span>{{ number_format($course->rating ?? 0, 1) }}</span>
                                </div>
                                <div class="price">Rp {{ number_format($course->price ?? 0, 0, ',', '.') }}</div>
                            </div>
                        </div>

                        <div class="apply-wrapper">
                            <a href="{{ url('/courses/'.$course->id.'/apply') }}" class="apply-btn">
                                Apply
                            </a>
                        </div>
                    </div>

                    <div class="desc">
                        {!! nl2br(e($course->description  ?? 'Course description not available.')) !!}
                    </div>
                </div>
            </div>

        @empty
            <div class="text-center text-gray-500">No courses found.</div>
        @endforelse

    </div>
</div>

</body>
@endsection
