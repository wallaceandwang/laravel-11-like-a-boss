@extends('layouts.app')

@section('title', 'About - L322 Tribute Page')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">About This Site</h1>
    
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <p class="lead">
                This site was built by <a href="https://david-dickinson.com" target="_blank">David Dickinson</a> to document a simple website build using Laravel 11 (and because I love the L322 model Range Rover).
            </p>
            
            <p>
                The code used throughout this demo supports a blog post due out on the 11th November 2024. You can read the full article at:
                <a href="https://onemoredavid.com/blog/2024-11-11-learning-laravel/" target="_blank">
                    Learning Laravel - A Beginner's Guide to Building with Laravel 11
                </a>
            </p>
            
            <div class="mt-5">
                <h2 class="mb-3">Why the L322 Range Rover?</h2>
                <p>
                    The L322 Range Rover holds a special place in the hearts of many Land Rover enthusiasts. It represents a perfect balance between the rugged capabilities of its predecessors and the luxurious features that would come to define later models. This website serves as a tribute to this iconic vehicle, showcasing its history, features, and enduring appeal.
                </p>
            </div>
            
            <div class="mt-5">
                <h2 class="mb-3">About the Author</h2>
                <p>
                    David Dickinson is a web developer and Land Rover enthusiast. With a passion for both coding and classic vehicles, David combines these interests in this demonstration project. To learn more about David's work or to connect with him, visit the <a href="{{ route('contact') }}">Contact page</a>.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection