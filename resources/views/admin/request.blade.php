<!DOCTYPE html>
<html lang="en">

<head>
    <title>admin request</title>
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



        <div class="row">
            <div class="col-md-12">

                <br><br>
                <h4>Student Course Request</h4>
                <br>
                @if( count($course) > 0 )
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Course Teacher</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($course as $c)
                            <tr>
                                <td>{{ $c->uid }}</td>
                                <td>{{ $c->sname }}</td>
                                <td>{{ $c->cname }}</td>
                                <td>{{ $c->cteacher }}</td>
                                <td>
                                    <form action="/admin/request/course/{{ $c->id }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="far fa-check-circle"></i> Accept </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="/admin/request/course/{{ $c->id }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-check-circle"></i> Cancel </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                @else
                    <p>Student couse request is not availabe</p>
                @endif



                <br><br>
                <h4>Student Drop Request</h4>
                <br>
                @if( count($drop) > 0 )
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Course Teacher</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($drop as $d)
                            <tr>
                                <td>{{ $d->uid }}</td>
                                <td>{{ $d->sname }}</td>
                                <td>{{ $d->cname }}</td>
                                <td>{{ $d->cteacher }}</td>
                                <td>
                                    <form action="/admin/request/drop/{{ $d->id }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="far fa-check-circle"></i> Accept </button>
                                    </form>
                                </td>
                                <td>
                                    <form action="/admin/request/drop/{{ $d->id }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-check-circle"></i> Cancel </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                @else
                    <p>Student drop request is not availabe</p>
                @endif
            </div>

        </div>


        <footer class="mt-5 mb-3 text-muted text-center">&copy; 2018 - Laravel Sample Project</footer>
    </div>


    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</body>

</html>
