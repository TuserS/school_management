@extends('layouts.head')

@section('content')
    <div class="container">
        <nav class="navbar bg-light justify-content-end">
            <a class="navbar-brand" href="/signin">Sign In</a>
            <a class="navbar-brand" href="/signup">Sign Up</a>
        </nav>

        @if(session('message'))
                <p class=" container alert alert-danger">{{session('message')}}</p>
        @endif 
         @if(session('messageSuccess'))
            <p class=" container alert alert-success">{{session('messageSuccess')}}</p>
        @endif
    
        <form class="form-signin" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password"  name="password" id="inputPassword" class="form-control" placeholder="Password" required>

            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

            <a class="nav-link active" href="/signup">Create Account</a>

            <p class="mt-5 mb-3 text-muted">&copy; 2018 - Laravel Sample Project</p>
        </form>
       

    </div>


@endsection