@extends('backoffice.index')

@section('content')
    <div class="page-top-section">
		<div class="text-right">
			<div class="page-info">
				<h2>Feature Section</h2>
				<div class="page-links">
					<a href="/feature/1/edit">Feature</a>
                    <a class="not-after" href="{{ route("feature-items.index") }}"><span>Sliders</span></a>
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Feature Items</h2>
        <a href="{{ route('feature-items.create') }}" style="margin-top: 30px" class="site-btn">Add</a>
    </div>
    <div class="row">
        @foreach ($featureItems as $item)
        <div class="col-md-4 col-sm-6 mb-2">
            {{-- <div class="service" style="background: white; padding: 20px 10px;">
                <div class="icon">
                    <i class="{{ $item->icon }}"></i>
                </div>
                <div class="service-text">
                    <h2>{{ $item->name }}</h2>
                    <p>{{ $item->text }}</p>
                    <div class="d-flex">
                        <a class="site-btn btn-2 side" href="{{ route('service-items.edit', $item) }}">Edit</a>
                        <form style="display: inline;" action={{ route('service-items.destroy', $item) }} method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" href="" class="site-btn btn-3 side">Delete</button>
                        </form>
                    </div>
                </div>
            </div> --}}

            <div class="lab-card" >
                <div class="icon">
                    <i class="{{ $item->icon }}"></i>
                </div>
                <h2>{{ $item->name }}</h2>
                <p>{{ $item->text }}</p>
                <div class="d-flex">
                        <a class="site-btn btn-2 side mb-1" href="{{ route('feature-items.edit', $item) }}">Edit</a>
                        <form style="display: inline;" action={{ route('feature-items.destroy', $item) }} method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" href="" class="site-btn btn-3 side mb-1">Delete</button>
                        </form>
                    </div>
            </div>
        </div>
        @endforeach
	</div>
    <div>
        {{ $featureItems->links() }}
    </div>
@endsection