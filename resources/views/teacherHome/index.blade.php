
<!DOCTYPE html>
<html lang="en">

<head>
    <title>course Teacher</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
   {{-- <link href="css/profile.css" rel="stylesheet">
    <script defer src="js/fontawesome-all.js"></script> --}}
</head>

<body>
         
    <div class="container">
        <nav class="navbar bg-light">
            <div>
                <a class="navbar-brand menu" href="/teacherProfile">Profile</a>
                <a class="navbar-brand menu" href="/teacherHome">Course</a>
                <a class="navbar-brand menu" href="#">Report</a>
            </div>
            <div>
                <a class="navbar-brand menu" href="signin.html">Sign Out</a>
            </div>
        </nav>




        <h2 class="text-center name">Taken Course</h2>
        <br>
        <br>
        <div class="row">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Course Details</th>
                        <th scope="col">Students Enrolled</th>
                    </tr>
                </thead>
                @php
                     $counter=0;
                @endphp
                @foreach ($courses as $course)

                    @if( $course->user_id == session('user')->id )
                       
                <tbody>
                    <tr>
                        <td>{{$course->code}}</td>
                        <td>{{$course->name}}</td>
                    <td><a href="/courseDetails/{{$course->id}}">Details</a></td>
                        <td>@php
                                echo $countArr[$counter];
                              @endphp[40]</td>
                            
                                 
                                        @php
                                       $counter++;
                                     @endphp 
 

                    <td><a href="/giveMarks/{{$course->id}}"> Give Marks </a> </td>
                    </tr>
                   
                </tbody>
                @endif
                @endforeach
            </table>
        </div>
           
        <footer class="mt-5 mb-3 text-muted text-center">&copy; 2018 - Laravel Sample Project</footer>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>

</body>

</html>