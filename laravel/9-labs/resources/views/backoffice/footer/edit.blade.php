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
				<h2>Footer Section</h2>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Footer Edit</h2>
    </div>
    <form class="form-class" action="/footer/{{ $footer->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input class="text-black" type="text" name="description" value="{{ $footer->description }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Site</label>
                <input class="text-black" type="text" name="site" value="{{ $footer->site }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Site Href</label>
                <input class="text-black" type="text" name="site_href" value="{{ $footer->site_href }}">
            </div>
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection