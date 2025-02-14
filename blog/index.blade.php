@include("header")
<section id="page-heading" class="overlay overlay-primary has-bg-img position-relative clearfix">
            <div class="overlay-content align-items-end text-white">
            <img class="bg-img" src="{{ asset('public/images/blog-bg.jpg') }}" alt="" width="100%">
              <div class="container">
                  <div class="row">
                      <div class="col-12">
                          <div class="page-title position-absolute start-50 translate-middle">
                              <h1 class="text-white">Blogs</h1>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </section>
        <section id="blogs-list">
            <div class="container">
                <div class="row mb-2 g-5">
                    <div class="col-md-4">
                        <div class="blogs shadow border-0">
                            <div class="row g-0 border overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="image-box">
                                        <img class="blog-feature-image" src="{{ asset('public/images/placeholder-img.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 p-4 d-flex flex-column">
                                    <div class="blog-category mb-3"><span>Blog Category</span></div>
                                    <h3 class="mb-3 fs-4 fw-bold">Donating blood connects us all in a soul.</h3>
                                    <div class="mb-1 text-muted"><span>By: Author</span> | <span>10 Oct 2023</span></div>
                                    <p class="card-text my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                                    <a href="<?= url('blog-detail'); ?>">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blogs shadow border-0">
                            <div class="row g-0 border overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="image-box">
                                        <img class="blog-feature-image" src="{{ asset('public/images/placeholder-img.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 p-4 d-flex flex-column">
                                    <div class="blog-category mb-3"><span>Blog Category</span></div>
                                    <h3 class="mb-3 fs-4 fw-bold">Give Blood and save three lives or even more.</h3>
                                    <div class="mb-1 text-muted"><span>By: Author</span> | <span>10 Oct 2023</span></div>
                                    <p class="card-text my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                                    <a href="<?= url('blog-detail'); ?>">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blogs shadow border-0">
                            <div class="row g-0 border overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="image-box">
                                        <img class="blog-feature-image" src="{{ asset('public/images/placeholder-img.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 p-4 d-flex flex-column">
                                    <div class="blog-category mb-3"><span>Blog Category</span></div>
                                    <h3 class="mb-3 fs-4 fw-bold">Why should we donate blood and am I eligible?</h3>
                                    <div class="mb-1 text-muted"><span>By: Author</span> | <span>10 Oct 2023</span></div>
                                    <p class="card-text my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
                                    <a href="<?= url('blog-detail'); ?>">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a class="previous border p-2 float-start w-auto text-decoration-none" href="#"><i class="bi bi-chevron-double-left"></i> Previous Post</a>
                    </div>
                    <div class="col-6">
                        <a class="previous border p-2 float-end w-auto text-decoration-none" href="#">Next Post <i class="bi bi-chevron-double-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        @include("footer")
