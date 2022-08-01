<x-app-layout>

        <x-slot name="header">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Product</h2>
            </div>
                <span class="sm:ml-3">
      <a href="{{route('product.create')}}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Create
      </a>
    </span>
        </div>
        </x-slot>
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-pills nav-pills-success" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" data-bs-toggle="pill" href="#pills-product-grid" role="tab" aria-selected="true">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class='bx bx-grid font-18 me-1'></i>
                            </div>
                            <div class="tab-title">Products Grid</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="pill" href="#success-pills-products-list" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class='bx bx-list-ol font-18 me-1'></i>
                            </div>
                            <div class="tab-title">Product List</div>
                        </div>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" data-bs-toggle="pill" href="#success-pills-contact" role="tab" aria-selected="false">
                        <div class="d-flex align-items-center">
                            <div class="tab-icon"><i class='bx bx-microphone font-18 me-1'></i>
                            </div>
                            <div class="tab-title">Contact</div>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="pills-product-grid" role="tabpanel">
            <div class="bg-white py-2">
                <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        <div class="group relative">
                            <div
                                class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img
                                    src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>

                        <div class="group relative">
                            <div
                                class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img
                                    src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>
                        <div class="group relative">
                            <div
                                class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img
                                    src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>
                        <div class="group relative">
                            <div
                                class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img
                                    src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>
                        <div class="group relative">
                            <div
                                class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img
                                    src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>
                        <div class="group relative">
                            <div
                                class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img
                                    src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            Basic Tee
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">Black</p>
                                </div>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                        </div>

                        <!-- More products... -->
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="success-pills-products-list" role="tabpanel">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <h5 class="mb-0">Order Table</h5>
                        <form class="ms-auto position-relative">
                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                            <input class="form-control ps-5" type="text" placeholder="search">
                        </form>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table align-middle mb-0">
                            <thead class="table-light">
                            <tr>
                                <th>Product</th>
                                <th>Photo</th>
                                <th>Product ID</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Shipping</th>
                            </tr>
                            </thead>
                            <tbody><tr>
                                <td>Sport Shoes</td>
                                <td><img src="assets/images/products/01.png" class="product-img-2" alt="product img"></td>
                                <td>#9405822</td>
                                <td><span class="badge bg-light-success text-success w-100">Paid</span></td>
                                <td>$1250.00</td>
                                <td>03 Feb 2020</td>
                                <td><div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>Man Headcap</td>
                                <td><img src="assets/images/products/02.png" class="product-img-2" alt="product img"></td>
                                <td>#8304620</td>
                                <td><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                <td>$1500.00</td>
                                <td>05 Feb 2020</td>
                                <td><div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div></td>
                            </tr>

                            <tr>
                                <td>Sunglass</td>
                                <td><img src="assets/images/products/03.png" class="product-img-2" alt="product img"></td>
                                <td>#4736890</td>
                                <td><span class="badge bg-light-danger text-danger w-100">Failed</span></td>
                                <td>$1400.00</td>
                                <td>06 Feb 2020</td>
                                <td><div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div></td>
                            </tr>

                            <tr>
                                <td>Shirt Formal</td>
                                <td><img src="assets/images/products/04.png" class="product-img-2" alt="product img"></td>
                                <td>#8543765</td>
                                <td><span class="badge bg-light-success text-success w-100">Paid</span></td>
                                <td>$1200.00</td>
                                <td>14 Feb 2020</td>
                                <td><div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div></td>
                            </tr>
                            <tr>
                                <td>Black Coat Pant</td>
                                <td><img src="assets/images/products/06.png" class="product-img-2" alt="product img"></td>
                                <td>#9629240</td>
                                <td><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                <td>$1500.00</td>
                                <td>18 Feb 2020</td>
                                <td><div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div></td>
                            </tr>
                            <tr>
                                <td>Heals</td>
                                <td><img src="assets/images/products/05.png" class="product-img-2" alt="product img"></td>
                                <td>#8506790</td>
                                <td><span class="badge bg-light-danger text-danger w-100">Failed</span></td>
                                <td>$1800.00</td>
                                <td>21 Feb 2020</td>
                                <td><div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                    </div></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

