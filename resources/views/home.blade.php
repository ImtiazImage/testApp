@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

                <x-alert>
                    <p>Here is a response from image upload.</p>
                </x-alert>


                @if (Auth::user()->avatar)
                    <div class="card-body">
                        <img src="{{ asset('/storage/images/'.Auth::user()->avatar) }}" alt="Avatar" height="250px" width="250px">
                    </div>
                @endif
                <div class="card-body">
                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" />
                        <input type="submit" value="Upload" />
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
