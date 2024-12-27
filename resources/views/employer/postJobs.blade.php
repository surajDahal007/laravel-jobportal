<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>Employer - Post Jobs | JobHunter</title>
</head>
<body>
    @include('employer.empNavbar')

    <div class="container py-4">
        {{-- form here --}}
        @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success !</strong>             
            {{session()->get('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <form action="{{route('employer.postJob')}}" method="post" >
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Deadline</label>
              <br>
              <input type="date" name="deadline">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Job Level</label>
                <input type="text" name="level" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No. of Vacany</label>
                <input type="number" name="vacancy_no" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Location</label>
                <input type="text" name="location" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Salary</label>
                <input type="text" name="salary" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Education Level</label>
                <input type="text" name="education_level" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Experience</label>
                <input type="text" name="experience" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Skills</label>
                <input type="text" name="skills" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-outline-primary">Post Job</button>
          </form>
    </div>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>