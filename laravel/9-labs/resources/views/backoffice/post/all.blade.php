@extends('backoffice.index')

@section('content')
    <div class="page-top-section">
		<div class="text-right">
			<div class="page-info">
				<h2>Post Section</h2>
				{{-- <div class="page-links">
					<a href="/post/1/edit">Post</a>
                    <a class="not-after" href="{{ route("testimonial-items.index") }}"><span>Client</span></a>
				</div> --}}
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Posts</h2>
        <a href="{{ route('posts.create') }}" style="margin-top: 30px" class="site-btn">Add</a>
    </div>



    <div class="">
        <div class="row">
            <div class="col-md-2 col-sm-3"></div>
            <div class="col-md-8 col-sm-6 blog-posts">
					<!-- Post item -->
                    @foreach ($posts as $post)
                        <div class="p-10 mx-auto post-item bg-white">
                            <div class="post-thumbnail">
                                <img src="{{ asset("img/blog/$post->thumbnail") }}" alt="">
                                <div class="post-date">
                                    <h2>{{ $post->created_at->format('d') }}</h2>
                                    <h3>{{ $post->created_at->format('M y') }}</h3>
                                </div>
                            </div>
                            <div class="post-content">
                                <h2 class="post-title">{{ $post->title }}</h2>
                                <div class="post-meta">
                                    {{-- <a href="">Loredana Papp</a>
                                    <a href="">Design, Inspiration</a> --}}
                                    <a href="">{{ count($post->comments) }} Comments</a>
                                </div>
                                <p>{{ Str::limit($post->content, 317, '...') }}</p>
                                {{-- <a href="{{ "/blog-post/$post->id" }}" class="read-more mx-2">Edit</a>
                                <a href="{{ "/blog-post/$post->id" }}" class="read-more mx-2">Delete</a> --}}

                                @can('post-gate', $post)
                                     <a class="site-btn btn-1 mx-2 side" href="{{ route('posts.edit', $post) }}">Edit</a>
                                @endcan

                                @can('post-gate', $post)
                                    <form style="display: inline;" action={{ route('posts.destroy', $post) }} method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" href="" class="site-btn btn-1 side mx-2">Delete</button>
                                    </form>
                                @endcan

                                @can('post-gate', $post)
                                    @if (!$post->validation)
                                        <form style="display: inline;" action='{{ route('posts.validation', $post->id) }}' method="post">
                                            @csrf
                                            <button type="submit" href="" class="site-btn btn-1 side mx-2">Validation</button>
                                        </form>     
                                    @endif
                                @endcan
                            </div>
                        </div>
                    @endforeach
					

				</div>
           
        </div>
<!-- Testimonial section end-->

    <div>
        {{ $posts->links() }}
        
    </div>
    
@endsection