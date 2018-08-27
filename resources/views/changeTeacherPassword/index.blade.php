<!DOCTYPE html>
<html lang="en">

<head>
    <title>change password</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" rel="stylesheet">
    <link href="css/signinup.css" rel="stylesheet">
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

        @if(session('messageFail'))
        <p class=" container alert alert-danger">{{session('messageFail')}}</p>
@endif 
 @if(session('messageSuccess'))
    <p class=" container alert alert-success">{{session('messageSuccess')}}</p>
@endif


        <form method="POST" class="form-signin">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

            <h1 class="h3 mb-3 font-weight-normal">Change password</h1>

            <label  for="currentPassword" class="sr-only">Current Password</label>
            <input name="currentPass"type="password" id="currentPassword" class="form-control" placeholder="Current Password" required autofocus>

            <label  for="newPassword" class="sr-only">New Password</label>
            <input name="newPass" type="password" id="newPassword" class="form-control" placeholder="New Password" required>

            <label for="inputRetypePassword" class="sr-only">Retype Password</label>
            <input name="retypePass" type="password" id="inputRetypePassword" class="form-control" placeholder="Retype Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Change password</button>
            <a class="nav-link active" href="profile.html">Back to profile page</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2018 - Nodejs Sample Project</p>
        </form>


    </div>

</body>

</html>