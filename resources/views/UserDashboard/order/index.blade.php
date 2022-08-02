<x-app-layout>

    <x-slot name="header">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">Orders</h2>
            </div>
            <span class="sm:ml-3">
      <a href="{{route('order.create')}}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Create
      </a>
    </span>
        </div>
    </x-slot>
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
                        <th>Customer</th>
                        <th>Profile</th>
                        <th>Product ID</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Shipping</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order_id_incr as $data)
                    <tr>
                        <td>{{$data->user->name}}</td>
                        <td><img src="{{$data->user->profile_photo_url}}" class="product-img-2" alt="product img"></td>
                        <td>{{$data->orderID}}</td>
                        <td><span class="badge bg-light-success text-success w-100">Paid</span></td>
                        <td>$1250.00</td>
                        <td>{{$data->created_at}}</td>
                        <td><div class="progress" style="height: 5px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

