@extends('user.layouts.layouts')

@section('container')

<div class="uk-container uk-margin-large-top ">
  <div class="uk-card uk-card-default uk-width-1-2@m uk-margin-auto ">
      <div class="uk-card-header">
          <h3 class="uk-card-title">Register</h3>
      </div>
      <div class="uk-card-body">
          <form class="uk-form-stacked" action="/register" method="post">
              @csrf
              <input type="hidden" name="provider" value="local">
              <div class="uk-margin">
                  <label class="uk-form-label" for="name">Name:</label>
                  <div class="uk-form-controls">
                      <input class="uk-input  @error('name') is-invalid @enderror" type="name" id="name" placeholder="Enter your name" name="name">
                      @error('name')
                          <div class="invalid-feedback">
                          {{ $message }}
                          </div>
                      @enderror
                  </div>
              </div>
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
                <button class="uk-button uk-button-primary">Sign Up</button>
              </div>
          </form>
          <small class="">You have account? <a href="/login">Login here!</a></small>
      </div>
  </div>
</div> 

@endsection