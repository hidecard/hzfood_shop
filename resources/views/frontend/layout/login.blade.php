@include('frontend.layout.part.nav')
      <!-- home section start -->
      <section class="container">
        <div class="row m-5 p-4 shadow p-3 mb-5 bg-body rounded">
            <div class="col-lg-6 text-center">
                <img src="{{ asset('/img/Woman enters the password from her account.png') }}" alt="">
            </div>
            <div class="col-lg-6 text-center">
                <h2><span>Welcome back </span> <span class="text-danger">Hz Food</span></h2>
                <h6>Login your account</h6>
                <div class="text-start mt-2">
                    <label for="">Your Email</label>
                    <input type="text" class="form-control m-2" placeholder="Enter Your Email Address">
                </div>
                <div class="text-start mt-2">
                    <label for="">Your Password</label>
                    <input type="text" class="form-control m-2" placeholder="Enter Your Password">
                </div>
                <div>
                  <a class="btn btn-outline-danger w-50 mt-3" href="">Login</a>
                </div>
                <hr>
                <h5>or</h5>
                <div class="d-flex justify-content-evenly">
                  <div>
                    <h6 class="">Don't have your account</h6>
                  </div>
                  <div>
                    <a class="text-decoration-none text-danger" href="{{route('register')}}">Register your account</a>
                  </div>
                </div>
             </div>
        </div>
       </section>
       <!-- home section end -->
@include('frontend.layout.part.footer')
