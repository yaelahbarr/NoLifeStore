@extends('layouts.main')

@section('container')

<div class="uk-container uk-margin-large-top">
    <div class="uk-card uk-card-default uk-width-1-2@m uk-margin-auto">
        <div class="uk-card-header">
            <h3 class="uk-card-title">Login</h3>
        </div>
        <div class="uk-card-body">
            <form class="uk-form-stacked" action="/login" method="post">
                @csrf
                <div class="uk-margin">
                    <label class="uk-form-label" for="email">Email:</label>
                    <div class="uk-form-controls">
                        <input class="uk-input  @error('email') is-invalid @enderror" type="email" id="email" placeholder="Enter your email" name="email">
                        @error('email')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="password">Password:</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="password" id="password" placeholder="Enter your password" name="password">
                    </div>
                </div>
                <div class="uk-margin">
                    <button class="uk-button uk-button-primary" type="submit">Login</button>
                </div>
            </form>
            <a href="/auth/google" class="">Tombol Gugel</a>
            <small class="">You don't have account? <a href="/register">Click here!</a></small>
        </div>
    </div>
</div>


@endsection
<!-- <div class="row justify-content-center">
    <div class="col-md-4">

      @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if(session()->has('loginError'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

        <main class="form-signin w-100 m-auto">
        <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
                </div>
                <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
            </form>
            <a href="/auth/google" class="btn btn-danger">Tombol Gugel</a>
          <small class="d-block text-center mt-3">You don't have account? <a href="/register">Click here!</a></small>
        </main>
    </div>
</div> -->