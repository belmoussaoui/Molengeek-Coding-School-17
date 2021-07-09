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
				<h2>Testimonial Section</h2>
				<div class="page-links">
					<a href="/testimonial/1/edit">Testimonial</a>
                    <a class="not-after" href="{{ route("testimonial-items.index") }}"><span>Clients</span></a>
					
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Client Edit</h2>
    </div>
    <form class="form-class" action="{{ route("testimonial-items.update", $testimonialItem) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Quote</label>
            <input class="text-black" type="text" name="quote" value="{{$testimonialItem->quote}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="text-black" type="text" name="name" value="{{$testimonialItem->name}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Job</label>
             <input class="text-black" type="text" name="job" value="{{$testimonialItem->job}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Avatar</label>
            <input type="file" name="avatar" value="{{$testimonialItem->avatar}}"/>
        </div>
        <span class="text-white">Click to select an image</span>
        <div id="file-upload" style="">
            <img id="preview" class="img-fluid" src="{{ asset("") }}" alt="">
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>