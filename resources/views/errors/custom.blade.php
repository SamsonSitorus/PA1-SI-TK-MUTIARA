@extends('layouts.main')

@section('container')
<style>
    .error-container {
        text-align: center;
        padding: 50px;
        margin: 50px auto;
        max-width: 600px;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .error-heading {
        font-size: 4.5rem;
        color: #dc3545;
        margin-bottom: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
    }

    .error-link {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 1.2rem;
        color: #ffffff;
        background-color: #007bff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .error-link:hover {
        background-color: #0056b3;
    }
</style>
<div class="error-container">
    <h1 class="error-heading">EROR 404</h1>
    <p>NOT FOUND </p>
    <a class="error-link" href="{{ url()->previous() }}">Back</a>
</div>
@endsection
