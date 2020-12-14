@extends('layouts.admin')

@section('main_content')

    @if($result = session('result'))
        <div class="alert alert-{{ $result['alert'] }}">
            {{ $result['message'] }}
        </div>
    @endif

    <div class="container-fluid card" style="height: 600px; font-weight: bolder; font-size: large">
        <div class="row">
            <div class="col-12">Title: <span class="text-success"> {{ $post->title }} </span></div>
        </div>
        <br><br>
        <div class="row container">
            Tags:
            @foreach($post->tags as $tag)
                <a href="#" class="col col-3 mt-2 mx-1 badge badge-pill badge-secondary">{{ $tag->title }}</a>
            @endforeach
        </div>
        <br><br>
        <div class="row container">
            Categories:
            @foreach($post->categories as $category)
                <a href="#" class="col col-3 mt-2 mx-1 badge badge-pill badge-primary">{{ $category->title }}</a>
            @endforeach
        </div>
        <br><br>
        <div class="row">
            <div class="col-6">Content: <span class="text-success"> {{ $post->content }} </span></div>
            <div class="col-6">Created At: <span class="text-success"> {{ $post->created_at }} </span></div>
        </div>
        <br><br>
        <div class="row">
            <form action="" method="post" class="col-6">
                @csrf
                <label>Status: </label>
                <select name="status" class="form-control">
                    <option class="bg-success" value="1" @if($post->status) selected @endif>Published</option>
                    <option class="bg-warning" value="0" @if(!$post->status) selected @endif>Trashed</option>
                </select>
                <button class="btn btn-success mt-2" type="submit">
                    change status
                </button>
            </form>
            <form action="{{ route('customer.post.destroy', $post) }}" method="post" class="col-6 mt-5">
                @csrf
                @method('DELETE')
                <br>
                <a href="{{ route('customer.post.index') }}" class="btn btn-info float-right mr-4 text-light">
                    back
                </a>
                <button class="btn btn-danger float-right mr-4" type="submit">
                    Delete Post
                </button>
            </form>
        </div>
    </div>
@endsection
