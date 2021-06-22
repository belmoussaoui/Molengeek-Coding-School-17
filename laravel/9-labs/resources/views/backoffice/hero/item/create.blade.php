@extends('backoffice.index')

@section('content')
    <div class="page-top-section">
		<div class="text-right">
			<div class="page-info">
				<h2>Hero Section</h2>
				<div class="page-links">
					<a href="/hero/1/edit">Hero</a>
                    <a class="not-after" href="{{ route("hero-items.index") }}"><span>Sliders</span></a>
					
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Slider Image Create</h2>
    </div>
    <form class="form-class" action="{{ route("hero-items.store") }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">
                Image
            </label>
            <input type="file" name="image"/>
        </div>
        <div id="file-upload" style="">
            <img id="preview" class="img-fluid" src="" alt="">
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>