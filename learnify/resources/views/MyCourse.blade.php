@extends('layout.app')

@section('content')

<body class="bg-white text-gray-700 antialiased">

    <div class="flex items-center justify-center">
        <div class="space-y-6 w-full max-w-3xl">
            <h1 class="text-lg font-bold">My Courses</h1>
            <ul class="space-y-4">

                @forelse($courses as $course)
                    <li>
                        <div class="flex bg-gray-300 m-auto rounded-lg shadow items-center justify-between p-4">

                            <img class="rounded-xl w-[120px]"
                                 src="{{ asset($course->image) }}"
                                 alt="{{ $course->title }}"
                                 onerror="this.src='{{ asset('webdev.png') }}'">

                            <div class="flex-1 flex flex-col ml-4">
                                <h1 class="text-lg font-bold">{{ $course->title }}</h1>

                                {{-- Waktu user enroll --}}
                                <p class="text-sm text-gray-700">
                                    Enrolled: {{ $course->pivot->created_at->format('d M Y') }}
                                </p>

                                {{-- Waktu course di-update --}}
                                <p class="text-sm text-gray-700">
                                    Updated: {{ $course->updated_at->diffForHumans() }}
                                </p>
                            </div>

                            <div class="flex-col text-center min-w-[120px]">
                                <button type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 
                                        focus:ring-4 focus:ring-blue-300 
                                        font-medium rounded-full text-sm px-5 py-2.5">
                                    Continue
                                </button>
                            </div>

                        </div>
                    </li>
                @empty
                    <li class="text-center text-gray-500 py-4">
                        You have not enrolled in any courses yet.
                    </li>
                @endforelse

            </ul>
        </div>
    </div>

</body>
@endsection
