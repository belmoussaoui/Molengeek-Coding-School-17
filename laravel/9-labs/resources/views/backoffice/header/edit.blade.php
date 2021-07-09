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
				<h2>Header Section</h2>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Header Edit</h2>
    </div>
    <form class="form-class" action="/header/{{ $header->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3 col-md-3 col-sm-6">
                <label class="form-label">Item 1</label>
                <input class="text-black" type="text" name="item1" value="{{$header->item1}}">
            </div>
            <div class="mb-3 col-md-3 col-sm-6">
                <label class="form-label">Item 2</label>
                <input class="text-black" type="text" name="item2" value="{{$header->item2}}">
            </div>
            <div class="mb-3 col-md-3 col-sm-6">
                <label class="form-label">Item 3</label>
                <input class="text-black" type="text" name="item3" value="{{$header->item3}}">
            </div>
            <div class="mb-3 col-md-3 col-sm-6">
                <label class="form-label">Item 4</label>
                <input class="text-black" type="text" name="item4" value="{{$header->item4}}">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">
                Logo
            </label>
            <input type="file" name="logo"/>
        </div>
        <div id="file-upload" style="">
            <img id="preview" class="img-fluid" src="{{ asset("img/$header->logo") }}" alt="">
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>