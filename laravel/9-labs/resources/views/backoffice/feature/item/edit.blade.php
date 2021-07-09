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
<div class="page-top-section">
    @if (count($errors->all()))
        <div class="m-20 mb-5">
            <div class="p-12 text-center" style="background-color: #2be6ab;">
                @foreach ($errors->all() as  $message)
                <p class="text-white" style="color: #6a23b5; text-transform: uppercase; font-weight: 600">{{ $message }}</p>
                @endforeach
            </div>
        </div>
    @endif
    <div class="text-right">
			<div class="page-info">
				<h2>Features Section</h2>
				<div class="page-links">
					<a href="/features/1/edit">Feature</a>
                    <a class="not-after" href="{{ route("service-items.index") }}"><span>Feature Items</span></a>
				</div>
			</div>
		</div>
	</div>
    <div class="section-title">
        <h2>Feature Edit</h2>
    </div>
    <form class="form-class" action="{{ route("feature-items.update", $featureItem) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
        <label class="form-label">Icon</label>
        <br>
        <input type="radio" class="btn-check" name="icon" value="flaticon-023-flask" {{ $featureItem->icon === 'flaticon-023-flask' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-023-flask"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-011-compass" {{ $featureItem->icon === 'flaticon-011-compass' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-011-compass"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-037-idea" {{ $featureItem->icon === 'flaticon-037-idea' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-037-idea"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-039-vector" {{ $featureItem->icon === 'flaticon-039-vector' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-039-vector"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-036-brainstorming" {{ $featureItem->icon === 'flaticon-036-brainstorming' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-036-brainstorming"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-026-search" {{ $featureItem->icon === 'flaticon-026-search' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-026-search"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-018-laptop-1" {{ $featureItem->icon === 'flaticon-018-laptop-1' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-018-laptop-1"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-043-sketch" {{ $featureItem->icon === 'flaticon-043-sketch' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-043-sketch"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-012-cube" {{ $featureItem->icon === 'flaticon-012-cube' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-012-cube"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-001-picture" {{ $featureItem->icon === 'flaticon-001-picture' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-001-picture"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-002-caliper" {{ $featureItem->icon === 'flaticon-002-caliper' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-002-caliper"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-003-energy-drink" {{ $featureItem->icon === 'flaticon-003-energy-drink' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-003-energy-drink"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-004-build" {{ $featureItem->icon === 'flaticon-004-build' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-004-build"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-005-thinking-1" {{ $featureItem->icon === 'flaticon-005-thinking-1' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-005-thinking-1"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-006-prism" {{ $featureItem->icon === 'flaticon-006-prism' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-006-prism"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-007-paint" {{ $featureItem->icon === 'flaticon-007-paint' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-007-paint"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-008-team" {{ $featureItem->icon === 'flaticon-008-team' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-008-team"></i></label>

        <input type="radio" class="btn-check" name="icon" value="flaticon-025-imagination" {{ $featureItem->icon === 'flaticon-025-imagination' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-025-imagination"></i></label>
        
        <input type="radio" class="btn-check" name="icon" value="flaticon-020-creativity" {{ $featureItem->icon === 'flaticon-020-creativity' ? 'checked' : '' }} autocomplete="off">
        <label class="icon-service" for=""><i class="flaticon-020-creativity"></i></label>


        </div>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input class="text-black" type="text" name="name" value="{{ $featureItem->name }}">
        </div>
        <div class="mb-3">
            <label class="form-label">Text</label>
             <textarea class="text-black" type="text" name="text">{{ $featureItem->text }}</textarea>
        </div>
        <button type="submit" class="site-btn">Submit</button>
    </form>
@endsection

<script src="{{ asset("js/upload-image.js") }}"></script>