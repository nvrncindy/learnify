<style>
    
    body {
        margin: 0;
        padding: 0;
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        background-color: #f8f9fa; 
    }

    .main-content {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        padding: 0 10px;
    }

    .page-header {
        min-height: 75vh;
        display: flex;
        align-items: center;
        width: 100%;
    }

    .container {
        width: 100%;
        max-width: 1140px; 
        margin: 0 auto;
        padding: 0 15px;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin: 0 -10px;
        width: 100%;
    }

        .col-xl-4 {
            flex: 0 0 50%; 
            max-width: 60%; 
            padding: 0 140px;
        }
        
        .col-lg-5 {
            flex: 0 0 58.333333%; /* 7/12 */
            max-width: 60%;
            padding: 0 140px;
        }

        .col-md-6 {
            flex: 0 0 50%;
            max-width: 60%;
            padding: 0 140px;
        } 

    .col-md-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .d-flex {
        display: flex !important;
    }

    .flex-column {
        flex-direction: column !important;
    }

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    /* Card Styling */
    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.05);
        border-radius: 1rem;
        box-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05);
    }

    .card-plain {
        background-color: transparent;
        border: 0;
        box-shadow: none;
    }

    .mt-8 {
        margin-top: 4rem !important; /* 8 * 0.5rem = 4rem */
    }

    /* Card Header */
    .card-header {
        padding: 0.3rem 2.0rem 1rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 10;
    }

    .pb-0 {
        padding-bottom: 0 !important;
    }

    .text-left {
        text-align: center !important;
    }

    .bg-transparent {
        background-color: transparent !important;
    }

    /* Typography and Color */
    h3 {
        font-size: 2.5rem;
        font-weight: 850;
        margin-bottom: 0.5rem;
        line-height: 1.3;
    }

    .font-weight-bolder {
        font-weight: 700;
    }

    .text-info {
        color: #17c1e8; 
    }

    .text-gradient {
        background-image: linear-gradient(310deg, #17c1e8, #1a73e8);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    p {
        font-size: 1rem;
        margin-top: 0;
        margin-bottom: 1rem;
        color: #6c757d; /* Gray text for paragraphs */
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .text-sm {
        font-size: 0.875em !important;
    }

    .text-muted {
        color: #6c757d !important;
    }

    /* Card Body */
    .card-body {
        flex: 1 1 auto;
        padding: 1.5rem 1.5rem;
    }

    /* Form Styling */
    form {
        display: block;
        margin-top: 0em;
    }

    label {
        display: inline-block;
        margin-bottom: 0.5rem;
        font-size: 0.875rem;
        font-weight: 700;
        color: #344767; 
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .form-control {
        display: block;
        width: 100%;
        padding: 0.5rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #d2d6da;
        appearance: none;
        border-radius: 0.5rem;
        transition: box-shadow 0.15s ease, border-color 0.15s ease;
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #17c1e8;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(23, 193, 232, 0.25);
    }

    .text-danger {
        color: #ea0606 !important;
    }

    .text-xs {
        font-size: 0.75rem !important;
    }

    .mt-2 {
        margin-top: 0.5rem !important;
    }

    .form-check {
        display: block;
        min-height: 1.5rem;
        padding-left: 1.7em;
        margin-bottom: 0.125rem;
    }

    .form-check-input {
        width: 1em;
        height: 1em;
        margin-top: 0.25em;
        vertical-align: top;
        background-color: #fff;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
        border: 1px solid rgba(0, 0, 0, 0.25);
        appearance: none;
        border-radius: 0.25rem;
        float: left;
        margin-left: -1.7em;
    }

    .form-check-label {
        font-size: 0.875rem;
        cursor: pointer;
        margin-bottom: 0;
        color: #6c757d;
        font-weight: 400;
    }

    .form-check-input:checked {
        background-color: #17c1e8;
        border-color: #17c1e8;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3 6-6'/%3e%3c/svg%3e");
    }

    .btn {
        display: inline-block;
        font-weight: 700;
        line-height: 1.5;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        cursor: pointer;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.625rem 1.25rem;
        font-size: 0.875rem;
        border-radius: 0.5rem;
        transition: all 0.15s ease-in;
    }

    .bg-gradient-info {
        background-image: linear-gradient(310deg, #17c1e8, #1a73e8);
        border: 0;
    }

    .w-100 {
        width: 100% !important;
    }

    .mt-4 {
        margin-top: 1.5rem !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .text-center {
        text-align: center !important;
    }

    .card-footer {
        padding: 0 1.5rem 1.5rem;
        background-color: #fff;
        border-top: 0;
    }

    .pt-0 {
        padding-top: 0 !important;
    }

    .px-lg-2 {
        padding-right: 0.5rem !important;
        padding-left: 0.5rem !important;
    }

    .px-1 {
        padding-right: 0.25rem !important;
        padding-left: 0.25rem !important;
    }

    a {
        color: #17c1e8;
        text-decoration: none;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .font-weight-bold {
        font-weight: 700 !important;
    }

    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
    }

    .oblique {
        position: absolute !important;
        top: 0 !important;
        height: 100% !important;
        display: block; 
    }

    .position-absolute {
        position: absolute !important;
    }

    .h-100 {
        height: 100% !important;
    }

    .d-md-block {
        display: block !important;
    }

    .d-none {
        display: none !important;
    }

    .me-n8 {
        margin-right: -4rem !important; 
    }

    .oblique-image {
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        position: absolute !important;
        width: 100%;
        left: 0;}

    .fixed-top {
        position: fixed !important;
        top: 0 !important;
        right: 0 !important;
        left: 0 !important;
        z-index: 1030;
    }

    .ms-auto {
        margin-left: auto !important;
    }

    .z-index-0 {
        z-index: 0 !important;
    }

    .ms-n6 {
        margin-left: -3rem !important; 
    }

    @media (max-width: 991.98px) {
        .col-lg-5 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .oblique {
            display: none !important; 
        }
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    
    </head>
<body>

  <main class="main-content">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome Back!</h3>
                </div>
                <div class="card-body">
                  <div class="mb-3"><p class="mb-0">Create a new or Sign in :<br></p></div>
                  <form role="form" method="POST" action="/Landing_Page">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="" aria-label="Email">
                      {{-- @error('email') --}}
                      {{-- <p class="text-danger text-xs mt-2">{{ $message }}</p> --}}
                      {{-- @enderror --}}
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="" aria-label="Password">
                      {{-- @error('password') --}}
                      {{-- <p class="text-danger text-xs mt-2">{{ $message }}</p> --}}
                      {{-- @enderror --}}
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <small class="text-muted">Forgot you password? Reset you password 
                  <a href="/login/forgot-password" class="text-info text-gradient font-weight-bold">here</a>
                </small>
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="register" class="text-info text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

</body>
</html>