<!DOCTYPE html>
<html lang="en">

<head>
    <title>academic</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
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
        <br>
        @if(session('message'))
            <div class="alert alert-success" role="alert">{{session('message')}}</div>
        @endif

        <div class="row name">

            <br>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a class="nav-link active text-center" href="/admin/academic/createCourse">Create Course</a>
            </div>
            <div class="col-md-4">
                <a class="nav-link active text-center" href="/admin/academic/createTeacher">Create Teacher</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Course Assign</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <table class="table table-sm">
                    <tbody>
                        <form action="/admin/academic/assign" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <tr>
                                <td>Course</td>
                                <td>
                                    <select name="course" class="custom-select">
                                        @foreach($course as $c)
                                            <option value="{{ $c->cid }}">{{ $c->cname }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Teacher</td>
                                <td>
                                    <select name="teacher" class="custom-select">
                                        @foreach($teacher as $t)
                                            <option value="{{ $t->tid }}">{{ $t->tname }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="btn btn-md btn-primary" type="submit">Assign</button></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <!-- Success or failed notification -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br><br>
                <h4>Assigned Course</h4>
                <br>
                @if( count($assign) > 0 )
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Course Teacher</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($assign as $a)
                            <tr>
                                <td>{{ $a->ccode }}</td>
                                <td>{{ $a->cname }}</td>
                                <td>{{ $a->cteacher }}</td>
                                <td>
                                    <form action="/admin/academic/remove/{{ $a->cid }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-check-circle"></i> Remove </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                @else
                    <p>Assign course is not availabe</p>
                @endif
            </div>
        </div>


        <footer class="mt-5 mb-3 text-muted text-center">&copy; 2018 - Laravel Sample Project</footer>

    </div>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
