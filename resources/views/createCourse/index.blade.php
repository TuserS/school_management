
    @extends('layouts.head')

    @section('content')
    <div class="container">
        <nav class="navbar bg-light">
            <div>
                <a class="navbar-brand menu" href="adminRequest.html">Request</a>
                <a class="navbar-brand menu" href="adminBlock.html">Block</a>
                <a class="navbar-brand menu" href="adminAcademic.html">Academic</a>
            </div>
            <div>
                <a class="navbar-brand menu" href="signin.html">Sign Out</a>
            </div>
        </nav>


        <form class="form-signin" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

          <h1 class="h3 mb-3 font-weight-normal">Create course</h1>

          <label for="inputCourseCode" class="sr-only">Course Code</label>
          <input name="courseCode" type="text" id="inputCourseCode" class="form-control" placeholder="Course Code" required autofocus>

          <label for="inputCourseName" class="sr-only">Course Name</label>
          <input  name="courseName" type="text" id="inputCourseName" class="form-control" placeholder="Course Name" required>

          <label for="inputStudentLimit" class="sr-only">Student Limit</label>
          <input name="studentLimit" type="number"  min="15" max="60" id="inputStudentLimit" class="form-control" placeholder="Student Limit" required>

          <button class="btn btn-lg btn-primary btn-block" type="submit">Create course</button>
          <a class="nav-link active" href="/adminHome">Back to Academic page</a>
        </form>


        <footer class="mt-5 mb-3 text-muted text-center">&copy; 2018 - Laravel Sample Project</footer>

    </div>

@endsection
