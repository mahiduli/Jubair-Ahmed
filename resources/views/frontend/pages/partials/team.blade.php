<section class="team-section sp-three">
    <div class="container">
        <div class="sec-title-two pb-one text-center">
            <h4>Our Faculties & Management</h4>
        </div>
        <div class="title-text text-center">
            <span>Persons of Management of our Asia Technical Training Center (ATTC) <br> Making Together on Way to Reach a Future Milestone.</span>
        </div>
        <div class="row">
            @foreach ($manegment as $team)
            @if ($team->add_menegment != '0')
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="team-item-one text-center">
                    <div class="image-box">
                        <figure>
                            <a href="#">
                                @if ($team->image != '')
                                <img src="/memberimage/{{$team->image}}" alt="">
                                @endif
                            </a>
                        </figure>
                    </div>
                    <div class="image-text">
                        <h6>{{ $team->name }}</h6>
                        <p>{{ $team->designation }}</p>
                        @if ($team->fb_url != '' || $team->gm_url != '' || $team->in_url != '')
                        <ul class="social-links">
                            @if ($team->fb_url != '')
                            <li><a target="new-tab" href="{{ $team->fb_url }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            @endif
                            @if ($team->gm_url != '')
                            <li><a target="new-tab" href="{{ $team->gm_url }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            @endif
                            @if ($team->in_url != '')
                            <li><a target="new-tab" href="{{ $team->in_url }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            @endif
                           
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
            
            @endif
            @endforeach
        </div>
    </div>
</section>