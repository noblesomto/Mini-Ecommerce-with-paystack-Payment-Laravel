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
                                <h2>Our Product For Themes & Plugins</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Product</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- search-area -->
            <div class="gemas-search s-gemas-search">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="gemas-search-box">
                                <form action="#">
                                    <select class="custom-select">
                                        <option selected="">All Category</option>
                                        <option>Site Template</option>
                                        <option>Wp Theme</option>
                                        <option>Psd Template</option>
                                        <option>Plugins</option>
                                    </select>
                                    <input type="text" placeholder="Type and Hit Enter...">
                                    <button><i class="fas fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- search-area-end -->

            <!-- product-area -->
            <section class="product-area s-product-area pt-120 pb-120">
                <div class="container">
                    <div class="row">
                        @foreach ( $post as $row )
                        <div class="col-lg-4 col-md-6">
                            <div class="product-item mb-40">
                                <div class="product-thumb">
                                    <a href="#"><img src="img/product/project_thumb01.jpg" alt=""></a>
                                </div>
                                <div class="product-item-content">
                                    <div class="product-cat mb-10">
                                        <ul>
                                            <li><a href="#">{{ $row->category }}</a></li>
                                            <li>N {{ number_format($row->price, 2, '.', ',') }}</li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">{{ $row->title }}</a></h4>
                                    <p>{{ $row->description }}</p>
                                </div>
                                <div class="product-meta">
                                    <ul>
                                        <li>
                                            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ $row->post_id }}" name="id">
                                                <input type="hidden" value="{{ $row->post_id }}" name="post_id">
                                                <input type="hidden" value="{{ $row->title }}" name="name">
                                                <input type="hidden" value="{{ $row->price }}" name="price">
                                                <input type="hidden" value="{{ $row->picture }}"  name="image">
                                                <input type="hidden" value="1" name="quantity">
                                                <button class="btn btn-primary">Add To Cart</button>
                                            </form>
                                        </li>
                                        <li>
                                            <div class="product-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        

                    <div class="row">
                        <div class="col-12">
                            <div class="pagination-wrap mt-30 text-center">
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item"><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                                        <li class="page-item"><a href="#">01</a></li>
                                        <li class="page-item"><a href="#">02</a></li>
                                        <li class="page-item active"><a href="#">03</a></li>
                                        <li class="page-item"><a href="#">...</a></li>
                                        <li class="page-item"><a href="#">10</a></li>
                                        <li class="page-item"><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-area-end -->

        </main>
        <!-- main-area-end -->
   
@include('frontend.layouts.footer')