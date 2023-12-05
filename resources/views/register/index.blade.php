@extends('layouts.main')

@section('container')
<div class="row">
    <div class="">
        <main class="">
        <h1 class="">Registration Form</h1>
          <form action="/register" method="post">
            @csrf
            <input type="hidden" name="provider" value="local">
            <div class="">
              <input type="text" name="name" class="@error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
              <label for="name">Name</label>
              @error('name')
                <div class="">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="">
              <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
                <div class="">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="">
              <input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')
                <div class="">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <button class="" type="submit">Register</button>
          </form>
          <small class="">Already have account? <a href="/login">Click here</a></small>
        </main>
    </div>
</div>
@endsection