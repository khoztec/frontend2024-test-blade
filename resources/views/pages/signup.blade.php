@extends('layouts.app')
 
@section('Sign Up', 'Page Sign Up')

@section('content')
<div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
    <div class="w-25 bg-white row p-4">
        <div class="col-12 text-center p-2">
            <h3>Sign Up</h3>
        </div>
        <div class="col-12 p-2">
            <div class="form-group">
                <label for="emailInput">Email address</label>
                <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" placeholder="Enter your Email">
                @if ($errors->has('emailInput'))
                    <span class="text-danger">Must be valid email</span>
                @endif
            </div>
        </div>
        <div class="col-12 p-2">
            <div class="form-group">
                <label for="passwordInput1">Password</label>
                <input type="password" class="form-control" id="passwordInput1" placeholder="Enter your Password">
            </div>
        </div>
        <div class="col-12 p-2">
            <div class="form-group">
                <label for="passwordInput2">Confirm Password</label>
                <input type="password" class="form-control" id="passwordInput2" placeholder="Confirm your Password">
              </div>
        </div>
        <div class="col-12 flex flex-column justify-center p-3 px-5 text-center">
            <button type="submit" class="btn btn-secondary">Submit</button>
            <p class="mt-3">Already registered? <span><a href="/" style="text-decoration: underline">Sign In</a></span></p>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    
@endpush

