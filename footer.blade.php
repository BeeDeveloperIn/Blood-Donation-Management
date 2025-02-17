  <footer class="lg-space">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <a href="#"><img class="w-auto" src="{{ asset('public/images/logo.png') }}" alt="BLOODONATION"></a>
                <p class="my-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
                <ul class="list-inline">
                  <li class="list-inline-item"><i class="bi bi-facebook"></i></li>
                  <li class="list-inline-item"><i class="bi bi-instagram"></i></li>
                  <li class="list-inline-item"><i class="bi bi-whatsapp"></i></li>
                </ul>
              </div>
              <div class="col-lg-2 col-md-6 col-sm-12 offset-lg-1 mt-0 m-auto mb-4">
                <h4 class="widget widget-title lh-lg mb-0">Quick Links</h4>
                <ul class="list-group list-group-flush list-unstyled">
                  <li class="px-0 border-0 lh-lg"><a class="nav-link" href="<?= url('/about-us'); ?>">About Us</a></li>
                  <li class="px-0 border-0 lh-lg"><a class="nav-link" href="#">Contact Us</a></li>
                  <li class="px-0 border-0 lh-lg"><a class="nav-link" href="<?= url('/privacy'); ?>">Privacy Policy</a></li>
                  <li class="px-0 border-0 lh-lg"><a class="nav-link" href="<?= url('/terms'); ?>">Term and  Condition</a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 offset-lg-1 mt-0 m-auto mb-4">
                <h4 class="widget widget-title lh-lg mb-0">Connect With Us</h4>
                <ul class="list-group list-group-flush list-unstyled">
                  <li class="list-group-item px-0 border-0 d-flex bg-transparent text-dark"><span class="float-start w-auto pe-1"><i class="bi bi-geo-alt-fill"></i></span><span class="float-end">Plot A40 A, Quarkcity SEZ, Industrial Area, Sector 75, Sahibzada Ajit Singh Nagar, Punjab 160055</span></li>
                  <li class="list-group-item px-0 border-0 d-flex bg-transparent text-dark"><a class="nav-link" href="#"><span class="float-start w-auto pe-1"><i class="bi bi-telephone-fill"></i></span> <span class="float-end">+91 7822-434-943</span></a></li>
                  <li class="list-group-item px-0 border-0 d-flex bg-transparent text-dark"><a class="nav-link" href="#"><span class="float-start w-auto pe-1"><i class="bi bi-envelope-fill"></i></span> <span class="float-end">beesolvertechnology.com</span></a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <h4 class="widget widget-title lh-lg mb-0">Work Hours</h4>
                <ul class="list-group list-group-flush list-unstyled mb-2">
                  <li class="list-group-item px-0 border-0 bg-transparent text-dark">Mon-Sun 24Hrs</li>
                </ul>
                <h4 class="widget widget-title">Need For Help? Call Us</h4>
                <?php if(!auth()->check()) {?>
                <a href="<?= url('/register'); ?>" id="footer-btn" class="btn btn-lg me-2 fs-6 text-white mt-2" type="button">Register</a>
               <?php  }  ?>
              </div>
            </div>
            </div>
            <div class="container">
            <div class="row">
              <div class="col-12">
                <p class="text-center animate__delay-2s">© Copyrights <?= date("Y")?> Bloodonation, All rights reserved.</p>
              </div>
            </div>
          </div>
        </footer>
    </main>
    <script src="{{ asset('public/js/script.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
$("document").ready(function(){
    setTimeout(function(){
       $("div.alert").remove();
    }, 3000 ); // 3 secs

});
  </script>
    </body>
</html>