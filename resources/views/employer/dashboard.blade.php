<?php
  $count = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.3.3-dist/css/bootstrap.css">
    <title>Employer - Dashboard | JobHunter</title>
</head>
<body>
    @include('employer.empNavbar')

    <h3 class="text-center mb-3 fst-italic">My Posted Jobs</h3>
    
    <div class="container py-4">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Level</th>
                <th scope="col">Deadline</th>
                <th scope="col">No. of Applicants</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($jobs as $job)
              <tr>
                <th scope="row">{{++$count}}</th>
                <td>
                  <a href="#">
                    {{$job->title}}
                  </a>
                </td>
                <td>{{$job->level}}</td>
                <td>{{$job->deadline}}</td>
                <td>N/A</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>