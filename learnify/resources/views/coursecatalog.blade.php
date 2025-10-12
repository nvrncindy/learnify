<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Course Catalogue</title>


  <script src="https://cdn.tailwindcss.com"></script>

  <style>
  
    .course-desc {
      white-space: normal !important;
      overflow: visible !important;
      text-overflow: clip !important;
      max-height: none !important;
      line-height: 1.6;
    }

    
    .card-bg { background: rgba(0,0,0,0.04); }

    .star { color: #f6c23e; }

    .apply-btn {
      background: linear-gradient(180deg,#22d3ee,#06b6d4);
      box-shadow: 0 2px 6px rgba(6,182,212,0.12);
    }

 
    .course-thumb {
      width: 112px;  
      height: 80px;   
      object-fit: cover;
      display: block;
    }

  
    @media (max-width: 640px) {
      .course-thumb { width: 96px; height: 72px; }
      .card-grid { gap: 1rem; }
    }
  </style>
</head>
<body class="bg-white text-gray-700 antialiased">
  <div class="min-h-screen p-6">
    <header class="bg-gray-200 rounded-b px-6 py-4 mb-6 flex items-center justify-between">
      <h1 class="text-2xl font-medium text-center w-full">Course Catalogue</h1>
      <div class="w-6 h-6 bg-white border rounded shadow-sm ml-auto"></div>
    </header>

    <div class="container mx-auto">
      <div class="flex justify-end mb-6">
        <form method="get" action="{{ route('courses.index') }}" class="flex items-center space-x-2">
          <select name="filter" class="border px-3 py-1 rounded text-sm">
            <option value="">Filter Dropdown</option>
            <option value="popular">Most popular</option>
            <option value="cheap">Price: low to high</option>
          </select>
          <input type="text" name="q" placeholder="search..." value="{{ request('q') }}" class="border px-3 py-1 rounded text-sm" />
          <button type="submit" class="px-3 py-1 bg-gray-100 border rounded">Go</button>
        </form>
      </div>

      <div class="space-y-6 card-grid">
        @forelse( ($courses ?? []) as $course )
          <div class="flex items-start card-bg rounded-xl p-4 shadow-sm">
            <div class="flex-shrink-0 mr-6">
              {{-- use asset() so it points to public/ (image should be in public/) --}}
              <img
                src="{{ asset($course->image ?? 'webdev.png') }}"
                alt="{{ $course->title }}"
                class="course-thumb rounded-lg border bg-white"
                onerror="this.src='{{ asset('webdev.png') }}'">
            </div>

            <div class="flex-1">
              <div class="flex items-start justify-between">
                <div>
                  <h3 class="font-semibold text-sm">{{ $course->title }}</h3>

                  <div class="flex items-center mt-1 space-x-3 text-xs">
                    <div class="flex items-center">
                      <span class="star">★</span>
                      <span class="ml-1">{{ number_format($course->rating ?? 0, 1) }}</span>
                    </div>

                    <div class="text-xs text-gray-600">Rp {{ number_format($course->price ?? 0, 0, ',', '.') }}</div>
                  </div>
                </div>

                <div class="ml-6 flex-shrink-0">
                  <a href="{{ url('/courses/'.$course->id.'/apply') }}"
                     class="inline-block px-3 py-1.5 rounded-full text-xs font-semibold text-white apply-btn shadow">
                    Apply
                  </a>
                </div>
              </div>

              {{-- FULL description displayed here (no truncation) --}}
              <div class="mt-3 text-sm text-gray-700 course-desc">
                {!! nl2br(e($course->full_description ?? $course->short_description ?? 'Course description not available.')) !!}
              </div>
            </div>
          </div>
        @empty
          <div class="text-center text-gray-500">No courses found.</div>
        @endforelse
      </div>
    </div>
  </div>
</body>
</html>
