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
				<h2>User Section</h2>
				<div class="page-links">
					<a href="/hero/1/edit">{{ $user->name }}</a>
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>User Edit</h2>
    </div>
    <form class="form-class" action="{{ route("users.update", $user) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="text-black" type="text" name="name" value="{{ $user->name }}">
        </div>
        @auth
        @if (Auth::user()->id !== $user->id)
            <div class="mb-3">
            <label class="form-label">Role</label>
                
            <select class="w-full" style="margin-bottom: 26px; border: none; background: #f6edfb; padding: 17px 20px;"name="role_id" id="">
                <option value="1" {{ $user->role_id === 1 ? 'selected' : '' }}>Admin</option>
                <option value="2" {{ $user->role_id === 2 ? 'selected' : '' }}>Webmaster</option>
                <option value="3" {{ $user->role_id === 3 ? 'selected' : '' }}>Editor</option>
                <option value="4" {{ $user->role_id === 4 ? 'selected' : '' }}>Member</option>
                <option value="5" {{ $user->role_id === 5 ? 'selected' : '' }}>Guest</option>
            </select>
        </div>
        @endif
        @endauth
        <div class="mb-3">
            <label class="form-label">Job</label>
            <input class="text-black" type="text" name="job" value="{{ $user->job }}">
        </div>
        <div class="mb-3">
            <label class="form-label">
                Avatar
            </label>
            <input type="file" name="avatar"/>
        </div>
        <div id="file-upload" style="">
            <img id="preview" class="img-fluid inline-block" src="{{ asset("img/team/$user->avatar") }}" alt="">
        </div>
       
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>