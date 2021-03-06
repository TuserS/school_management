@extends('layouts.head')

@section('content')

    <div class="container">
        <nav class="navbar bg-light justify-content-end">
            <a class="navbar-brand" href="/signin">Sign In</a>
            <a class="navbar-brand" href="/signup">Sign Up</a>
        </nav>

        @if(session('message'))
        <div style class=" container alert alert-danger">
           <p style="text-align:center;">{{session('message')}}</p>
       </div>
      
 
    @endif

        <form class="form-signin" method="POST" >
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

            <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

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

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            <a class="nav-link active" href="/signin">Already an Account?</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2018 - Laravel Sample Project</p>
        </form>

    </div>
    @endsection
