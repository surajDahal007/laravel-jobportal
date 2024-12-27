<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>JobHunter - Dashboard</title>
</head>
<body>
    @include('components.navbar')
    @include('components.userNavbar')  

    <br><br>
    {{-- {{dd($eachjob)}} --}}
     <div class="container py-4">
        <div class="p-5 mb-4 bg-body-tertiary rounded-3 border"> 
            <h4 class="mb-4">Company - {{$eachjob[1][0]->name}}</h4>
           <span class="fw-bold">Title : </span> {{$eachjob[0][0]->title}}
           <br>
           <span class="fw-bold">Level : </span> {{$eachjob[0][0]->level}}
           <br>
           <span class="fw-bold">No. of Vacancy : </span> {{$eachjob[0][0]->vacancy_no}}
           <br> 
           <span class="fw-bold">Location : </span> {{$eachjob[0][0]->location}}
           <br> 
           <span class="fw-bold">Salary : </span> {{$eachjob[0][0]->salary}}
           <br> 
           <span class="fw-bold">Deadline : </span> {{$eachjob[0][0]->deadline}}
           <br> 

           <span class="fw-bold">Education Level :</span> {{$eachjob[0][0]->education_level}} 
            <br>
            <span class="fw-bold">Experience : </span> {{$eachjob[0][0]->experience}}
            <br> 
            <span class="fw-bold">Skills : </span> {{$eachjob[0][0]->skills}}
            <br>
            
            <span class="fw-bold">Description : </span> 
            <br>
            {{$eachjob[0][0]->description}}
           
        </div>
    </div>     

    @include('components.footer')
</body>
</html>