<!-- Contact section -->
<div id="contact" class="contact-section spad fix">
    <div class="container">
        <div class="row">
            <!-- contact info -->

            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                 @auth
                    @if (Auth::user()->canEdit())
                        <div class="edit edit-2">
                            <a class="edit" href="/contact/{{ $contact->id }}/edit">
                                Edit Contact
                            </a>
                        </div>
                    @endif
                @endauth
                <div class="section-title left">
                    <h2>{{ $contact->title }}</h2>
                </div>
                <p>{{ $contact->description }} </p>
                <h3 class="mt60">{{ $contact->subtitle }}</h3>
                <p class="con-item">{{ $contact->address1 }} <br> {{ $contact->address2 }} </p>
                <p class="con-item">{{ $contact->number }}</p>
                <p class="con-item">{{ $contact->mail }}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <!-- newsletter section -->
                @if (count($errors->all()))    
                    <div class="mb-12">
                        <div class="p-3 text-center" style="background-color: #2be6ab;">
                            @foreach ($errors->all() as  $message)
                            <p class="text-white" style="color: #6a23b5; text-transform: uppercase; font-weight: 600">{{ $message }}</p>
                            @endforeach
                        </div>
                    </div>
                @endif
                @if (session('message'))
                 <div class="mb-12">
                        <div class="p-3 text-center" style="background-color: #2be6ab;">
                            <p class="text-white" style="color: #6a23b5; text-transform: uppercase; font-weight: 600">{{ session('message') }}</p>
                        </div>
                    </div>
                @endif
                <form action="/send-mail"  method="post"  role="form"  class="form-class" id="con_form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->