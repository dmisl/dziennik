@use('App\Models\Presence')

@extends('layouts.journal')

@section('title', 'Dziennik')

@section('content')

    <div class="d-flex" style="height: 100%;">

        <x-warning-menu></x-warning-menu>

        <div class="col-md-9">

            <div class="p-3">

                <a href="{{ route('warning.index') }}" class="d-flex mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="21" height="21" viewBox="0 0 256 256" xml:space="preserve">
                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                            <circle cx="45" cy="45" r="45" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(32,196,203); fill-rule: nonzero; opacity: 1;" transform="  matrix(1 0 0 1 0 0) "/>
                            <path d="M 70.191 51.154 H 13.5 c -1.169 0 -2.232 -0.68 -2.723 -1.741 s -0.32 -2.312 0.438 -3.203 l 18.258 -21.462 c 1.074 -1.262 2.967 -1.414 4.229 -0.341 c 1.262 1.074 1.415 2.967 0.341 4.229 L 19.991 45.154 h 50.201 c 1.657 0 3 1.343 3 3 S 71.849 51.154 70.191 51.154 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(27,167,173); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 31.759 72.617 c -0.849 0 -1.693 -0.358 -2.287 -1.057 L 11.215 50.098 c -0.758 -0.891 -0.929 -2.141 -0.438 -3.202 s 1.554 -1.741 2.723 -1.741 h 56.691 c 1.657 0 3 1.343 3 3 s -1.343 3 -3 3 H 19.991 l 14.052 16.52 c 1.073 1.262 0.921 3.155 -0.341 4.229 C 33.137 72.383 32.446 72.617 31.759 72.617 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(27,167,173); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 73.5 47.846 H 16.809 c -1.169 0 -2.232 -0.68 -2.723 -1.741 s -0.32 -2.312 0.438 -3.203 l 18.257 -21.462 c 1.072 -1.262 2.967 -1.416 4.229 -0.341 c 1.262 1.074 1.415 2.967 0.341 4.229 L 23.299 41.846 H 73.5 c 1.657 0 3 1.343 3 3 C 76.5 46.503 75.157 47.846 73.5 47.846 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 35.067 69.309 c -0.85 0 -1.693 -0.358 -2.287 -1.057 L 14.523 46.789 c -0.758 -0.891 -0.929 -2.141 -0.438 -3.202 s 1.554 -1.741 2.723 -1.741 H 73.5 c 1.657 0 3 1.343 3 3 c 0 1.657 -1.343 3 -3 3 H 23.299 l 14.052 16.52 c 1.073 1.262 0.921 3.155 -0.341 4.229 C 36.445 69.074 35.754 69.309 35.067 69.309 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    </svg>
                    <div class="d-table ms-1">
                        <p class="d-table-cell align-middle m-0 p-0 small">Wrocz</p>
                    </div>
                </a>

                <h1 class="fw-medium">Wpisanie uwagi</h1>

                <form action="{{ route('warning.store') }}" method="POST">
                    @csrf
                    <div class="ps-2 mt-2 w-50">
                        <div class="mt-2">
                            <label for="user" class="fs-5">Wybierz ucznia z listy</label>
                            <select id="user" name="user" class="form-select mt-1">
                                <option value=""></option>
                                @foreach($students as $student)
                                    <option {{ $id == $student->id ? 'selected' : '' }} value="{{ $student->id }}">{{ $student->name }} - {{ $student->classroom->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-2">
                            <label for="desc" class="fs-5">Wpisz opis</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary">Dodaj</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

@endsection