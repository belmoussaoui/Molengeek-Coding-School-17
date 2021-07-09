@php
    use App\Models\User;
@endphp

<!-- Team Section -->
<div class="team-section spad" id="team">
    <div class="overlay"></div>
    <div class="container">
        @auth
            @if (Auth::user()->canEdit())
                <div class="edit edit-2">
                    <a class="edit" href="/team/1/edit">Edit Team</a>
                </div>
            @endif
        @endauth
        <div class="section-title">
            <h2>{!! str_replace(["[", "]"], ["<span>", "</span>"], $team->title) !!}</h2>
        </div>
        <div class="row">
            @php
                $admin = $users[0];
                $members = User::inRandomOrder()->where('role_id', 2)->orWhere('role_id', 3)->get();
            @endphp
            <!-- single member -->
            <div class="col-sm-4">
                @if (isset($members[0]))
                <div class="member">
                    <img src={{ asset("img/team/" . $members[0]->avatar)}} alt="">
                    <h2>{{ $members[0]->name }}</h2>
                    <h3>{{ $members[0]->job }}</h3>
                </div>
                @endif
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src={{ asset("img/team/$admin->avatar")}} alt="">
                    <h2>{{ $admin->name }}</h2>
                    <h3>{{ $admin->job }}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                @if (isset($members[1]))
                    
                <div class="member">
                    <img src={{ asset("img/team/" . $members[1]->avatar)}} alt="">
                    <h2>{{  $members[1]->name  }}</h2>
                    <h3>{{ $members[1]->job }}}</h3>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Team Section end-->