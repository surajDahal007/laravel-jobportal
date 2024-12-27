<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>JobHunter | Register Now !</title>
</head>
<body>
    @include('components/navbar')
    
    <div class="container">
        <h3 class="fst-italic text-center py-3">Let's get started !</h3>
        <br><br>
            <div class="row align-items-md-stretch text-center">
                <div class="col-md-6">
                    <div class="h-70 p-4 bg-body-tertiary border rounded-3">
                    <h2>Register as a Jobseeker</h2>
                    <div class="py-4 ">
                        <img src="/person-circle.svg" class="rounded mx-auto d-block" height="100" alt="employer icon">
                        <br>
                        <p>
                            Create free account to apply!
                        </p>
                        <a
                            href="{{ route('register') }}"
                            class="btn btn-warning"
                        >
                            Register
                        </a>
                    </div>                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="h-100 p-4 bg-body-tertiary border rounded-3">
                    <h2>Register as an Employer</h2>
                    <div class="py-4">
                        <img src="/buildings-fill.svg" class="rounded mx-auto d-block" height="100" alt="employer icon">
                        <br>
                        <p>
                            Create free account to post vacancy!
                        </p>
                        <a href="/employer/register"
                            class="btn btn-success">
                            Register
                        </a>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

    @include('components.footer')
    </body>
</html>