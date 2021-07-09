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
				<h2>Features Section</h2>
                <div class="page-links">
					<a href="/features/1/edit">Features</a>
                    <a class="not-after" href="{{ route("feature-items.index") }}"><span>Feature Item</span></a>
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Features Edit</h2>
    </div>
    <form class="form-class" action="/features/{{ $feature->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
             <p>You can use the "[" and "]" to highlight the text</p>
            <label class="form-label">Title</label>
            <input class="text-black" type="text" name="title" value="{{$feature->title}}">
        </div>
        <div class="">
            <label class="form-label">Button</label>
            <input class="text-black" type="text" name="button" value="{{$feature->button}}">
        </div>
        <div class="">
            <label class="form-label">Button Href</label>
             <select class="w-full" style="margin-bottom: 26px; border: none; background: #f6edfb; padding: 17px 20px;" name="button_href" id="">
                <option value="#contact" {{ $feature->button_href === '#contact' ? 'selected' : '' }}>Contact</option>
                <option value="#team" {{ $feature->button_href === '#footer' ? 'selected' : '' }}>Footer</option>
            </select>
        </div>
         <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image"/>
        </div>
        <div id="file-upload" style="">
            <img id="preview" class="img-fluid" src="{{ asset("img/$feature->image") }}" alt="">
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>