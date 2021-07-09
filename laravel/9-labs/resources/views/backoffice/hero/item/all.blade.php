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
        <h2>Slider Images</h2>
        <a href="{{ route('hero-items.create') }}" style="margin-top: 30px" class="site-btn">Add</a>
    </div>
    <div class="row">
        @foreach ($heroItems as $item)
            <div class="col-md-4 col-sm-6">
                <div class="sv-card">
                    <div class="card-img">
                        <img style="height:100%;" src="{{ asset("img/$item->image") }}" alt="">
                    </div>
                    <div class="card-text">
                        <h2>#{{ $item->id }}</h2>
                        <div class="d-flex">
                            <a class="site-btn btn-2 side" href="{{ route('hero-items.edit', $item) }}">Edit</a>
                            <form style="display: inline;" action={{ route('hero-items.destroy', $item) }} method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" href="" class="site-btn btn-3 side">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
	</div>
    <div>
        {{ $heroItems->links() }}
    </div>
@endsection