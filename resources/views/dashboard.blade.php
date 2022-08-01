<x-app-layout>

    <x-slot name="header">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Dashboard</h2>
            </div>
        </div>
    </x-slot>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
            <div class="col">
                <div class="card radius-10 border-0 border-start border-tiffany border-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Total Product</p>
                                <h4 class="mb-0 text-tiffany">{{$productTotal}}</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-tiffany text-white">
                                <i class="bi bi-bag-check-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-0 border-start border-success border-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Total Revenue</p>
                                <h4 class="mb-0 text-success">$1,245</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-success text-white">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-0 border-start border-pink border-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Bounce Rate</p>
                                <h4 class="mb-0 text-pink">24.25%</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-pink text-white">
                                <i class="bi bi-bar-chart-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-0 border-start border-orange border-3">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">New Users</p>
                                <h4 class="mb-0 text-orange">214</h4>
                            </div>
                            <div class="ms-auto widget-icon bg-orange text-white">
                                <i class="bi bi-person-plus-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Total Orders</p>
                                <h4 class="mb-0 text-pink">542</h4>
                            </div>
                            <div class="ms-auto fs-2 text-pink">
                                <i class="bi bi-cup"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Total Income</p>
                                <h4 class="mb-0 text-info">$875</h4>
                            </div>
                            <div class="ms-auto fs-2 text-info">
                                <i class="bi bi-wallet"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Comments</p>
                                <h4 class="mb-0 text-purple">59</h4>
                            </div>
                            <div class="ms-auto fs-2 text-purple">
                                <i class="bi bi-chat-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-1">Tickets</p>
                                <h4 class="mb-0 text-primary">145</h4>
                            </div>
                            <div class="ms-auto fs-2 text-primary">
                                <i class="bi bi-truck"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

    <div class="row">
        <div class="col-12 col-lg-6 col-xl-4 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header bg-transparent">
                    <div class="row g-3 align-items-center">
                        <div class="col">
                            <h5 class="mb-0">Top Categories</h5>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                <div class="dropdown">
                                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:;">Action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="categories">
                        <div class="progress-wrapper">
                            <p class="mb-2">Electronic <span class="float-end">85%</span></p>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-gradient-purple" role="progressbar" style="width: 85%;"></div>
                            </div>
                        </div>
                        <div class="my-3 border-top"></div>
                        <div class="progress-wrapper">
                            <p class="mb-2">Furniture <span class="float-end">70%</span></p>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 70%;"></div>
                            </div>
                        </div>
                        <div class="my-3 border-top"></div>
                        <div class="progress-wrapper">
                            <p class="mb-2">Fashion <span class="float-end">66%</span></p>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 66%;"></div>
                            </div>
                        </div>
                        <div class="my-3 border-top"></div>
                        <div class="progress-wrapper">
                            <p class="mb-2">Mobiles <span class="float-end">76%</span></p>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 76%;"></div>
                            </div>
                        </div>
                        <div class="my-3 border-top"></div>
                        <div class="progress-wrapper">
                            <p class="mb-2">Accessories <span class="float-end">80%</span></p>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%;"></div>
                            </div>
                        </div>
                        <div class="my-3 border-top"></div>
                        <div class="progress-wrapper">
                            <p class="mb-2">Watches <span class="float-end">65%</span></p>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-gradient-voilet" role="progressbar" style="width: 65%;"></div>
                            </div>
                        </div>
                        <div class="my-3 border-top"></div>
                        <div class="progress-wrapper">
                            <p class="mb-2">Sports <span class="float-end">45%</span></p>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-gradient-royal" role="progressbar" style="width: 45%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header bg-transparent">
                    <div class="row g-3 align-items-center">
                        <div class="col">
                            <h5 class="mb-0">Best Products</h5>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                <div class="dropdown">
                                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:;">Action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="best-product p-2 mb-3">
                        <div class="best-product-item">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="assets/images/products/01.png" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">White Polo T-Shirt</h6>
                                    <div class="product-rating mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                </div>
                                <div class="sales-count ms-auto">
                                    <p class="mb-0">245 Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="best-product-item">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="assets/images/products/02.png" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">Formal Coat Pant</h6>
                                    <div class="product-rating mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                </div>
                                <div class="sales-count ms-auto">
                                    <p class="mb-0">325 Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="best-product-item">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="assets/images/products/03.png" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">Blue Shade Jeans</h6>
                                    <div class="product-rating mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                </div>
                                <div class="sales-count ms-auto">
                                    <p class="mb-0">189 Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="best-product-item">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="assets/images/products/04.png" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                                    <div class="product-rating mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="sales-count ms-auto">
                                    <p class="mb-0">102 Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="best-product-item">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="assets/images/products/05.png" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">Men Sports Shoes</h6>
                                    <div class="product-rating mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="sales-count ms-auto">
                                    <p class="mb-0">137 Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="best-product-item">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="assets/images/products/06.png" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">Fancy Home Sofa</h6>
                                    <div class="product-rating mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                </div>
                                <div class="sales-count ms-auto">
                                    <p class="mb-0">453 Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="best-product-item">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="assets/images/products/07.png" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">Sports Time Watch</h6>
                                    <div class="product-rating mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="sales-count ms-auto">
                                    <p class="mb-0">198 Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="best-product-item">
                            <div class="d-flex align-items-center gap-3">
                                <div class="product-box border">
                                    <img src="assets/images/products/08.png" alt="">
                                </div>
                                <div class="product-info">
                                    <h6 class="product-name mb-1">Women Blue Heals</h6>
                                    <div class="product-rating mb-0">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                </div>
                                <div class="sales-count ms-auto">
                                    <p class="mb-0">98 Sales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-4 d-flex">
            <div class="card radius-10 w-100">
                <div class="card-header bg-transparent">
                    <div class="row g-3 align-items-center">
                        <div class="col">
                            <h5 class="mb-0">Top Sellers</h5>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                                <div class="dropdown">
                                    <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:;">Action</a>
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-sellers-list p-2 mb-3">
                    <div class="d-flex align-items-center gap-3 sellers-list-item">
                        <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="50" height="50" alt="">
                        <div>
                            <h6 class="mb-1">Thomas Hardy</h6>
                            <p class="mb-0 font-13">Customer ID #84586</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                            <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 sellers-list-item">
                        <img src="assets/images/avatars/avatar-2.png" class="rounded-circle" width="50" height="50" alt="">
                        <div>
                            <h6 class="mb-0">Pauline Bird</h6>
                            <p class="mb-0 font-13">Customer ID #86572</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                            <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 sellers-list-item">
                        <img src="assets/images/avatars/avatar-3.png" class="rounded-circle" width="50" height="50" alt="">
                        <div>
                            <h6 class="mb-0">Ralph Alva</h6>
                            <p class="mb-0 font-13">Customer ID #98657</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                            <p class="mb-0">4.8 <i class="bi bi-star-half text-warning"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 sellers-list-item">
                        <img src="assets/images/avatars/avatar-4.png" class="rounded-circle" width="50" height="50" alt="">
                        <div>
                            <h6 class="mb-0">John Roman</h6>
                            <p class="mb-0 font-13">Customer ID #78542</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                            <p class="mb-0">4.7 <i class="bi bi-star-half text-warning"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 sellers-list-item">
                        <img src="assets/images/avatars/avatar-5.png" class="rounded-circle" width="50" height="50" alt="">
                        <div>
                            <h6 class="mb-0">David Buckley</h6>
                            <p class="mb-0 font-13">Customer ID #68574</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                            <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 sellers-list-item">
                        <img src="assets/images/avatars/avatar-6.png" class="rounded-circle" width="50" height="50" alt="">
                        <div>
                            <h6 class="mb-0">Maria Anders</h6>
                            <p class="mb-0 font-13">Customer ID #86952</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                            <p class="mb-0">4.8 <i class="bi bi-star-half text-warning"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 sellers-list-item">
                        <img src="assets/images/avatars/avatar-7.png" class="rounded-circle" width="50" height="50" alt="">
                        <div>
                            <h6 class="mb-0">Martin Loother</h6>
                            <p class="mb-0 font-13">Customer ID #83247</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                            <p class="mb-0">5.0 <i class="bi bi-star-fill text-warning"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 sellers-list-item">
                        <img src="assets/images/avatars/avatar-8.png" class="rounded-circle" width="50" height="50" alt="">
                        <div>
                            <h6 class="mb-0">Victoria Hardy</h6>
                            <p class="mb-0 font-13">Customer ID #67523</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                            <p class="mb-0">3.9 <i class="bi bi-star-half text-warning"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 sellers-list-item">
                        <img src="assets/images/avatars/avatar-9.png" class="rounded-circle" width="50" height="50" alt="">
                        <div>
                            <h6 class="mb-0">David Buckley</h6>
                            <p class="mb-0 font-13">Customer ID #94256</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                            <p class="mb-0">3.5 <i class="bi bi-star-half text-warning"></i></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3 sellers-list-item">
                        <img src="assets/images/avatars/avatar-10.png" class="rounded-circle" width="50" height="50" alt="">
                        <div>
                            <h6 class="mb-0">Victoria Hardy</h6>
                            <p class="mb-0 font-13">Customer ID #48759</p>
                        </div>
                        <div class="d-flex align-items-center gap-3 fs-6 ms-auto">
                            <p class="mb-0">3.4 <i class="bi bi-star-half text-warning"></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
</x-app-layout>
