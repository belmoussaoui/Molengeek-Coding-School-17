@extends('backoffice.index')

<style>
.icon-service {
    font-size: 30px!important;
    margin-right: 20px;
    margin-bottom: 20px;
    font-weight: 100;
}
</style>


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
				<h2>Service Section</h2>
				<div class="page-links">
					<a href="/service/1/edit">Service</a>
                    <a class="not-after" href="{{ route("service-items.index") }}"><span>Services Item</span></a>
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Service Create</h2>
    </div>
    <form class="form-class" action="{{ route("service-items.store") }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <label class="form-label">Icon</label>
        <br>
        <input type="radio" class="btn-check" name="icon" value="flaticon-023-flask" id="option1" autocomplete="off" checked>
        <label class="icon-service" for=""><i class="flaticon-023-flask"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-011-compass" id="option1" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-011-compass"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-037-idea" id="option2" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-037-idea"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-039-vector" id="option3" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-039-vector"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-036-brainstorming" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-036-brainstorming"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-026-search" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-026-search"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-018-laptop-1" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-018-laptop-1"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-043-sketch" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-043-sketch"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-012-cube" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-012-cube"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-001-picture" id="option1" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-001-picture"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-002-caliper" id="option1" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-002-caliper"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-003-energy-drink" id="option2" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-003-energy-drink"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-004-build" id="option3" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-004-build"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-005-thinking-1" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-005-thinking-1"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-006-prism" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-006-prism"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-007-paint" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-007-paint"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-008-team" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-008-team"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-025-imagination" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-025-imagination"></i></label>
        
        <input type="radio" class="btn-check" name="icon" value="flaticon-020-creativity" id="option4" autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-020-creativity"></i></label>

        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="text-black" type="text" name="name" value="">
        </div>
        <div class="mb-3">
            <label class="form-label">Text</label>
             <textarea class="text-black" type="text" name="text"></textarea>
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>