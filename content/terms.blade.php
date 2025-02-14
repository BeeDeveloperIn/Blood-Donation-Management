@include("header")
<section id="page-heading" class="overlay overlay-primary has-bg-img position-relative clearfix">
    <div class="overlay-content align-items-end text-white">
        <img class="bg-img" src="{{ asset('public/images/blog-bg.jpg') }}" alt="" width="100%">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title position-absolute start-50 translate-middle">
                        <h1 class="text-white">Terms & Conditions</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-section" class="py-5">
   
 @if(! empty($terms))
    <div class="container">
        <div class="about-details py-5">
            <div class="row mb-2 align-items-center d-lg-flex d-md-block">
                <div class="col-lg-5 col-md-12 col-sm-12 p-4 d-flex flex-column">
                    <img class="about-admin-img" src="{{ asset('public/images/placeholder-img.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 p-4 d-flex flex-column">
                    <h3 class="fw-bold pb-4">{{ $terms->title}}</h3>
                    <p>{{ $terms->description}}</p>

                   
                </div>
            </div>
        </div>
    </div>
     @else
        <div class="alert alert-warning mb-0">
            No data found.!!
        </div>
    @endif
</section>
</section>
@include("footer")