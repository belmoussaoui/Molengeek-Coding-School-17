@extends('backoffice.index')

@section('content')
    <div class="page-top-section">
		<div class="text-right">
			<div class="page-info">
				<h2>Post Section</h2>
				<div class="page-links">
					<a href="/testimonial/1/edit">Testimonial</a>
                    <a class="not-after" href="{{ route("testimonial-items.index") }}"><span>Clients</span></a>
					
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Post Create</h2>
    </div>
    <form class="form-class" action="{{ route("posts.store") }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input class="text-black" type="text" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Content</label>
            <textarea class="text-black" name="content"></textarea>
        </div>
        
        <label class="form-label">Categories</label>
        <div class="mb-3 text-white" style="display: flex; align-items: center; justify-content: center;">
            <input style="margin: 5px 10px;" type="checkbox" name="categories[]" value="1"><span style="font-size: 16px">Vestibulum maximus</span>
            <input style="margin: 5px 10px;" type="checkbox" name="categories[]" value="2"><span style="font-size: 16px">Nisi eu lobortis pharetra</span>
            <input style="margin: 5px 10px;" type="checkbox" name="categories[]" value="3"><span style="font-size: 16px">Orci quam accumsan</span>
            <input style="margin: 5px 10px;" type="checkbox" name="categories[]" value="4"><span style="font-size: 16px">Auguen pharetra massa</span>
            <input style="margin: 5px 10px;" type="checkbox" name="categories[]" value="5"><span style="font-size: 16px">Tellus ut nulla</span>
            <input style="margin: 5px 10px;" type="checkbox" name="categories[]" value="5"><span style="font-size: 16px">Etiam egestas viverra</span>
        </div>
        <label class="form-label">Tags</label>
        <div class="mb-3 text-white" style="display: flex; align-items: center; justify-content: center;">
            <input style="margin: 5px 10px;" type="checkbox" name="tags[]" value="1"><span style="font-size: 16px">Vestibulum maximus</span>
            <input style="margin: 5px 10px;" type="checkbox" name="tags[]" value="2"><span style="font-size: 16px">Nisi eu lobortis pharetra</span>
            <input style="margin: 5px 10px;" type="checkbox" name="tags[]" value="3"><span style="font-size: 16px">Orci quam accumsan</span>
            <input style="margin: 5px 10px;" type="checkbox" name="tags[]" value="4"><span style="font-size: 16px">Auguen pharetra massa</span>
            <input style="margin: 5px 10px;" type="checkbox" name="tags[]" value="5"><span style="font-size: 16px">Etiam egestas viverra</span>
        </div>

        <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <input type="file" name="thumbnail"/>
        </div>
        <div id="file-upload" style="">
            <img id="preview" class="img-fluid" src="" alt="">
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>