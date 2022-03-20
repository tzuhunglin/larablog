@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            id:{{ $oPostData->id}}<br/>
                            title:{{$oPostData->title}}<br/>
                            content:{{$oPostData->content}}<br/>

                        </div>

                    You are logged in!
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit"  class="btn btn-primary">
                                <a href='{{url("/posts/{$oPostData->id}/edit")}}'>EDIT</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
