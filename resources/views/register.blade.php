@extends('layouts.app')

@section('content')
<div class="text-center col-sm-6" style="position:absolute;left:25%; top:30%;">
  <form class="form-register">
        <h1 class="h3 mb-3 font-weight-normal">Register Form</h1>
        <label for="reg_Email" class="sr-only">Email address</label>
        <input type="email" id="reg_Email" class="form-control mb-2" placeholder="Email address" required autofocus>
        <label for="reg_Password" class="sr-only">Password</label>
        <input type="password" id="reg_Password" class="form-control mb-2" placeholder="Password" required>
        <label for="reg_Password_confirm" class="sr-only">Password confirm</label>
        <input type="password" id="reg_Password_confirm" class="form-control mb-2" placeholder="Password again" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register!</button>
        <p class="mt-5 mb-3 ">Already have an account? <a href="/login"> Login</a></p>
  </form>
</div>
@endsection
