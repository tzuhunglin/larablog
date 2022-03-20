@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('postsupdate',['postid'=>$oPostData->id]) }}">
                        @csrf
                        @method('put')
                        <input  type="hidden" class="form-control " name="id" value="{{$oPostData->id}}" >
                        <input  type="hidden" class="form-control " name="userid" value="{{$oPostData->userid}}" >

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Title</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control " name="title" value="{{$oPostData->title}}" required autocomplete="title" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Content</label>

                            <div class="col-md-6">
                                <input id="content" type="text" class="form-control " name="content" value="{{$oPostData->content}}" required autocomplete="title" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    UPDATE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
