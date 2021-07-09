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
				<h2>Contact Section</h2>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Contact Edit</h2>
    </div>
    <form class="form-class" action="/contact/{{ $contact->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3">
                <label class="form-label">Marker</label>
                <input class="text-black" type="text" name="marker" value="{{$contact->marker}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input class="text-black" type="text" name="title" value="{{$contact->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input class="text-black" type="text" name="description" value="{{$contact->description}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Subtitle</label>
                <input class="text-black" type="text" name="subtitle" value="{{$contact->subtitle}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Address 1</label>
                <input class="text-black" type="text" name="address1" value="{{$contact->address1}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Address 2</label>
                <input class="text-black" type="text" name="address2" value="{{$contact->address2}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Number</label>
                <input class="text-black" type="text" name="number" value="{{$contact->number}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Mail</label>
                <input class="text-black" type="text" name="mail" value="{{$contact->mail}}">
            </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>