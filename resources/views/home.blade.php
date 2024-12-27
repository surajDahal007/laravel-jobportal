<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>JobHunter - No.1 Job Portal</title>
</head>
<body>
    @include('components.navbar')
    <br><br>
    
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

          @foreach ($jobs as $job)
            <div class="col">
              <div class="card shadow-sm">
                <img src="/job_icon.jpg" alt="Thumbnail">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center"> 
                    <p class="text-body-secondary">
                      <u>{{$job->title}}</u>
                      <br>
                      Deadline - {{$job->deadline}}
                    </p>
                    <div class="btn-group">
                      <a href="/view-job/{{$job->id}}" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          @endforeach

        </div>
    </div>
    
    @include('components.footer')
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>

</body>
</html>