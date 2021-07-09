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
				<h2>Team Section</h2>
                <div class="page-links">
					<a href="/service/1/edit">Team</a>
                    <a class="not-after" href=""><span>Users</span></a>
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Team Edit</h2>
    </div>
    <form class="form-class" action="/team/{{ $team->id }}/update" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
             <p>You can use the "[" and "]" to highlight the text</p>
            <label class="form-label">Title</label>
            <input class="text-black" type="text" name="title" value="{{$team->title}}">
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>