<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <link
        rel="shortcut icon"
        type="image/png"
        href="{{ asset('images/logos/favicon.png') }}"
    />

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"/>

    <title>TinnTinn Shop</title>
</head>

<body>
<div class="toast toast-onload align-items-center text-bg-primary border-0" role="alert" aria-live="assertive"
     aria-atomic="true">
    <div class="toast-body hstack align-items-start gap-6">
        <i class="ti ti-alert-circle fs-6"></i>
        <div>
            <h5 class="text-white fs-3 mb-1">Welcome to TinnTinnShop</h5>
            <h6 class="text-white fs-2 mb-0">The Best way You can buy games</h6>
        </div>
        <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast"
                aria-label="Close"></button>
    </div>
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="{{ asset('images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid"/>
</div>
<div id="main-wrapper">
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Shop</h4>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a class="text-muted text-decoration-none" href="{{ asset('dark/index.html') }}"
                                        >Home</a
                                        >
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Shop</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-3">
                            <div class="text-center mb-n5">
                                <img
                                    src="{{ asset('images/breadcrumb/ChatBc.png') }}"
                                    alt=""
                                    class="img-fluid mb-n4"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card position-relative overflow-hidden">
                <div class="shop-part d-flex w-100">
                    <div class="shop-filters flex-shrink-0 border-end d-none d-lg-block">
                        <ul class="list-group pt-2 border-bottom rounded-0">
                            <h6 class="my-3 mx-4 fw-semibold">Filter by Category</h6>
                            <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                   href="javascript:void(0)"><i class="ti ti-circles fs-5"></i>All
                                </a>
                            </li>
                            <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                   href="javascript:void(0)"><i class="ti ti-hanger fs-5"></i>Fashion
                                </a>
                            </li>
                            <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                   href="javascript:void(0)"><i class="ti ti-notebook fs-5"></i>Books
                                </a>
                            </li>
                            <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                   href="javascript:void(0)"><i class="ti ti-mood-smile fs-5"></i>Toys
                                </a>
                            </li>
                            <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                   href="javascript:void(0)"><i class="ti ti-device-laptop fs-5"></i>Electronics
                                </a>
                            </li>
                        </ul>
                        <ul class="list-group pt-2 border-bottom rounded-0">
                            <h6 class="my-3 mx-4 fw-semibold">Sort By</h6>
                            <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                   href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Newest
                                </a>
                            </li>
                            <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                   href="javascript:void(0)"><i class="ti ti-sort-ascending-2 fs-5"></i>Price:
                                    High-Low
                                </a>
                            </li>
                            <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                   href="javascript:void(0)"><i class="ti ti-sort-descending-2 fs-5"></i>Price:
                                    Low-High
                                </a>
                            </li>
                            <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                   href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Discounted
                                </a>
                            </li>
                        </ul>
                        <div class="by-gender border-bottom rounded-0">
                            <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Gender</h6>
                            <div class="pb-4 px-4">
                                <div class="form-check py-2 mb-0">
                                    <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                           id="exampleRadios1"
                                           value="option1" checked>
                                    <label class="form-check-label d-flex align-items-center ps-2"
                                           for="exampleRadios1">
                                        All
                                    </label>
                                </div>
                                <div class="form-check py-2 mb-0">
                                    <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                           id="exampleRadios2"
                                           value="option1">
                                    <label class="form-check-label d-flex align-items-center ps-2"
                                           for="exampleRadios2">
                                        Men
                                    </label>
                                </div>
                                <div class="form-check py-2 mb-0">
                                    <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                           id="exampleRadios3"
                                           value="option1">
                                    <label class="form-check-label d-flex align-items-center ps-2"
                                           for="exampleRadios3">
                                        Women
                                    </label>
                                </div>
                                <div class="form-check py-2 mb-0">
                                    <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                           id="exampleRadios4"
                                           value="option1">
                                    <label class="form-check-label d-flex align-items-center ps-2"
                                           for="exampleRadios4">
                                        Kids
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="by-pricing border-bottom rounded-0">
                            <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Pricing</h6>
                            <div class="pb-4 px-4">
                                <div class="form-check py-2 mb-0">
                                    <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                           id="exampleRadios5"
                                           value="option1" checked>
                                    <label class="form-check-label d-flex align-items-center ps-2"
                                           for="exampleRadios5">
                                        All
                                    </label>
                                </div>
                                <div class="form-check py-2 mb-0">
                                    <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                           id="exampleRadios6"
                                           value="option1">
                                    <label class="form-check-label d-flex align-items-center ps-2"
                                           for="exampleRadios6">
                                        0-50
                                    </label>
                                </div>
                                <div class="form-check py-2 mb-0">
                                    <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                           id="exampleRadios7"
                                           value="option1">
                                    <label class="form-check-label d-flex align-items-center ps-2"
                                           for="exampleRadios7">
                                        50-100
                                    </label>
                                </div>
                                <div class="form-check py-2 mb-0">
                                    <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                           id="exampleRadios8"
                                           value="option1">
                                    <label class="form-check-label d-flex align-items-center ps-2"
                                           for="exampleRadios8">
                                        100-200
                                    </label>
                                </div>
                                <div class="form-check py-2 mb-0">
                                    <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                           id="exampleRadios9"
                                           value="option1">
                                    <label class="form-check-label d-flex align-items-center ps-2"
                                           for="exampleRadios9">
                                        Over 200
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="by-colors border-bottom rounded-0">
                            <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Colors</h6>
                            <div class="pb-4 px-4">
                                <ul class="list-unstyled d-flex flex-wrap align-items-center gap-2 mb-0">
                                    <li class="shop-color-list"><a
                                            class="shop-colors-item rounded-circle d-block shop-colors-1"
                                            href="javascript:void(0)"></a></li>
                                    <li class="shop-color-list"><a
                                            class="shop-colors-item rounded-circle d-block shop-colors-2"
                                            href="javascript:void(0)"></a></li>
                                    <li class="shop-color-list"><a
                                            class="shop-colors-item rounded-circle d-block shop-colors-3"
                                            href="javascript:void(0)"></a></li>
                                    <li class="shop-color-list"><a
                                            class="shop-colors-item rounded-circle d-block shop-colors-4"
                                            href="javascript:void(0)"></a></li>
                                    <li class="shop-color-list"><a
                                            class="shop-colors-item rounded-circle d-block shop-colors-5"
                                            href="javascript:void(0)"></a></li>
                                    <li class="shop-color-list"><a
                                            class="shop-colors-item rounded-circle d-block shop-colors-6"
                                            href="javascript:void(0)"></a></li>
                                    <li class="shop-color-list"><a
                                            class="shop-colors-item rounded-circle d-block shop-colors-7"
                                            href="javascript:void(0)"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="p-4">
                            <a href="javascript:void(0)" class="btn btn-primary w-100">Reset Filters</a>
                        </div>
                    </div>
                    <div class="card-body p-4 pb-0">
                        <div class="d-flex justify-content-between align-items-center gap-6 mb-4">
                            <a class="btn btn-primary d-lg-none d-flex" data-bs-toggle="offcanvas"
                               href="#filtercategory"
                               role="button" aria-controls="filtercategory">
                                <i class="ti ti-menu-2 fs-6"></i>
                            </a>
                            <h5 class="fs-5 mb-0 d-none d-lg-block">Products</h5>
                            <form class="position-relative">
                                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                                       placeholder="Search Product">
                                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s11.jpg') }}"
                                                class="card-img-top rounded-0" alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$285 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$345</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s5.jpg') }}"
                                                class="card-img-top rounded-0"
                                                alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$650 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$900</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s6.jpg') }}"
                                                class="card-img-top rounded-0"
                                                alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">Gaming Console</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$25 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$31</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s4.jpg') }}"
                                                class="card-img-top rounded-0"
                                                alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$50 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$65</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s10.jpg') }}"
                                                class="card-img-top rounded-0" alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">Toy Dino for Fun</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$210 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$250</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s7.jpg') }}"
                                                class="card-img-top rounded-0"
                                                alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$150 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s8.jpg') }}"
                                                class="card-img-top rounded-0"
                                                alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">Shoes for Girls</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$300 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$380</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s9.jpg') }}"
                                                class="card-img-top rounded-0"
                                                alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">Short & Sweet Purse</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$175 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$200</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s3.jpg') }}"
                                                class="card-img-top rounded-0"
                                                alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">The Psychology of Money</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$125 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$137</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s1.jpg') }}"
                                                class="card-img-top rounded-0"
                                                alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">How Innovation Works</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$275 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$350</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s12.jpg') }}"
                                                class="card-img-top rounded-0" alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">Little Angel Toy</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$5 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$10</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="card hover-img overflow-hidden rounded-2 border">
                                    <div class="position-relative">
                                        <a href="{{ asset('eco-shop-detail.html') }}"><img
                                                src="{{ asset('images/products/s2.jpg') }}"
                                                class="card-img-top rounded-0"
                                                alt="..."></a>
                                        <a href="javascript:void(0)"
                                           class="text-bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                           data-bs-toggle="tooltip" data-bs-placement="top"
                                           data-bs-title="Add To Cart"><i
                                                class="ti ti-basket fs-4"></i></a>
                                    </div>
                                    <div class="card-body pt-3 p-4">
                                        <h6 class="fw-semibold fs-4">Psalms Book for Growth</h6>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="fw-semibold fs-4 mb-0">$89 <span
                                                    class="ms-2 fw-normal text-muted fs-3"><del>$99</del></span>
                                            </h6>
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="me-1" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><i
                                                            class="ti ti-star text-warning"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="filtercategory"
                         aria-labelledby="filtercategoryLabel">
                        <div class="offcanvas-body shop-filters w-100 p-0">
                            <ul class="list-group pt-2 border-bottom rounded-0">
                                <h6 class="my-3 mx-4 fw-semibold">Filter by Category</h6>
                                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                       href="javascript:void(0)"><i class="ti ti-circles fs-5"></i>All
                                    </a>
                                </li>
                                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                       href="javascript:void(0)"><i class="ti ti-hanger fs-5"></i>Fashion
                                    </a>
                                </li>
                                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                       href="javascript:void(0)"><i class="ti ti-notebook fs-5"></i>Books
                                    </a>
                                </li>
                                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                       href="javascript:void(0)"><i class="ti ti-mood-smile fs-5"></i>Toys
                                    </a>
                                </li>
                                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                       href="javascript:void(0)"><i class="ti ti-device-laptop fs-5"></i>Electronics
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-group pt-2 border-bottom rounded-0">
                                <h6 class="my-3 mx-4 fw-semibold">Sort By</h6>
                                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                       href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Newest
                                    </a>
                                </li>
                                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                       href="javascript:void(0)"><i class="ti ti-sort-ascending-2 fs-5"></i>Price:
                                        High-Low
                                    </a>
                                </li>
                                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                       href="javascript:void(0)"><i class="ti ti-sort-descending-2 fs-5"></i>
                                        Price: Low-High
                                    </a>
                                </li>
                                <li class="list-group-item border-0 p-0 mx-4 mb-2">
                                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-6 rounded-1"
                                       href="javascript:void(0)"><i class="ti ti-ad-2 fs-5"></i>Discounted
                                    </a>
                                </li>
                            </ul>
                            <div class="by-gender border-bottom rounded-0">
                                <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Gender</h6>
                                <div class="pb-4 px-4">
                                    <div class="form-check py-2 mb-0">
                                        <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                               id="exampleRadios10"
                                               value="option1" checked>
                                        <label class="form-check-label d-flex align-items-center ps-2"
                                               for="exampleRadios10">
                                            All
                                        </label>
                                    </div>
                                    <div class="form-check py-2 mb-0">
                                        <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                               id="exampleRadios11"
                                               value="option1">
                                        <label class="form-check-label d-flex align-items-center ps-2"
                                               for="exampleRadios11">
                                            Men
                                        </label>
                                    </div>
                                    <div class="form-check py-2 mb-0">
                                        <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                               id="exampleRadios12"
                                               value="option1">
                                        <label class="form-check-label d-flex align-items-center ps-2"
                                               for="exampleRadios12">
                                            Women
                                        </label>
                                    </div>
                                    <div class="form-check py-2 mb-0">
                                        <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                               id="exampleRadios13"
                                               value="option1">
                                        <label class="form-check-label d-flex align-items-center ps-2"
                                               for="exampleRadios13">
                                            Kids
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="by-pricing border-bottom rounded-0">
                                <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Pricing</h6>
                                <div class="pb-4 px-4">
                                    <div class="form-check py-2 mb-0">
                                        <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                               id="exampleRadios14"
                                               value="option1" checked>
                                        <label class="form-check-label d-flex align-items-center ps-2"
                                               for="exampleRadios14">
                                            All
                                        </label>
                                    </div>
                                    <div class="form-check py-2 mb-0">
                                        <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                               id="exampleRadios15"
                                               value="option1">
                                        <label class="form-check-label d-flex align-items-center ps-2"
                                               for="exampleRadios15">
                                            0-50
                                        </label>
                                    </div>
                                    <div class="form-check py-2 mb-0">
                                        <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                               id="exampleRadios16"
                                               value="option1">
                                        <label class="form-check-label d-flex align-items-center ps-2"
                                               for="exampleRadios16">
                                            50-100
                                        </label>
                                    </div>
                                    <div class="form-check py-2 mb-0">
                                        <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                               id="exampleRadios17"
                                               value="option1">
                                        <label class="form-check-label d-flex align-items-center ps-2"
                                               for="exampleRadios17">
                                            100-200
                                        </label>
                                    </div>
                                    <div class="form-check py-2 mb-0">
                                        <input class="form-check-input p-2" type="radio" name="exampleRadios"
                                               id="exampleRadios18"
                                               value="option1">
                                        <label class="form-check-label d-flex align-items-center ps-2"
                                               for="exampleRadios18">
                                            Over 200
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="by-colors border-bottom rounded-0">
                                <h6 class="mt-4 mb-3 mx-4 fw-semibold">By Colors</h6>
                                <div class="pb-4 px-4">
                                    <ul class="list-unstyled d-flex flex-wrap align-items-center gap-2 mb-0">
                                        <li class="shop-color-list"><a
                                                class="shop-colors-item rounded-circle d-block shop-colors-1"
                                                href="javascript:void(0)"></a></li>
                                        <li class="shop-color-list"><a
                                                class="shop-colors-item rounded-circle d-block shop-colors-2"
                                                href="javascript:void(0)"></a></li>
                                        <li class="shop-color-list"><a
                                                class="shop-colors-item rounded-circle d-block shop-colors-3"
                                                href="javascript:void(0)"></a></li>
                                        <li class="shop-color-list"><a
                                                class="shop-colors-item rounded-circle d-block shop-colors-4"
                                                href="javascript:void(0)"></a></li>
                                        <li class="shop-color-list"><a
                                                class="shop-colors-item rounded-circle d-block shop-colors-5"
                                                href="javascript:void(0)"></a></li>
                                        <li class="shop-color-list"><a
                                                class="shop-colors-item rounded-circle d-block shop-colors-6"
                                                href="javascript:void(0)"></a></li>
                                        <li class="shop-color-list"><a
                                                class="shop-colors-item rounded-circle d-block shop-colors-7"
                                                href="javascript:void(0)"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-4">
                                <a href="javascript:void(0)" class="btn btn-primary w-100">Reset Filters</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function handleColorTheme(e) {
            $("html").attr("data-color-theme", e);
            $(e).prop("checked", !0);
        }
    </script>


</div>
<div class="dark-transparent sidebartoggler"></div>
<!-- Import Js Files -->
<script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('libs/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('js/theme/app.dark.init.js') }}"></script>
<script src="{{ asset('js/theme/theme.js') }}"></script>
<script src="{{ asset('js/theme/app.min.js') }}"></script>
<script src="{{ asset('js/theme/sidebarmenu.js') }}"></script>

<!-- solar icons -->
<script src="{{ asset('vendor/iconify-icon.min.js') }}"></script>
</body>

</html>
