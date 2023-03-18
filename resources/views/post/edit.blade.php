@extends('layouts.app')

@section('title')Edit @endsection

@section('content')
<div class="container mt-5">
<form method="POST" action="{{ route('posts.store') }}">
    @csrf
    <input type="hidden" name="id" value={{ $post['id'] }} class="form-control" id="exampleFormControlInput1">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name="title" value={{ $post['title'] }} class="form-control" id="exampleFormControlInput1">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" value={{ $post['description'] }} rows="3">{{ $post['description'] }}</textarea>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Post Creator</label>
        <select name="creator" class="form-control" value="{{ $post['posted_by'] }}">
        <option value="{{ $post['posted_by'] }}">{{ $post['posted_by'] }}</option>
            <option value="Mariam">Mariam</option>
            <option value="Hager">Hager</option>
            <option value="Alaa">Alaa</option>
            <option value="Radwaa">Radwaa</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Edit</button>
</form>
</div>
@endsection