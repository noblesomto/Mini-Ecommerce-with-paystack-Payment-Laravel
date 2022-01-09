@include('backend.layouts.header')
@include('backend.layouts.nav')

<main id="main" class="main">

    <div class="pagetitle">
    <h1>Form Elements</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item active">Elements</li>
    </ol>
    </nav>
    </div><!-- End Page Title -->
    
    <section class="section">
    <div class="row">
    <div class="col-lg-12">
    
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">General Form Elements</h5>
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <!-- General Form Elements -->
            <form action="/admin/store" method="POST" role="form" class="" enctype="multipart/form-data">
             @csrf 
    
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Product Title</label>
                <div class="col-sm-10">
                <input type="text" name="title" class="form-control" required>
                </div>
            </div>
    
        
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Product Price</label>
                <div class="col-sm-10">
                <input type="number" name="price" class="form-control" required>
                </div>
            </div>
         
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Product Picture</label>
                <div class="col-sm-10">
                <input class="form-control" name="picture" type="file" id="formFile" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">More Product Picture</label>
                <div class="col-sm-10">
                <input class="form-control" name="images[]" type="file" id="formFile" multiple required>
                </div>
            </div>
    
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Product Description</label>
                <div class="col-sm-10">
                <textarea class="form-control" name="description" style="height: 100px" required></textarea>
                </div>
            </div>
    
    
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Select Catgory</label>
                <div class="col-sm-10">
                <select name="category" class="form-select" aria-label="Default select example" required>
                    <option value="">Select Option</option>
                    <option value="Shirts">Shirts</option>
                    <option value="Trousers">Trousers</option>
                    <option value="Gowns">Gowns</option>
                </select>
                </div>
            </div>
    
    
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
            </div>
    
            </form><!-- End General Form Elements -->
    
        </div>
        </div>
    
    </div>
    
    </div>
    </section>
    
    </main><!-- End #main -->

    @include('backend.layouts.footer')