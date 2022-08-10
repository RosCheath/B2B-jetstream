<x-Master.frontapp>

    <x-slot name="title">
        Favorite Page
    </x-slot>

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Favorite</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="#">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Favorite page</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Products Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Your Products Favorite</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
            @if($product->count())
            @foreach($product as $FavProduct)
                <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                    <div class="card product-item border-0 mb-4">
                        <a  href="{{route('product.show',$FavProduct->id)}}">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                {{--                        <img class="img-fluid w-100" src="{{Auth::user()->profile_photo_url}}" alt="">--}}
                                <img class="img-fluid w-100" src="{{$FavProduct->image}}" alt="{{$FavProduct->name}}">
                            </div>
                        </a>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3">{{$FavProduct->name}}</h6>
                            <div class="d-flex justify-content-center">
                                <h6>${{$FavProduct->price}}</h6><h6 class="text-muted ml-2"><del>${{$FavProduct->price}}</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-heart text-primary mr-1"></i>View Detail</a>--}}
                            {{--                        <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-heart mr-1"></i>Add Favorite</a>--}}

                            <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </div>
                </div>
            @endforeach

            @else
                <h1>No data</h1>

            @endif
        </div>
    </div>
    <!-- Products End -->

</x-Master.frontapp>
