@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="page-title">Welcome to the Student Management System</h1>
            <img src="https://img.freepik.com/free-vector/goal-achievement-career-promotion-school-graduation-educational-trajectory-educational-capital-strategy-determine-your-educational-way-concept_335657-820.jpg?size=626&ext=jpg&ga=GA1.1.386372595.1698192000&semt=ais"
            alt="Welcome Image" class="img-fluid mt-4" style="border-radius: 10px;" width="400px">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-8 mx-auto text-center">
            <p class="lead">Manage your students with our Student Management System. Keep track of student information, update records, and ensure a seamless educational experience.</p>
            <p>Features:</p>
            <ul class="list-unstyled">
                <li>Efficient student data management</li>
                <li>Quick access to student information</li>
                <li>Easy record updates</li>

            </ul>
        </div>
    </div>
</div>

@endsection

@push('css')
<style>
    .page-title {
        padding-top: 7vh;
        font-size: 2.5rem;
        color: #4b4b4b;
    }

    .lead {
        font-size: 1.2rem;
        color: #555;
    }
</style>
@endpush
