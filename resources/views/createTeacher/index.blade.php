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
            
            <a class="nav-link active" href="/adminHome">Back to Academic page</a>
        </form>


        <footer class="mt-5 mb-3 text-muted text-center">&copy; 2018 - Laravel Sample Project</footer>

    </div>
 
@endsection