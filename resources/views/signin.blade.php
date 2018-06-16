@extends('layouts.app')

@section('content')
<div class="text-center col-sm-6" style="position:absolute;left:25%; top:30%;">
  <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control mb-2" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control mb-2" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="mt-5 mb-3 ">New user? <a href="/register"> Create new account</a></p>
  </form>
</div>
@endsection
