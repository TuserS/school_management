<!DOCTYPE html>
<html lang="en">

<head>
    <title>edit profile</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    {{-- <link href="css/signinup.css" rel="stylesheet"> --}}
</head>

<body>
    <div class="container">
        <nav class="navbar bg-light">
            <div>
                <a class="navbar-brand menu" href="profile.html">Profile</a>
                <a class="navbar-brand menu" href="course.html">Course</a>
                <a class="navbar-brand menu" href="report.html">Report</a>
            </div>
            <div>
                <a class="navbar-brand menu" href="signin.html">Sign Out</a>
            </div>
        </nav>



        @if(session('messageFaliure'))
        <p class=" container alert alert-danger">{{session('message')}}</p>
@endif 
 @if(session('messageSuccess'))
    <p class=" container alert alert-success">{{session('messageSuccess')}}</p>
@endif
        <form class="form-signin" method="POST">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

            <h1 class="h3 mb-3 font-weight-normal">Edit profile</h1>

            <label for="inputName" class="sr-only">Name</label>
            <input name = "name" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input  name = "email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>

            <div class="radio ">
                <label>
                    <input type="radio" value="Male" name="Gender" required> Male
                    <input type="radio" value="Female" name="Gender"> Female
                </label>
            </div>
            <br>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Update profile</button>
            <a class="nav-link active" href="profile.html">Back to profile page</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2018 - Nodejs Sample Project</p>
        </form>


    </div>

</body>

</html>