@extends('layouts.master')

@section('content')
        <div class="container">
            <div class="intro-header">

				<h1>About {{Helpers::brand()}}</h1>


    		</div>
    		<div class="info-box">
    			<h3>For Recruiters</h3>
    			{{Helpers::brand()}} allows recruiters to preassess IT candidates ability on a level playing field.
    			<h4>Customised IT Testing</h4>
    			Set difficulty levels to assess compatibility with the exact requirements for each role. Choose from an extensive library of code challenges or add your own for complete flexibility.
    			<h4>Effective Interview Data</h4>
    			More than just testing, Code Recruit provides a Github link to actual code solutions so you can not only assess the skill level, and code viability, but also evaluate the creativity of the solution.
    			<h3>For Candidates</h3>
    			<h4>Showcase your skills and creativity</h4>
    			{{Helpers::brand()}} give you a chance to showcase your skills and creativity with real code, relevant to the employers needs and team dynamic.
    			<h4>Understand the role and the ethos of prospective employers</h4>


    		</div>
    	</div>


@endsection