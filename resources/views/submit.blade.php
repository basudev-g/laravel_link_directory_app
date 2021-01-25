@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Submit Link Form:</h1>
        </div>
        <div class="row">
        <form action="{{url('/submit')}}" method="post">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger">
                    <h1>Please, solve the following errors!</h1>
                </div>
            @endif
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{old('title')}}">
                @error('title')
                    <div>{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="url">Url</label>
                <input type="text" name="url" class="form-control" value="{{old('url')}}">
                @error('url')
                    <div>{{$message}}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                @error('description')
                    <div>{{$message}}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
@endsection
