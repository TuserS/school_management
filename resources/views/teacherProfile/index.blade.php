<!DOCTYPE html>
<html lang="en">

<head>
    <title>profile</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    {{-- <link href="css/profile.css" rel="stylesheet"> --}}
</head>

<body>
    <div class="container">
        <nav class="navbar bg-light">
            <div>
                <a class="navbar-brand menu" href="/teacherProfile">Profile</a>
                <a class="navbar-brand menu" href="/teacherHome">Course</a>
                <a class="navbar-brand menu" href="report.html">Report</a>
            </div>
            <div>
                <a class="navbar-brand menu" href="signin.html">Sign Out</a>
            </div>
        </nav>




        <h2 class="text-center name">{{ session('user')->name}}</h2>
        <br><br>
        <div class="row">
            <div class="col-4">
                <h3>About Me</h3>
            </div>
            <div class="col-4">
                <a href="/editTeacherProfile"><h6 class="text-right" style="color:#0078D7"><i class="fas fa-edit" style="color:#0078D7"></i> Edit Profile</h6></a>
            </div>
            <div class="col-4">
                <a href="/changePassword"><h6 class="text-right" style="color:#0078D7"><i class="fas fa-edit" style="color:#0078D7"></i> Change Password</h6></a>
            </div>
        </div>
        <br>
        <div class="row">
            <table class="table table-sm">
                <tbody>
                    <tr>
                        <td>Name</td>
                    <td>{{ session('user')->name}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ session('user')->email}}</td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>{{ session('user')->gender}}</td>
                    </tr>
                </tbody>
            </table>
        </div>


    </div>

</body>

</html>