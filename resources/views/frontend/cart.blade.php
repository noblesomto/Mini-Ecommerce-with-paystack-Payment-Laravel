@include('frontend.layouts.header')
@include('frontend.layouts.nav')


<!-- main-area -->
<main>

<!-- breadcrumb-area -->
<section class="breadcrumb-area d-flex align-items-center">
<div class="container">
<div class="row">
<div class="col-12">
<div class="breadcrumb-wrap text-center">
    <h2>{{ $title }}</h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
        </ol>
    </nav>
</div>
</div>
</div>
</div>
</section>
<!-- breadcrumb-area-end -->

<!-- product-area -->
<div class="product-area gray-bg pt-120 pb-120">
<div class="container">
<div class="row">
<div class="col-lg-12 white-bg">
<div class="forums-table-responsive">
    <table class="table">
        <thead>
            <tr>
                
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Remove</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cartItems as $item)
            <tr>
                
                <td><img class="rounded-circle" height="50px" src="/uploads/{{ $item->attributes->image }}" alt="img"></td>
                <td><a href="#">{{ $item->name }}</a></td>
                <td> {{ $item->price }} </td>
                <td>
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id}}" >
                      <input type="number" size="3" name="quantity" value="{{ $item->quantity }}" 
                      class="w-6 text-center bg-gray-300" />
                      <button type="submit" class="btn btn-primary">update</button>
                      </form>    
                </td>
                <td>
                    <form action="{{ route('cart.remove') }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $item->id }}" name="id">
                        <button class="text-danger">x</button>
                    </form>
                </td>
                <td>
                    {{ $item->price * $item->quantity   }}
                    
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <th colspan="4"></th>
            <th>Total</th>
            <th>N{{  Cart::getTotal()  }}</th>
            </tfoot>
    </table>
    <hr style="background: white;">
    <div class="mb-5">
        <a href="/checkout" class="btn btn-primary float-right">Checkout</a>
    </div>

</div>
</div>

</div>
</div>
</div>
<!-- product-area-end -->

</main>
<!-- main-area-end -->


@include('frontend.layouts.footer')