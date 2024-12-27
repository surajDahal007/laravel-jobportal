<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>{{$job_detail[1][0]->title}} | JobHunter</title>
    {{-- {{$job->title}}  --}}
</head>
<body>
    @include('components.navbar')

    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> 
        {{session()->get('message')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    {{-- {{dd($job_detail)}} --}}
    
     <div class="container py-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3 border">
             <h3>{{$job_detail[0][0]->name}}</h3> 
           <span class="fw-bold">Title : </span> {{$job_detail[1][0]->title}}
           <br>
            <span class="fw-bold">Level : </span>{{$job_detail[1][0]->level}} 
           <br>
           <span class="fw-bold">No. of Vacancy : </span>{{$job_detail[1][0]->vacancy_no}}
           <br> 
           <span class="fw-bold">Location : </span>{{$job_detail[1][0]->location}} 
           <br> 
           <span class="fw-bold">Salary : </span>{{$job_detail[1][0]->salary}} 
           <br> 
           <span class="fw-bold">Deadline : </span>{{$job_detail[1][0]->deadline}} 
           <br> 

           <hr>

           <span class="fw-bold">Education Level :</span>{{$job_detail[1][0]->education_level}}
            <br>
            <span class="fw-bold">Experience : </span>{{$job_detail[1][0]->experience}}
            <br> 
            <span class="fw-bold">Skills : </span> {{$job_detail[1][0]->skills}}
            <br>

            <hr>
            
            <span class="fw-bold">Description : </span> 
            <br>
            {{$job_detail[1][0]->description}}

            <hr>
            @auth
                <form action="/applyJob" method="post">
                    @csrf
                    <input type="hidden" name="title" value="{{$job_detail[1][0]->title}}">
                    <input type="hidden" name="deadline" value="{{$job_detail[1][0]->deadline}}">
                    <input type="hidden" name="job_id" value="{{$job_detail[1][0]->id}}">

                    <button class="btn btn-success">
                        Apply 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                            <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"/>
                            <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                        </svg>
                    </button>
                </form>
            @else
                <div class="alert alert-danger fw-bold" role="alert">
                    LOGIN TO APPLY ! 
                </div>
            @endauth
        </div>
    </div> 

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>