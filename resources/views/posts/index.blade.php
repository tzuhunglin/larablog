@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @foreach ($aPostsList as $oPostData)
                        <div class="alert alert-success" role="alert">
                            <a href='{{url("/posts/{$oPostData->id}")}}'>{{ $oPostData->title }}</a>
                        </div>
                    @endforeach

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
