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
    <title>JobHunter - Dashboard</title>
</head>
<body>
    @include('components.navbar')
    @include('components.userNavbar')  

    <br><br>
    {{-- {{dd($jobs)}} --}}
    <div class="container">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Job Position</th>
                <th scope="col">Deadline</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($jobs as $job) 
                <tr>
                    <th scope="row">{{++$count}}</th>
                    <td>
                        <a href="/appliedJobInfo/{{$job->id}}" target="_blank">
                            {{$job->title}}
                        </a>
                    </td>
                    <td>{{$job->deadline}}</td>
                </tr> 
            @endforeach

            </tbody>
        </table>
    </div>  

    @include('components.footer')
</body>
</html>