<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Welcome!</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container position-sticky z-index-sticky top-0">
        </div>
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Create Account</h3>
                                </div>
                                <div class = "mb-3"><p class="mb-0">Enter your name, email and password to register</p></div>

                                    <form role="form" method="POST" action="/register">
                                        <label>Name</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                                        </div>

                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                        </div>

                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                                        </div>

                                        <div class="form-check form-check-info text-left">
                                            <input class="form-check-input" type="checkbox" name="agreement" id="flexCheckDefault" checked>
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                                            </label>
                                        </div>
                                        <div class="text-center mb-3 ">
                                            <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign up</button>
                                        </div>
      
                                    </form>
                                </div>
                                
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Already have an account?
                                        <a href="login" class="text-info font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>