@extends('backoffice.index')

@section('content')
    <div class="page-top-section">
		<div class="text-right">
			<div class="page-info">
				<h2>Testimonial Section</h2>
				<div class="page-links">
					<a href="/hero/1/edit">Testimonial</a>
                    <a class="not-after" href="{{ route("testimonial-items.index") }}"><span>Client</span></a>
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Clients</h2>
        <a href="{{ route('testimonial-items.create') }}" style="margin-top: 30px" class="site-btn">Add</a>
    </div>



    <div class="">
        <div class="row">
            @foreach ($testimonialItems as $item)
            <div class="col-md-4 col-sm-12 mb-32">
                <!-- single testimonial -->
                <div class="testimonial">
                    <p style="min-height: 80px;">{{ $item->quote }}</p>
                    <div class="client-info" style="height:85px; margin: 0px">
                        <div class="avatar">
                            <img src={{ asset("img/avatar/$item->avatar")}} alt="">
                        </div>
                        <div class="client-name">
                            <h2>"{{ $item->name }}"</h2>
                            <p>"{{ $item->job }}"</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex"">
                    <a class="site-btn btn-1 side" href="{{ route('testimonial-items.edit', $item) }}">Edit</a>
                    <form style="display: inline;" action={{ route('testimonial-items.destroy', $item) }} method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" href="" class="site-btn btn-1 side">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
           
        </div>
<!-- Testimonial section end-->

    <div>
        {{ $testimonialItems->links() }}
        
    </div>
    
@endsection