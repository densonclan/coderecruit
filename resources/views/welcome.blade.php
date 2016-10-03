@extends('layouts.master')

@section('content')
 <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-header">
                <div class="intro-lead-in"><h1>Welcome To &lbrace;CODE&rbrace; RECRUIT</h1></div>
                <div class="intro-message"><h3>Where Job Site meets Hackathon</h3></div>
                <a href="about" class="btn btn btn-info btn-lg">Tell Me More</a>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <button class=" btn btn-primary btn-lg" id="cand">Candidate</button>

        <button class=" btn btn-success btn-lg" id="rec">Recruiter</button>
    </div>


@endsection