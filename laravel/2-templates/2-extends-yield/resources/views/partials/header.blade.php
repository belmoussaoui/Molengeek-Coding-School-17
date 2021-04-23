<div class>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="/">Coding School</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link {{ "about" ==  Route::currentRouteName() ? 'active' : '' }}" href={{ route("about") }}>About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ "services" ==  Route::currentRouteName() ? 'active' : '' }}" href={{ route("services") }}>Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link">Contact</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <nav class="container mb-3 px-0">
        <h2>Welcome Subheading</h2>
        <ol class="breadcrumb bg-grey p-2">
            <li class="breadcrumb-item active"><a href="/">Home</a></li>
            <li class="breadcrumb-item text-capitalize">{{ Route::currentRouteName() }}</li>
        </ol>
    </nav>
</div>