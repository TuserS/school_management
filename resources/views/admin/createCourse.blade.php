<!DOCTYPE html>
<html lang="en">

<head>
    <title>create course</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signinup.css') }}" rel="stylesheet">
    <script src="{{ asset('js/fontawesome-all.js') }}"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar bg-light">
            <div>
                <a class="navbar-brand menu" href="/admin/request">Request</a>
                <a class="navbar-brand menu" href="/admin/block">Block</a>
                <a class="navbar-brand menu" href="/admin/academic">Academic</a>
            </div>
            <div>
                <a class="navbar-brand menu" href="/signout">Sign Out</a>
            </div>
        </nav>


        <form action="/admin/academic/createCourse" method="post" class="form-signin">
            {{ csrf_field() }}
            <h1 class="h3 mb-3 font-weight-normal">Create course</h1>

            <label for="inputCourseCode" class="sr-only">Course Code</label>
            <input name="courseCode" type="text" id="inputCourseCode" class="form-control" placeholder="Course Code" required autofocus>

            <label for="inputCourseName" class="sr-only">Course Name</label>
            <input name="courseName" type="text" id="inputCourseName" class="form-control" placeholder="Course Name" required>

            <label for="inputStudentLimit" class="sr-only">Student Limit</label>
            <input name="studentLimit" type="number"  min="15" max="60" id="inputStudentLimit" class="form-control" placeholder="Student Limit" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Create course</button>
            <a class="nav-link active" href="/admin/academic">Back to Academic page</a>
        </form>


        <footer class="mt-5 mb-3 text-muted text-center">&copy; 2018 - Laravel Sample Project</footer>

    </div>
</body>

</html>
