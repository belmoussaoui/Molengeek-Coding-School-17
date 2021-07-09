<!-- page section -->
<div class="page-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 blog-posts">
                <!-- Single Post -->
                <div class="single-post">
                    <div class="post-thumbnail">
                        <img src="{{ asset("img/blog/blog-1.jpg") }}" alt="">
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
                        <p>{{ $post->content }}</p>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales commodo, justo ipsum rutrum mauris, sit amet egestas metus quam sed dolor. Sed consectetur, dui sed sollicitudin eleifend, arcu neque egestas lectus, sagittis viverra justo massa ut sapien. Aenean viverra ornare mauris eget lobortis. Cras vulputate elementum magna, tincidunt pharetra erat condimentum sit amet. Maecenas vitae ligula pretium, convallis magna eu, ultricies quam. In hac habitasse platea dictumst. </p>
                        <p>Fusce vel tempus nunc. Phasellus et risus eget sapien suscipit efficitur. Suspendisse iaculis purus ornare urna egestas imperdiet. Nulla congue consectetur placerat. Integer sit amet auctor justo. Pellentesque vel congue velit. Sed ullamcorper lacus scelerisque condimentum convallis. Sed ac mollis sem. </p> --}}
                    </div>
                    <!-- Post Author -->
                    <div class="author">
                        <div class="avatar" style="">
                            <img style=" width: 117px; height: 117px; object-fit: cover;" src={{ asset("img/team/" . $post->user->avatar) }} alt="">
                        </div>
                        <div class="author-info">
                            <h2>{{ $post->user->name }}, <span>{{ $post->user->job }}</span></h2>
                            <p>{{ $post->description }}</p>
                        </div>
                    </div>
                    <!-- Post Comments -->
                    <div class="comments">
                        <h2>Comments ({{ count($post->comments) }})</h2>
                        <ul class="comment-list">
                            @foreach ($post->comments as $comment)
                                <li>
                                    <div class="avatar">
                                        <img style=" width: 80px; height: 80px; object-fit: cover;" src="{{ asset("img/team/" . $comment->user->avatar) }}" alt="">
                                    </div>
                                    <div class="commetn-text">
                                        <h3>{{ $comment->user->name }} | {{ strtolower($comment->created_at->format('d M, Y')) }} | Reply</h3>
                                        <p>{{ $comment->message }}</p>
                                    </div>
                                </li>      
                            @endforeach
                        </ul>
                    </div>
                    <!-- Commert Form -->
                    <div class="row">
                        <div class="col-md-9 comment-from">
                            <h2>Leave a comment</h2>
                            @auth
                                <form method="post" action="{{ "/comment/$post->id/store" }}" class="form-class">
                                    @csrf
                                    <div class="row">
                                        {{-- <div class="col-sm-6">
                                            <input type="text" name="name" placeholder="Your name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" name="email" placeholder="Your email">
                                        </div> --}}
                                        <div class="col-sm-12">
                                            {{-- <input type="text" name="subject" placeholder="Subject"> --}}
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button type="submit" class="site-btn">send</button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <a href="/login" class="site-btn">Log In</a>
                            @endauth
                            
                        </div>
                    </div>
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
                @if (count($post->categories) > 0)
                <div class="widget-item">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        @foreach ($post->categories as $category)
                            <li><a href={{ "/blog/category/$category->id" }}>{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!-- Single widget -->
                @if (count($post->tags) > 0)
                <div class="widget-item">
                    <h2 class="widget-title">Tags</h2>
                    <ul class="tag">
                        @foreach ($post->tags as $tag)
                        <li><a href="{{ "/blog/tag/$tag->id" }}">{{ $tag->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- page section end-->
