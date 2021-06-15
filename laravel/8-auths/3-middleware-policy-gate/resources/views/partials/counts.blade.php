<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container">

    <div class="row counters">

      @foreach ($counts as $key => $count)
        @if ($key <= 3)
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end={{ $count->number }} data-purecounter-duration="1" class="purecounter"></span>
            <p>{{ $count->title }}</p>
          </div>
        @endif
      @endforeach

    </div>

  </div>
</section><!-- End Counts Section -->