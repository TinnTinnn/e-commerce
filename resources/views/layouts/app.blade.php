<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <script src="//unpkg.com/alpinejs" defer></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('styles')
</head>

<body>
<div class="mb-4">@include('includes.navbar-v2')</div>
<div class="container p-5 my-3 ">
    {{--<div class="mb-4">@include('includes.navbar')</div>--}}
    <div class="">
        <div class="d-flex justify-content-center mb-4 bg-secondary ">
            <div class="mx-4 my-2">
                @php
                    $filters =[
                        '' => 'Latest',
                        'popular_last_month' => 'Popular Last Month',
                        'popular_last_6months' => 'Popular Last 6 Months',
                        'highest_rated_last_month' => 'Highest Rated Last Month',
                        'highest_rated_last_6months' => 'Highest Rated Last 6 Months'
        ];
                @endphp

                @foreach ($filters as $key => $label)
                    <a href="{{ route('products.index', [...request()->query,'filter' => $key] )}}"
                       class="mx-1 {{ request('filter') === $key || (request('filter') === null && $key === '') ? ' text-decoration-none text-info' : 'text-decoration-none text-light' }}">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-7"></div>
            <div class="col-5">
                <form method="GET" action="{{ route('products.index') }}" class="d-flex align-item-bottom mt-2">
                    <input class="form-control me-2" type="text" name="title" placeholder="Search by title"
                           aria-label="Search"
                           value="{{ request('title') }}"/>
                    <input type="hidden" name="filter" value="{{ request('filter') }}"/>
                    <button class="btn btn-outline-success mx-2" type="submit">Search</button>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Clear</a>
                </form>
            </div>
        </div>
    </div>
    <h1 class="text-center mb-4">@yield('title')</h1>
    <div x-data="{ flash: true }">
        @if(session()->has('success'))
            <div x-show="flash"
                 class="position-relative mb-4 rounded border border-success bg-success bg-opacity-25 px-3 py-2 fs-6 text-success"
                 role="alert">
                <strong class="fw-bold">Success!</strong>
                <div>
                    {{ session('success')  }}
                </div>
                <span class="position-absolute top-0 end-0 px-2 py-2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
               stroke-width="1.5" @click="flash = false"
               stroke="currentColor" class="h-4 w-4 cursor-pointer" height="16" width="16">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </span>
            </div>

        @endif
        @yield('content')
    </div>
</div>
</body>
</html>
