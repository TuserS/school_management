<!DOCTYPE html>
<html lang="en">

<head>
    <title>block</title>
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


        <div class="row name">
            <div class="col-md-5">
                <h3>Teacher Block</h3>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <h3>Student Block</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-5">
                <table class="table table-sm">
                    <tbody>
                        <form action="/admin/block/block" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <tr>
                                <td>Teacher</td>
                                <td>
                                    <select name="user" class="custom-select">
                                        @foreach($teacher as $t)
                                            <option value="{{ $t->tid }}">{{ $t->tname }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="btn btn-sm btn-danger" type="submit">Block Teacher</button></td>
                            </tr>
                        </form>
                    </tbody>
                </table>

                <br><br>
                <h4>Teacher Block List</h4>
                <br>

                @if( count($teacherBlock) > 0 )
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teacherBlock as $s)
                            <tr>
                                <td>{{ $s->tid }}</td>
                                <td>{{ $s->tname }}</td>
                                <td>
                                    <form action="/admin/block/unblock/{{ $s->tid }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-unlock"></i> Unblock </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                @else
                    <p>Blocked teacher is not availabe</p>
                @endif


            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <table class="table table-sm">
                    <tbody>
                        <form action="/admin/block/block" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <tr>
                                <td>Student</td>
                                <td>
                                    <select name="user" class="custom-select">
                                        @foreach($student as $s)
                                            <option value="{{ $s->sid }}">{{ $s->sname }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button class="btn btn-sm btn-danger" type="submit">Block Student</button></td>
                            </tr>
                        </form>
                    </tbody>
                </table>

                <br><br>
                <h4>Student Block List</h4>
                <br>
                @if( count($studentBlock) > 0 )
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studentBlock as $s)
                            <tr>
                                <td>{{ $s->sid }}</td>
                                <td>{{ $s->sname }}</td>
                                <td>
                                    <form action="/admin/block/unblock/{{ $s->sid }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="PUT">
                                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-unlock"></i> Unblock </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                @else
                    <p>Blocked student is not availabe</p>
                @endif

            </div>
        </div>


        <footer class="mt-5 mb-3 text-muted text-center">&copy; 2018 - Laravel Sample Project</footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
</body>

</html>
