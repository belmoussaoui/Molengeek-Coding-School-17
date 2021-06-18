<!-- ======= Team Section ======= -->
<section id="team" class="team">
<div class="container" data-aos="fade-up">

    <div class="section-title">
    <h2>Team</h2>
    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">

     @foreach ($team->users as $user)
        
    
    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
            <img src={{ asset("img/team/" . $user->member->image) }} class="img-fluid" alt="">
            <div class="member-info">
                <div class="member-info-content">
                    <h4>{{ $user->name }}</h4>
                    <span>{{ $user->member->job }}</span>
                </div>
                <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    </div>

</div>
</section><!-- End Team Section -->