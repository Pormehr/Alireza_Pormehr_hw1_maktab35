@extends('layouts.customer')

@section('main_content')

    @if($result = session('result'))
        <div class="alert alert-{{ $result['alert'] }}">
            {{ $result['message'] }}
        </div>
    @endif

    <div class="container">
        <table class="table table-striped">

            <thead class="bg-dark text-white">
            <tr class="row text-center">
                <th class="col-1">{{ __('posts.index.id') }}</th>
                <th class="col-2">{{ __('posts.index.post_title') }}</th>
                <th class="col-2">{{ __('posts.index.post_slug') }}</th>
                <th class="col-1">Status</th>
                <th class="col-2">{{ __('posts.index.categories') }}</th>
                <th class="col-2">{{ __('posts.index.tags') }}</th>
                <th class="col-2">{{ __('posts.index.operations') }}</th>
            </tr>
            </thead>

            <tbody>
            @foreach($posts as $post)
                <tr class="row text-center">
                    <td class="col-1">{{ $post->id }}</td>
                    <td class="col-2">{{ $post->title }}</td>
                    <td class="col-2">{{ $post->slug }}</td>
                    <td class="col-1"> @if ($post->status) <span class="text-success"> Published </span> @else <span class="text-danger"> trashed </span> @endif</td>
                    <td class="col-2">
                        @foreach($post->categories as $category)
                            <a href="#" class="badge badge-pill badge-primary">{{ $category->title }}</a>
                        @endforeach
                    </td>
                    <td class="col-2">
                        @foreach($post->tags as $tag)
                            <a href="#" class="badge badge-pill badge-secondary">{{ $tag->title }}</a>
                        @endforeach
                    </td>
                    <td class="col-2">
                        <a href="{{ route('customer.post.show', $post) }}" class="col-6 btn btn-info">{{ __('posts.index.show') }}</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    {{ $posts->links() }}
@endsection
