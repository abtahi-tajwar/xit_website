@include('admin.header')
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5"> <span class="circle"><i class="fa fa-check"></i></span>
                <h5 class="mt-3">Join over 25 million <br> learners from around the globe</h5> <small class="mt-2 text-muted">Master the languages of the web: HTML, CSS and javascript. This path will prepare you to build basic websites and then build interactive web apps</small>
                <form action="{{ route('admin-register') }}" method="POST">
                    <div class="form-input"> <i class="fa fa-envelope"></i> <input type="text" name="email" class="form-control" placeholder="Email address"> </div>
                    @csrf
                    @error('email')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-input"> <i class="fa fa-user"></i> <input type="text" name="username" class="form-control" placeholder="User name"> </div>
                    @error('username')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-input"> <i class="fa fa-lock"></i> <input type="text" name="password" class="form-control" placeholder="password"> </div>
                    @error('password')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-input"> <i class="fa fa-lock"></i> <input type="text" name="password_confirmation" class="form-control" placeholder="password"> </div>
                    @error('password_confirmation')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-input"> <i class="fa fa-lock"></i> <input type="text" name="phone" class="form-control" placeholder="phone"> </div>
                    @error('phone')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> I agree all the statements </label> </div> <button class="btn btn-primary mt-4 signup">Register</button>
                </form>
                <div class="text-center mt-4"> <span>Already a member?</span> <a href="#" class="text-decoration-none">Login</a> </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')