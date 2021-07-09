<!-- page section -->
	<div class="page-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-7 blog-posts">
					<!-- Post item -->
                    @foreach ($posts as $post)
                        @if ($post->validation)
                            <div class="post-item">
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
                                        <a href="">{{ $post->user->name }}</a>
                                        @if (count($post->categories))
                                            <a href="">{{ $post->categories()->get()->implode('name', ', ') }}</a>  
                                        @endif
                                        @if (count($post->tags))
                                            <a href="">{{ $post->tags()->get()->implode('name', ', ') }}</a>  
                                        @endif
                                        <a href="">{{ count($post->comments) }} Comments</a>
                                    </div>
                                    <p>{{ Str::limit($post->content, 317, '...') }}</p>
                                    <a href="{{ "/blog-post/$post->id" }}" class="read-more">Read More</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
					
					<!-- Pagination -->
                    <div class="page-pagination">
                        {{ $posts->appends(request()->except('page')) }}                   
                    </div>
				</div>
				<!-- Sidebar area -->
				<div class="col-md-4 col-sm-5 sidebar">
					<!-- Single widget -->
					<div class="widget-item">
                        <form action="/blog/search" method="get" class="search-form">
                            <input type="text" placeholder="Search" name="search">
                            <button type="submit" class="search-btn"><i class="flaticon-026-search"></i></button>
                        </form>
                    </div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Categories</h2>
						<ul>
                            @foreach ($categories as $category)
                                <li><a href={{ "/blog/category/$category->id" }}>{{ $category->name }}</a></li>
                            @endforeach
						</ul>
					</div>
					<!-- Single widget -->
					<div class="widget-item">
						<h2 class="widget-title">Tags</h2>
						<ul class="tag">
                            @foreach ($tags as $tag)
                                <li><a href="{{ "/blog/tag/$tag->id" }}">{{ $tag->name }}</a></li>
                            @endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- page section end-->