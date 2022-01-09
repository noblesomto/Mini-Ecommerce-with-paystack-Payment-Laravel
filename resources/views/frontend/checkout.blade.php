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
        <h2>{{ $title}}</h2>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $title}}</li>
            </ol>
        </nav>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- breadcrumb-area-end -->
    
    <!-- product-area -->
    <div class="product-area gray-bg pt-20 pb-120">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 white-bg">
        <div class="container text-white ">
        <div class="p-5 m-5">
            <div class="col-md-6 mx-auto pt-4 bg-dark">
                <h3 class="text-white text-center pb-2">Check Out</h3>
    
    <div class="contact-form pb-40">
        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
      @csrf
      
      <input name="address" type="text" placeholder="Address" class="form-control" required>
      <input name="phone" type="text" placeholder="Phone" class="form-control" required>
      <input name="email" type="email" placeholder="Email Address" class="form-control" required>
  

      <input type="hidden" name="reference" value="{{ $order_id }}">      
      <input type="hidden" name="orderID" value="{{ $order_id }}">
      <input type="hidden" name="id" value="{{ $order_id }}">
      <input type="hidden" name="amount" value="{{$amount}}"> {{-- required in kobo --}}
      <input type="hidden" name="currency" value="NGN">
    
                                                                    {{ csrf_field() }} 
                                                        
    
      
      <button class="btn"><i class="fa fa-plus-circle fa-lg"></i> Pay Now!</button>
    </form>

    </div>
     
    
            </div>
        </div>
    </div>
    </div>
    
    </div>
    </div>
    </div>
    <!-- product-area-end -->
    
    </main>
    <!-- main-area-end ->

@include('frontend.layouts.footer')

