@use('App\Models\Grade')
@use('App\Models\GradeType')
@use('App\Models\GradeReason')
@use('App\Models\Subject')

@extends('layouts.main')

@section('title', 'Strona glowna')

@section('content')

    <div class="row h-100">

        <div class="col-md-4 col-12">
            <a href="" class="text-decoration-none text-light mt-2">
                <div class="bg-dark d-flex mx-auto justify-content-center" style="width: 90%;">
                    <div class="p-2 ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 45 51.648 l 45 -27.845 v -6.422 c 0 -1.595 -1.293 -2.887 -2.887 -2.887 H 2.887 C 1.293 14.494 0 15.786 0 17.381 v 6.422 L 45 51.648 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 45.789 54.688 c -0.011 0.007 -0.023 0.008 -0.033 0.015 c -0.08 0.047 -0.166 0.08 -0.253 0.111 c -0.04 0.014 -0.077 0.035 -0.118 0.046 c -0.115 0.031 -0.233 0.045 -0.353 0.048 c -0.011 0 -0.021 0.004 -0.031 0.004 c 0 0 -0.001 0 -0.001 0 s -0.001 0 -0.001 0 c -0.011 0 -0.021 -0.004 -0.031 -0.004 c -0.119 -0.003 -0.238 -0.018 -0.353 -0.048 c -0.04 -0.011 -0.078 -0.032 -0.118 -0.046 c -0.087 -0.031 -0.172 -0.064 -0.253 -0.111 c -0.011 -0.006 -0.023 -0.008 -0.033 -0.015 L 0 27.331 v 45.289 c 0 1.594 1.293 2.887 2.887 2.887 h 84.226 c 1.594 0 2.887 -1.293 2.887 -2.887 V 27.331 L 45.789 54.688 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="d-table">
                        <h2 class="d-table-cell align-middle m-0 p-0 fw-light">Wiadomosci ></h2>
                    </div>
                </div>
            </a>
            <a href="" class="text-decoration-none text-dark">
                <div class="bg-warning mx-auto mt-4" style="width: 90%;">
                    <div class="d-flex justify-content-center">
                        <div class="p-2 ps-0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 22.105 22.105 L 0.559 43.651 c -0.745 0.745 -0.745 1.953 0 2.699 l 6.094 6.094 c 0.487 -0.749 1.155 -1.413 2.045 -1.908 c 1.95 -1.084 4.418 -0.952 6.215 0.37 c 2.934 2.159 3.164 6.311 0.692 8.783 c -0.293 0.293 -0.61 0.546 -0.944 0.763 l 7.444 7.444 L 45 45 L 22.105 22.105 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(50,171,219); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 43.651 0.559 l -6.094 6.094 c 0.748 0.486 1.412 1.154 1.906 2.042 c 1.085 1.949 0.954 4.418 -0.367 6.215 c -2.158 2.936 -6.312 3.168 -8.785 0.695 c -0.293 -0.293 -0.546 -0.61 -0.763 -0.944 l -7.444 7.444 L 45 45 l 22.895 -22.895 L 46.349 0.559 C 45.604 -0.186 44.396 -0.186 43.651 0.559 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,209,91); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <circle cx="32.12" cy="34.99" r="5.79" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,209,91); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    <circle cx="57.88" cy="9.22" r="5.79" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,209,91); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    <path d="M 51.5 82.584 c -2.472 -2.472 -2.242 -6.624 0.692 -8.783 c 1.797 -1.322 4.265 -1.454 6.215 -0.37 c 0.89 0.494 1.558 1.159 2.045 1.908 l 7.444 -7.444 L 45 45 L 22.105 67.895 l 21.546 21.546 c 0.745 0.745 1.953 0.745 2.699 0 l 6.094 -6.094 C 52.11 83.13 51.793 82.877 51.5 82.584 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(242,112,112); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 85.206 54.152 c -0.578 -0.688 -1.278 -1.191 -2.033 -1.534 l 6.268 -6.268 c 0.745 -0.745 0.745 -1.953 0 -2.699 l -6.094 -6.094 c -0.486 0.748 -1.154 1.412 -2.042 1.906 c -1.949 1.085 -4.418 0.954 -6.215 -0.367 c -2.936 -2.158 -3.168 -6.312 -0.695 -8.785 c 0.293 -0.293 0.61 -0.546 0.944 -0.763 l -7.444 -7.444 l -7.618 7.618 c -0.343 -0.755 -0.847 -1.456 -1.535 -2.034 c -2.282 -1.918 -5.797 -1.75 -7.878 0.385 c -2.209 2.265 -2.192 5.892 0.052 8.136 c 0.507 0.507 1.086 0.893 1.702 1.173 L 45 45 l 3.241 3.241 l 4.202 4.202 l 8.008 8.008 l 5.626 5.626 l 1.817 1.817 l 7.618 -7.618 c 0.28 0.616 0.666 1.195 1.173 1.702 c 2.244 2.244 5.872 2.261 8.137 0.051 C 86.957 59.948 87.124 56.434 85.206 54.152 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(9,214,180); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <circle cx="9.22" cy="32.12" r="5.79" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(50,171,219); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    <circle cx="34.99" cy="57.88" r="5.79" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(50,171,219); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    <circle cx="32.12" cy="80.78" r="5.79" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(242,112,112); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                    <circle cx="57.88" cy="55.01" r="5.79" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(242,112,112); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                </g>
                            </svg>
                        </div>
                        <a href="{{ route('profile.grades') }}" class="d-table text-decoration-none text-dark">
                            <h4 class="d-table-cell align-middle m-0 p-0 fw-light">Ostatnie oceny ></h4>
                        </a>
                    </div>
                    <div class="mt-1 pb-2">
                        <div class="px-3">
                            @foreach($gradeSubjects as $gradeSubject)
                                <div class="d-table text-start">
                                    <p class="m-0 p-0 fs-5 d-table-cell align-middle">{{ Subject::find($gradeSubject)->name }}</p>
                                </div>
                                <div class="py-1 text-start">
                                    <p class="ps-0 p-0 m-0 fw-medium">
                                        @foreach(GradeReason::query()->where(['subject_id' => $gradeSubject, 'classroom_id' => Auth::user()->classroom->id])->get() as $gradeReason)
                                            @foreach($gradeReason->grades()->where('user_id', Auth::id())->get() as $grade)
                                                {{ GradeType::find($grade->type)->text.',' }}
                                            @endforeach
                                        @endforeach
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('profile.index') }}" class="text-decoration-none text-light mt-2">
                <div class="bg-dark d-flex mx-auto justify-content-center" style="width: 90%;">
                    <div class="p-2 ps-0">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                            <defs>
                            </defs>
                            <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                <path d="M 30.408 27.503 h -1.762 c -0.99 0 -1.792 0.802 -1.792 1.792 v 2.961 c 0 2.906 1.942 5.358 4.598 6.131 L 30.408 27.503 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(231,197,176); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 59.659 27.503 h 1.694 c 0.99 0 1.792 0.802 1.792 1.792 v 2.959 c 0 2.907 -1.942 5.36 -4.599 6.133 L 59.659 27.503 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(231,197,176); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 57.339 53.934 c 0.299 0.097 0.609 0.174 0.929 0.228 l 7.392 1.245 c 3.894 0.656 6.723 3.782 6.723 7.43 V 89 H 45 H 17.618 V 62.837 c 0 -3.648 2.829 -6.774 6.723 -7.43 l 7.392 -1.245 c 0.32 -0.054 0.63 -0.131 0.929 -0.228 H 57.339 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(121,201,234); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 57.339 53.934 c 0.299 0.097 0.609 0.174 0.929 0.228 l 5.788 0.975 L 44.993 78.606 l -19.056 -23.47 l 0 0.002 l 5.795 -0.976 c 0.32 -0.054 0.63 -0.131 0.929 -0.228 H 57.339 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(228,238,249); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 53.418 46.728 l 0.046 2.03 c 0 2.23 1.437 4.195 3.566 5.072 c -7.985 7.892 -16.011 7.956 -24.047 0.039 l 0.002 0.005 c 2.19 -0.854 3.676 -2.848 3.676 -5.116 l 0.046 -1.917 C 42.307 42.096 47.877 42.011 53.418 46.728 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(231,197,176); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 59.713 26.057 l -0.583 9.072 c -0.172 2.058 -0.698 4.03 -1.524 5.846 c -0.446 0.982 -0.98 1.918 -1.594 2.797 c -0.613 0.88 -1.306 1.703 -2.07 2.458 c -1.79 1.771 -3.968 3.171 -6.429 4.06 l 0 0 c -1.625 0.587 -3.404 0.587 -5.028 0 l 0 0 c -6.502 -2.35 -11.04 -8.272 -11.616 -15.162 l -0.549 -9.072 V 14.724 h 29.392 V 26.057 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(244,211,190); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 51.221 39.204 c -4.148 5.452 -8.295 5.489 -12.443 0 H 51.221 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 59.713 26.057 c 6.491 -9.661 3.546 -16.244 -6.906 -20.381 c 0.228 -0.955 1.544 -1.909 3.621 -2.863 c -8.595 -3.229 -18.817 -2.491 -23.493 5.061 c -6.406 2.16 -8.368 9.33 -2.615 18.183 c 0.642 -10.837 7.676 -9.956 16.17 -6.401 c 4.295 1.643 8.023 1.474 11.538 0.926 C 59.95 20.223 59.855 23.641 59.713 26.057 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(45,68,86); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 45 51.673 c -0.966 0 -1.932 -0.166 -2.851 -0.498 c -6.841 -2.473 -11.653 -8.754 -12.259 -16.001 l -0.55 -9.085 c -0.034 -0.551 0.386 -1.025 0.938 -1.059 c 0.547 -0.03 1.025 0.386 1.059 0.938 l 0.548 9.062 c 0.54 6.449 4.836 12.057 10.944 14.265 c 1.4 0.506 2.943 0.506 4.343 0 c 2.291 -0.829 4.329 -2.116 6.058 -3.826 c 0.718 -0.71 1.374 -1.49 1.95 -2.316 c 0.58 -0.833 1.085 -1.72 1.502 -2.636 c 0.793 -1.744 1.276 -3.597 1.437 -5.509 l 0.58 -9.042 c 0.036 -0.551 0.489 -0.97 1.063 -0.934 c 0.551 0.036 0.969 0.511 0.934 1.062 l -0.582 9.062 c -0.181 2.161 -0.722 4.236 -1.61 6.189 c -0.466 1.026 -1.032 2.02 -1.682 2.952 c -0.646 0.926 -1.38 1.799 -2.185 2.595 c -1.936 1.915 -4.218 3.357 -6.784 4.285 C 46.933 51.507 45.966 51.673 45 51.673 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 42.559 29.789 c -0.156 0 -0.313 -0.036 -0.461 -0.113 c -1.512 -0.788 -2.981 -0.788 -4.493 0 c -0.489 0.256 -1.093 0.065 -1.349 -0.424 c -0.255 -0.49 -0.065 -1.094 0.424 -1.349 c 2.104 -1.098 4.238 -1.098 6.342 0 c 0.49 0.255 0.68 0.859 0.424 1.349 C 43.269 29.593 42.92 29.789 42.559 29.789 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 52.856 29.789 c -0.155 0 -0.313 -0.036 -0.462 -0.113 c -1.509 -0.788 -2.98 -0.789 -4.491 0 c -0.493 0.256 -1.094 0.065 -1.35 -0.424 c -0.255 -0.49 -0.065 -1.094 0.424 -1.349 c 2.107 -1.098 4.239 -1.097 6.343 0 c 0.489 0.255 0.679 0.859 0.424 1.349 C 53.565 29.593 53.217 29.789 52.856 29.789 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 44.989 44.259 c -0.003 0 -0.006 0 -0.009 0 c -2.389 -0.004 -4.741 -1.517 -6.992 -4.496 c -0.229 -0.303 -0.267 -0.709 -0.097 -1.049 c 0.169 -0.339 0.516 -0.554 0.895 -0.554 h 12.429 c 0.38 0 0.728 0.215 0.896 0.556 c 0.169 0.341 0.131 0.748 -0.1 1.05 C 49.742 42.747 47.38 44.259 44.989 44.259 z M 40.956 40.16 c 1.377 1.392 2.727 2.096 4.027 2.099 c 0.002 0 0.004 0 0.006 0 c 1.303 0 2.658 -0.705 4.046 -2.099 H 40.956 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 31.469 39.344 c -0.092 0 -0.187 -0.013 -0.28 -0.04 c -3.128 -0.91 -5.313 -3.823 -5.313 -7.084 v -2.958 c 0 -1.539 1.251 -2.79 2.79 -2.79 h 1.76 c 0.552 0 1 0.448 1 1 s -0.448 1 -1 1 h -1.76 c -0.436 0 -0.79 0.354 -0.79 0.79 v 2.958 c 0 2.377 1.592 4.5 3.872 5.163 c 0.53 0.154 0.835 0.709 0.681 1.24 C 32.301 39.06 31.902 39.344 31.469 39.344 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 58.53 39.344 c -0.434 0 -0.833 -0.284 -0.96 -0.721 c -0.154 -0.53 0.15 -1.085 0.681 -1.24 c 2.281 -0.663 3.874 -2.787 3.874 -5.165 v -2.956 c 0 -0.436 -0.354 -0.79 -0.79 -0.79 h -1.692 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 1.692 c 1.538 0 2.79 1.251 2.79 2.79 v 2.956 c 0 3.262 -2.186 6.175 -5.315 7.086 C 58.716 39.331 58.622 39.344 58.53 39.344 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 28.834 89.996 c -0.533 0 -0.975 -0.416 -0.998 -0.952 c -0.016 -0.354 -0.011 -11.48 -0.008 -13.744 c 0.001 -0.552 0.448 -0.999 1 -0.999 c 0 0 0.001 0 0.001 0 c 0.552 0.001 1 0.449 0.999 1.001 c -0.004 3.305 -0.005 13.256 0.007 13.661 c 0.016 0.549 -0.415 1.013 -0.963 1.032 C 28.859 89.996 28.847 89.996 28.834 89.996 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 61.108 90 c -0.015 0 -0.028 0 -0.043 -0.001 c -0.551 -0.023 -0.979 -0.486 -0.957 -1.036 c 0.011 -0.422 0.011 -10.441 0.006 -13.66 c -0.001 -0.553 0.446 -1.001 0.998 -1.002 c 0.001 0 0.001 0 0.002 0 c 0.552 0 0.999 0.446 1 0.998 c 0.004 2.331 0.008 13.384 -0.008 13.743 C 62.084 89.579 61.641 90 61.108 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 59.696 27.028 c -0.106 0 -0.215 -0.017 -0.319 -0.052 c -0.428 -0.145 -0.705 -0.557 -0.679 -1.007 c 0.223 -3.771 -0.242 -4.347 -0.391 -4.434 c 0 0 0 0 0 0 c -0.003 -0.001 -0.035 -0.006 -0.11 0.008 c -3.356 0.525 -7.392 0.813 -12.065 -0.974 c -3.71 -1.553 -8.945 -3.389 -11.873 -1.565 c -1.725 1.076 -2.708 3.458 -2.923 7.083 c -0.025 0.431 -0.325 0.797 -0.742 0.908 c -0.419 0.11 -0.859 -0.06 -1.094 -0.422 c -3.279 -5.046 -4.345 -9.951 -3.003 -13.811 c 0.923 -2.653 2.973 -4.675 5.794 -5.724 c 5.19 -7.965 15.987 -8.354 24.477 -5.164 c 0.378 0.142 0.634 0.497 0.647 0.9 C 57.43 3.178 57.2 3.55 56.834 3.719 c -1.352 0.621 -2.108 1.123 -2.532 1.494 c 5.137 2.242 8.291 5.156 9.383 8.672 c 1.128 3.631 0.065 7.904 -3.158 12.701 C 60.337 26.868 60.022 27.028 59.696 27.028 z M 46.81 2.001 c -5.229 0 -10.18 1.822 -13.01 6.391 c -0.123 0.198 -0.31 0.347 -0.531 0.421 c -2.432 0.82 -4.121 2.413 -4.883 4.605 c -0.921 2.649 -0.442 5.971 1.341 9.543 c 0.575 -2.7 1.723 -4.563 3.474 -5.654 c 3.673 -2.291 9.238 -0.452 13.674 1.405 c 4.197 1.604 7.763 1.363 10.984 0.859 c 0.851 -0.157 1.438 0.168 1.779 0.469 c 0.572 0.504 0.882 1.289 1.023 2.337 c 1.442 -2.984 1.817 -5.632 1.112 -7.9 c -0.982 -3.162 -4.126 -5.813 -9.344 -7.878 c -0.462 -0.183 -0.72 -0.678 -0.604 -1.162 c 0.2 -0.839 0.871 -1.625 2.072 -2.407 C 51.592 2.373 49.173 2.001 46.81 2.001 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <polygon points="47.46,61.54 42.54,61.54 41.54,55.76 48.46,55.76 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(227,73,101); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                <polygon points="47.48,61.54 50.08,72.35 45.02,78.61 45,78.61 39.91,72.35 42.54,61.54 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(227,73,101); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                <path d="M 47.46 62.542 h -4.92 c -0.486 0 -0.902 -0.35 -0.985 -0.829 l -1 -5.778 c -0.05 -0.291 0.03 -0.589 0.22 -0.814 c 0.19 -0.227 0.47 -0.356 0.765 -0.356 h 6.922 c 0.295 0 0.575 0.13 0.765 0.356 c 0.19 0.226 0.271 0.523 0.221 0.814 l -1.001 5.778 C 48.362 62.192 47.946 62.542 47.46 62.542 z M 43.381 60.542 h 3.237 l 0.654 -3.778 h -4.545 L 43.381 60.542 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 45.017 79.607 c -0.301 0 -0.604 -0.136 -0.793 -0.369 l -5.085 -6.259 c -0.197 -0.243 -0.27 -0.563 -0.196 -0.867 l 2.625 -10.807 c 0.109 -0.448 0.51 -0.764 0.972 -0.764 h 4.938 c 0.462 0 0.864 0.316 0.972 0.766 l 2.605 10.805 c 0.073 0.303 0.001 0.621 -0.194 0.863 l -5.066 6.261 C 45.604 79.471 45.319 79.607 45.017 79.607 z M 41.003 72.103 l 4.003 4.928 l 3.988 -4.929 l -2.305 -9.56 h -3.365 L 41.003 72.103 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <polygon points="48.46,55.76 53.72,50.67 57.34,53.93 52.17,63.39 47.77,59.78 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(208,221,243); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                <polygon points="41.54,55.76 36.28,50.67 32.66,53.93 37.83,63.39 42.23,59.78 " style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(208,221,243); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                <path d="M 44.993 79.606 L 44.993 79.606 c -0.301 0 -0.586 -0.136 -0.776 -0.37 L 25.162 55.766 c -0.348 -0.429 -0.283 -1.059 0.146 -1.406 c 0.43 -0.348 1.06 -0.282 1.407 0.146 l 18.279 22.515 l 18.286 -22.515 c 0.349 -0.428 0.978 -0.494 1.407 -0.146 c 0.429 0.349 0.493 0.979 0.146 1.407 L 45.77 79.237 C 45.58 79.471 45.294 79.606 44.993 79.606 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 36.28 51.675 c -0.127 0 -0.256 -0.024 -0.38 -0.075 c -0.511 -0.211 -0.754 -0.795 -0.544 -1.306 c 0.21 -0.51 0.317 -1.045 0.317 -1.591 l 0.047 -1.939 c 0.014 -0.552 0.506 -1.006 1.024 -0.975 c 0.552 0.013 0.989 0.471 0.975 1.024 l -0.046 1.915 c 0 0.784 -0.157 1.575 -0.467 2.328 C 37.046 51.441 36.673 51.675 36.28 51.675 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 72.382 90 H 17.618 c -0.552 0 -1 -0.447 -1 -1 V 62.837 c 0 -4.14 3.178 -7.679 7.557 -8.416 l 7.392 -1.245 c 0.264 -0.044 0.528 -0.108 0.788 -0.192 c 0.528 -0.173 1.089 0.118 1.259 0.644 s -0.118 1.089 -0.644 1.259 c -0.352 0.114 -0.712 0.202 -1.071 0.263 l -7.391 1.245 c -3.412 0.574 -5.889 3.284 -5.889 6.443 V 88 h 52.764 V 62.837 c 0 -3.159 -2.477 -5.869 -5.889 -6.443 l -7.392 -1.245 c -0.36 -0.061 -0.721 -0.149 -1.071 -0.263 c -0.525 -0.171 -0.813 -0.734 -0.643 -1.26 s 0.735 -0.813 1.26 -0.643 c 0.257 0.083 0.521 0.148 0.785 0.192 l 7.393 1.245 c 4.379 0.737 7.557 4.276 7.557 8.416 V 89 C 73.382 89.553 72.935 90 72.382 90 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 53.697 51.619 c -0.397 0 -0.773 -0.238 -0.929 -0.63 c -0.292 -0.733 -0.44 -1.502 -0.44 -2.286 l -0.044 -1.893 c -0.013 -0.552 0.425 -1.01 0.978 -1.022 c 0.544 -0.019 1.01 0.425 1.022 0.977 l 0.044 1.915 c 0 0.552 0.101 1.072 0.298 1.568 c 0.205 0.513 -0.046 1.095 -0.559 1.299 C 53.946 51.597 53.82 51.619 53.697 51.619 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 52.166 64.388 c -0.229 0 -0.454 -0.079 -0.635 -0.227 l -4.4 -3.61 c -0.278 -0.229 -0.412 -0.589 -0.351 -0.944 l 0.695 -4.014 c 0.036 -0.209 0.138 -0.4 0.29 -0.548 l 5.26 -5.09 c 0.378 -0.365 0.975 -0.376 1.364 -0.024 l 3.618 3.258 c 0.345 0.311 0.431 0.816 0.208 1.223 l -5.173 9.456 c -0.143 0.262 -0.395 0.445 -0.687 0.502 C 52.293 64.382 52.229 64.388 52.166 64.388 z M 48.851 59.374 l 3.017 2.476 l 4.215 -7.704 l -2.337 -2.104 l -4.354 4.214 L 48.851 59.374 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                <path d="M 37.834 64.388 c -0.063 0 -0.127 -0.006 -0.19 -0.019 c -0.292 -0.057 -0.544 -0.24 -0.687 -0.502 l -5.173 -9.456 c -0.222 -0.406 -0.136 -0.912 0.208 -1.223 l 3.618 -3.258 c 0.391 -0.352 0.987 -0.341 1.364 0.024 l 5.26 5.09 c 0.152 0.147 0.254 0.339 0.29 0.548 l 0.695 4.014 c 0.062 0.355 -0.073 0.716 -0.351 0.944 l -4.4 3.61 C 38.288 64.309 38.063 64.388 37.834 64.388 z M 33.917 54.146 l 4.215 7.704 l 3.017 -2.476 l -0.54 -3.118 l -4.355 -4.214 L 33.917 54.146 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            </g>
                        </svg>
                    </div>
                    <div class="d-table">
                        <h1 class="d-table-cell align-middle m-0 p-0 fw-light">Uczen ></h1>
                    </div>
                </div>
            </a>
            <a href="{{ route('profile.warnings') }}" class="text-decoration-none text-light">
                <div class="bg-warning mx-auto mt-4" style="width: 90%;">
                    <div class="d-flex justify-content-center">
                        <div class="p-2 ps-0 pe-0">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50" height="50" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 45 88.11 h 40.852 c 3.114 0 5.114 -3.307 3.669 -6.065 L 48.669 4.109 c -1.551 -2.959 -5.786 -2.959 -7.337 0 L 0.479 82.046 c -1.446 2.758 0.555 6.065 3.669 6.065 H 45 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(214,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 45 64.091 L 45 64.091 c -1.554 0 -2.832 -1.223 -2.9 -2.776 l -2.677 -25.83 c -0.243 -3.245 2.323 -6.011 5.577 -6.011 h 0 c 3.254 0 5.821 2.767 5.577 6.011 L 47.9 61.315 C 47.832 62.867 46.554 64.091 45 64.091 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <circle cx="44.995999999999995" cy="74.02600000000001" r="4.626" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                                </g>
                            </svg>
                        </div>
                        <div class="d-table">
                            <h1 class="d-table-cell align-middle m-0 p-0 ps-2 text-dark fw-light">Uwagi</h1>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="" class="text-decoration-none text-light mt-2">
                <div class="bg-danger mx-auto" style="width: 90%;">
                    <a class="text-decoration-none text-light" href="{{ route('profile.timetable') }}">
                        <div class="d-flex pt-3 ps-3">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="40" height="40" viewBox="0 0 256 256" xml:space="preserve">

                                <defs>
                                </defs>
                                <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                    <path d="M 64.654 14.951 H 25.345 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 39.309 c 1.657 0 3 1.343 3 3 S 66.312 14.951 64.654 14.951 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 87 31.837 H 3 c -1.657 0 -3 -1.343 -3 -3 v -8.87 C 0 13.893 4.942 8.951 11.016 8.951 h 6.398 c 1.657 0 3 1.343 3 3 s -1.343 3 -3 3 h -6.398 C 8.25 14.951 6 17.201 6 19.967 v 5.87 h 78 v -5.87 c 0 -2.766 -2.25 -5.017 -5.017 -5.017 h -6.397 c -1.657 0 -3 -1.343 -3 -3 s 1.343 -3 3 -3 h 6.397 C 85.058 8.951 90 13.893 90 19.967 v 8.87 C 90 30.494 88.657 31.837 87 31.837 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 78.983 89.123 H 11.016 C 4.942 89.123 0 84.181 0 78.106 V 28.837 c 0 -1.657 1.343 -3 3 -3 h 84 c 1.657 0 3 1.343 3 3 v 49.269 C 90 84.181 85.058 89.123 78.983 89.123 z M 6 31.837 v 46.269 c 0 2.767 2.25 5.017 5.016 5.017 h 67.967 c 2.767 0 5.017 -2.25 5.017 -5.017 V 31.837 H 6 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 23.761 51.483 h -4.762 c -1.442 0 -2.612 -1.169 -2.612 -2.612 v -4.762 c 0 -1.442 1.169 -2.612 2.612 -2.612 h 4.762 c 1.442 0 2.612 1.169 2.612 2.612 v 4.762 C 26.372 50.313 25.203 51.483 23.761 51.483 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 47.381 51.483 h -4.762 c -1.442 0 -2.612 -1.169 -2.612 -2.612 v -4.762 c 0 -1.442 1.169 -2.612 2.612 -2.612 h 4.762 c 1.442 0 2.612 1.169 2.612 2.612 v 4.762 C 49.993 50.313 48.824 51.483 47.381 51.483 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 71.001 51.483 h -4.762 c -1.442 0 -2.612 -1.169 -2.612 -2.612 v -4.762 c 0 -1.442 1.169 -2.612 2.612 -2.612 h 4.762 c 1.442 0 2.612 1.169 2.612 2.612 v 4.762 C 73.613 50.313 72.444 51.483 71.001 51.483 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 23.761 72.022 h -4.762 c -1.442 0 -2.612 -1.169 -2.612 -2.612 v -4.762 c 0 -1.442 1.169 -2.612 2.612 -2.612 h 4.762 c 1.442 0 2.612 1.169 2.612 2.612 v 4.762 C 26.372 70.853 25.203 72.022 23.761 72.022 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 47.381 72.022 h -4.762 c -1.442 0 -2.612 -1.169 -2.612 -2.612 v -4.762 c 0 -1.442 1.169 -2.612 2.612 -2.612 h 4.762 c 1.442 0 2.612 1.169 2.612 2.612 v 4.762 C 49.993 70.853 48.824 72.022 47.381 72.022 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 71.001 72.022 h -4.762 c -1.442 0 -2.612 -1.169 -2.612 -2.612 v -4.762 c 0 -1.442 1.169 -2.612 2.612 -2.612 h 4.762 c 1.442 0 2.612 1.169 2.612 2.612 v 4.762 C 73.613 70.853 72.444 72.022 71.001 72.022 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 22.734 20.025 h -2.708 c -1.442 0 -2.612 -1.169 -2.612 -2.612 V 6.489 c 0 -1.442 1.169 -2.612 2.612 -2.612 h 2.708 c 1.442 0 2.612 1.169 2.612 2.612 v 10.924 C 25.345 18.855 24.176 20.025 22.734 20.025 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    <path d="M 69.975 20.025 h -2.708 c -1.442 0 -2.612 -1.169 -2.612 -2.612 V 6.489 c 0 -1.442 1.169 -2.612 2.612 -2.612 h 2.708 c 1.442 0 2.612 1.169 2.612 2.612 v 10.924 C 72.586 18.855 71.417 20.025 69.975 20.025 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255, 255, 255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                </g>
                            </svg>
                            <div class="d-table">
                                <h3 class="fs-3 d-table-cell align-middle m-0 p-0 ps-2 fw-light">Plan lekcji ></h3>
                            </div>
                        </div>
                    </a>
                    <div class="mt-3 text-light pb-2">
                        <table style="width: 90%; margin: 0 auto; user-select:none;">
                            @foreach($lessons as $lesson)
                                <tr>
                                    <td style="width: 40px;">
                                        <p class="text-center m-0 p-0 fs-1">{{ $lesson->lesson_number }}</p>
                                    </td>
                                    <td style="width: 50px;">
                                        <p class="p-0 m-0 small">{{ $timetable[$lesson->lesson_number] }}</p>
                                        <p class="p-0 m-0 small">{{ $timetableEnd[$lesson->lesson_number] }}</p>
                                    </td>
                                    <td class="text-start ps-1">
                                        <p class="p-0 m-0 fs-6">{{ substr($lesson->subject->name, 0, 15) }}</p>
                                        <p class="p-0 m-0 small">{{ $lesson->subject->teacher->user->name }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </a>
        </div>

    </div>

@endsection
