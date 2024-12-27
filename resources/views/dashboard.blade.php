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
    @include('components.userNavbar')  

    <div class="container py-4">
      <h3 class="fst-italic mb-4">** This is one time fill-in fields.</h3>
      @if (session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Success !</strong>             
          {{session()->get('message')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <form method="post" action="/postGeneralInfo">
        @csrf
        <h5>General Information</h5>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Address</label>
          <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Phone</label>
          <input type="number" name="phone" maxlength="10" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Date of Birth</label>
          <br>
          <input type="date" name="dob">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <hr>
   
    <div class="container py-4">
      <form action="/postObjective" method="post">
        @csrf
        <h5>Career Objective</h5>
        <div class="mb-3">
          <input type="text" name="objective" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <hr>

    <div class="container py-4">
      <form method="post" action="/workExperiences">
        @csrf
        <h5>Latest Work Experience</h5>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Designation</label>
          <input type="text" name="designation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Company</label>
          <input type="text" name="company" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Location</label>
          <input type="text" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Role(under 50 words)</label>
          <input type="text" name="role" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <hr>

    {{-- education level  --}}
    <div class="container py-4">
      <form action="/educationLevel" method="post">
        @csrf
        <h5>Highest Education Level</h5>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Degree</label>
          <input type="text" name="degree" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Course/Program</label>
          <input type="text" name="course" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Board/University</label>
          <input type="text" name="university" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">College/Institution</label>
          <input type="text" name="institution" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">CGPA/Percentage</label>
          <input type="number" name="percent" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Graduation Year</label>
          <br>
          <input type="date" name="gradYear">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <hr>

    {{-- skills level  --}}
    <div class="container py-4">
      <form method="post" action="/skills">
        @csrf
        <h5>Skills Level</h5> 
        <pre># Separate by Comma(,) </pre>
        <div class="mb-3">
          <div class="form-floating">
            <textarea class="form-control" name="skills" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Mention each skills in ONE WORD...</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <hr>
   
    @include('components.footer')
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html>