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
				<h2>All Users</h2>
				<div class="page-links">
					{{-- <a href="/hero/1/edit">Users</a> --}}
				</div>
			</div>
		</div>
	</div>
    <div class="section-title" style="margin-bottom: 20px">
        <h2>User</h2>
    </div>
    <div class="row">
        @foreach ($users as $user)
        <!-- single member -->
            <div class="col-md-4 col-sm-6">
                <div class="member">
                    <div class="mx-auto" style="width:225px; height: 280px;">
                        <img src={{ asset("img/team/" . $user->avatar)}} alt="">
                    </div>
                    <h2>{{ $user->name }}</h2>
                    <h3>{{ $user->job }}</h3>
                    <h5 class="mt-1 text-white"> {{ $user->created_at->format('d M, Y') }}</h5>
                </div>
                        <div class="d-flex mt-5">
                    <a class="site-btn btn-1 side mb-1" href="{{ route('users.edit', $user) }}">Edit</a>
                    @if ($user->role_id !== 1)
                        <form style="display: inline;" action={{ route('users.destroy', $user) }} method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" href="" class="site-btn btn-1 side mb-1">Delete</button>
                        </form>
                        
                    @endif
                </div>

            </div>
            
        @endforeach
	</div>
    <div>
        {{ $users->links() }}
    </div>
@endsection