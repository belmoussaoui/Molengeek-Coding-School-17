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
        <h2>Hero Edit</h2>
    </div>
    <form class="form-class" action="/hero/{{ $hero->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Subtitle</label>
            <input class="text-black" type="text" name="subtitle" value="{{$hero->subtitle}}">
        </div>
        <div class="mb-3">
            <label class="form-label">
                Logo
            </label>
            <input type="file" name="logo"/>
        </div>
        <div id="file-upload" style="">
            <img id="preview" class="img-fluid" src="{{ asset("img/$hero->logo") }}" alt="">
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>