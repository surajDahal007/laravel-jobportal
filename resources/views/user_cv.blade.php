<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>Review Profile | Jobhunter</title>
</head>
<body>
    @include('components.navbar')
    @include('components.userNavbar')
    {{-- {{dd($detail)}} --}}

    <h2 class="fst-italic py-3 text-center">My CV</h2>

    @if (session()->has('message'))
        <div class="alert alert-danger" role="alert">
            Error ! You have to fill all forms to obtain CV
        </div>
    @else
        <div class="container mb-4">
            <div class="p-5 mb-4 bg-body-tertiary border">
                <div class="fw-bold fs-4 mb-3">Name - {{$detail[0][0]->name}}</div> 
                <div>
                
                    Email: {{$detail[0][0]->email}}
                <br>
                    Address: {{$detail[1][0]->address}}
                    <br>                
                    Phone: {{$detail[1][0]->phone}}
                    <br>
                    Date of Birth: {{$detail[1][0]->dob}}
                </div>
                <hr>

                <div class="mb-3 py-2">
                    <h5>Objective</h5>
                    {{$detail[2][0]->objective}}
                </div>
                <hr>


                <div>
                    <h5>Work Experience</h5>
                    Role - {{$detail[3][0]->role}}
                    <br>
                    Designation - {{$detail[3][0]->designation}}
                    <br>
                    Company - {{$detail[3][0]->company}}
                    <br>
                    Location - {{$detail[3][0]->location}}
                    <br>
                </div>
                <hr>

                <div>
                    <h5>Education</h5>
                    {{$detail[4][0]->course}} - ({{$detail[4][0]->degree}}) 
                    <br>
                    University : {{$detail[4][0]->university}}
                    <br>
                    Institution : {{$detail[4][0]->institution}}
                    <br>
                    CGPA/Percentage : {{$detail[4][0]->percent}}
                    <br>
                    Graduation Year : {{$detail[4][0]->gradYear}}
                </div>
                <hr>

                <div>
                    <h5>Specialiation and Skills</h5>
                    <span class="fw-bold fst-italic fst-underline text-decoration-underline">Skills</span> 
                    <br>
                    {{$detail[5][0]->skills}} 
                </div>
            </div>
        </div>
    @endif

   
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>