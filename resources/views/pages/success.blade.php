@extends('layouts.success')

@section('title','Nomads - Success Checkout')

@section('content')        
    
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{url('frontend/images/ic_mailbox.png')}}" alt="icon mailbox">
            <h1>Yay Success!</h1>
            <p>We've sent you email for trip instruction ! <br> Please read it as well!</p>
            <a href="{{url('/')}}" class="btn btn-homepage mt-3 px-5">Home</a>
        </div>
    </div>
</main>
@endsection

