@extends('backoffice.index')

@section('content')
     @if (count($errors->all()))    
        <div class="m-20 mb-5">
            <div class="p-12 text-center" style="background-color: #2be6ab;">
                @foreach ($errors->all() as  $message)
                <p class="text-white" style="color: #6a23b5; text-transform: uppercase; font-weight: 600">{{ $message }}</p>
                @endforeach
            </div>
        </div>
    @endif
    <div class="page-top-section">
		<div class="text-right">
			<div class="page-info">
                 <p>You can use the "[" and "]" to highlight the text</p>
				<h2>Testimonial Section</h2>
                <div class="page-links">
					<a href="/testimonial/1/edit">Testimonial</a>
                    <a class="not-after" href="{{ route("testimonial-items.index") }}"><span>Clients</span></a>
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Testimonial Edit</h2>
    </div>
    <form class="form-class" action="/testimonial/{{ $testimonial->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input class="text-black" type="text" name="title" value="{{$testimonial->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image"/>
        </div>
        <div id="file-upload" style="">
            <img id="preview" class="img-fluid" src="{{ asset("img/$testimonial->image") }}" alt="">
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>