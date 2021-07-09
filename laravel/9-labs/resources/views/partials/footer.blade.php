<footer class="footer-section  p-10">
    @auth
        @if (Auth::user()->canEdit())
            <div class="edit edit-2">
                <a class="edit" href="/footer/{{ $footer->id }}/edit">
                    Edit Footer
                </a>
            </div>
        @endif
    @endauth
    <h2> {{ $footer->description }}. Designed by <a href="{{ $footer->site_href }}" target="_blank">{{ $footer->site }}</a></h2>
</footer>