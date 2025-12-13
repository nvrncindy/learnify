@extends('layout.app')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">

        <div class="col-lg-8">

            {{-- COURSE TITLE --}}
            <div class="text-center mb-4">
                <h1 class="fw-bold">{{ $course->title }}</h1>
            </div>

            {{-- VIDEO MOCKUP --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-body p-0">
                    @if(!empty($course->links))
                        <div class="ratio ratio-16x9">
                            <iframe src="{{ $course->links }}" allowfullscreen></iframe>
                        </div>
                    @else
                        <div class="d-flex align-items-center justify-content-center bg-dark text-white"
                             style="height: 360px;">
                            <div class="text-center">
                                <h5>Course Video</h5>
                                <p class="text-muted mb-0">Video materi akan ditampilkan di sini</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="my-4"></div>

            {{-- QUESTION 1 --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">Question 1</h5>
                    <p>Lorem ipsum dolor sit amet.</p>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="q1">
                        <label class="form-check-label">Option 1</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="q1">
                        <label class="form-check-label">Option 2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q1">
                        <label class="form-check-label">Option 3</label>
                    </div>
                </div>
            </div>

            {{-- QUESTION 2 --}}
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="fw-bold">Question 2</h5>
                    <p>Lorem ipsum dolor sit amet.</p>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="q2">
                        <label class="form-check-label">Option 1</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="q2">
                        <label class="form-check-label">Option 2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2">
                        <label class="form-check-label">Option 3</label>
                    </div>
                </div>
            </div>

            {{-- SUBMIT --}}
            <div class="text-center">
                <button onclick="validateQuiz()"
                        class="btn btn-primary btn-lg rounded-pill px-5">
                    Submit
                </button>
            </div>

        </div>
    </div>
</div>

{{-- VALIDATION SCRIPT --}}
<script>
function validateQuiz() {
    const q1Checked = document.querySelector('input[name="q1"]:checked');
    const q2Checked = document.querySelector('input[name="q2"]:checked');

    if (!q1Checked && !q2Checked) {
        alert('Please answer all questions before submitting.');
        return;
    }

    if (!q1Checked || !q2Checked) {
        alert('There are still unanswered questions.');
        return;
    }

    // kalau semua sudah diisi
    window.location.href = "{{ route('MyCourse') }}";
}
</script>

@endsection
