<!DOCTYPE html>
<html lang="en">

<head>
    <title>create teacher</title>
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


        <form action="/admin/academic/createTeacher" method="post" class="form-signin">
            {{ csrf_field() }}
            <h1 class="h3 mb-3 font-weight-normal">Create Teacher</h1>

            <label for="inputName" class="sr-only">Name</label>
            <input name="name" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required>

            <div class="radio ">
                <label>
                    <input type="radio" value="Male" name="Gender" required> Male
                    <input type="radio" value="Female" name="Gender"> Female
                </label>
            </div>

            <label for="inputPassword" class="sr-only">Password</label>
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <label for="inputConformPassword" class="sr-only">Conform Password</label>
            <input name="confirmPassword" type="password" id="inputConformPassword" class="form-control" placeholder="Conform Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Save Teacher</button>

            <a class="nav-link active" href="/admin/academic">Back to Academic page</a>
        </form>


        <footer class="mt-5 mb-3 text-muted text-center">&copy; 2018 - Laravel Sample Project</footer>

    </div>
</body>

</html>
