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
				<h2>About Section</h2>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>About Edit</h2>
    </div>
    <form class="form-class" action="/about/{{ $about->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="">
            <p>You can use the "[" and "]" to highlight the text</p>
            <label class="form-label">Title</label>
            <input class="text-black" type="text" name="title" value="{{$about->title}}">
        </div>
        <div class="row">
            <div class="col-md-6">
                <label class="form-label">Paragraph 1</label>
                <textarea cols="1" rows="1" class="text-black" name="paragraph1">{{ $about->paragraph1 }}
                </textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label">Paragraph 2</label>
                <textarea cols="1" rows="1" class="text-black" name="paragraph2">{{ $about->paragraph2 }}
                </textarea>
            </div>
        </div>
        <div class="">
            <label class="form-label">Button</label>
            <input class="text-black" type="text" name="button" value="{{$about->button}}">
        </div>
        <div class="">
            <label class="form-label">Button Href</label>
            <select class="w-full" style="margin-bottom: 26px; border: none; background: #f6edfb; padding: 17px 20px;" name="button_href" id="">
                <option value="#contact" {{ $about->button_href === '#contact' ? 'selected' : '' }}>Contact</option>
                <option value="#team" {{ $about->button_href === '#team' ? 'selected' : '' }}>Team</option>
                <option value="#promotion" {{ $about->button_href === '#promotion' ? 'selected' : '' }}>Promotion</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Video Image</label>
            <input type="file" name="video_image"/>
        </div>
        <div id="file-upload" style="">
            <img id="preview" class="img-fluid" src="{{ asset("img/$about->video_image") }}" alt="">
        </div>
        <div class="">
            <label class="form-label">Video Href</label>
            <input class="text-black" type="text" name="video_href" value="{{$about->video_href}}">
        </div>
        

        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>