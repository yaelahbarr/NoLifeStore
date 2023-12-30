@extends('user.layouts.layouts')

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
                <div class="uk-margin text-center">
                    <button class="uk-button uk-button-primary uk-border-rounded">Login</button>
                </div>
            </form>
            <div class="uk-margin text-center">      
    <span class="uk-margin-small-right"  style="font-size: 1rem;">Or login with</span>
    <br>  
</div>
<div class="uk-margin uk-flex uk-flex-center">      
    <a href="/auth/google">
   <img width="20" src="/img/Google.png" alt="">
</a>
<br>
</div>
<div class="uk-margin text-center">      
<small style="font-size: 1rem;">You don't have an account? <a href="/register">Register here!</a></small>
        </div>
    </div>
</div>


@endsection