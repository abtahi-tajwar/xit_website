@include('header')
{{-- <div class="single__container">
    <div class="intro">
        <div class="project-slideshow">
            <div class="owl-carousel owl-theme featured-carousel">
                <div class="item"><img class="owl_img" src="{{ asset('images/portfolios/1.png') }}" alt=""></div>
                <div class="item"><img class="owl_img" src="{{ asset('images/portfolios/2.png') }}" alt=""></div>
                <div class="item"><img class="owl_img" src="{{ asset('images/portfolios/3.png') }}" alt=""></div>
                <div class="item"><img class="owl_img" src="{{ asset('images/portfolios/4.png') }}" alt=""></div>
            </div>
        </div>
        <div class="intro__desc"></div>
    </div>    
</div> --}}
<div class="single__container">    
    <div class="intro">
        <h2>School Management System</h2>
        <div class="intro__body">
            <div class="intro__project-slideshow">
                {{-- <img class="owl_img" src="{{ asset('images/portfolios/1.png') }}" alt=""> --}}
                <div class="owl-carousel owl-theme">
                    <div class="item"><img class="owl_img" src="{{ asset('images/portfolios/1.png') }}" alt=""></div>
                    <div class="item"><img class="owl_img" src="{{ asset('images/portfolios/2.png') }}" alt=""></div>
                    <div class="item"><img class="owl_img" src="{{ asset('images/portfolios/3.png') }}" alt=""></div>
                    <div class="item"><img class="owl_img" src="{{ asset('images/portfolios/4.png') }}" alt=""></div>
                </div>
            </div>
            <div class="intro__project-desc">
                <b>FCM</b> consists of feature, which will make your gaming easy and reachable. Simply sign up, create your team, select your captain, vice-captain and join the contests.
                <ul>
                    <li><i class="fa fa-check"></i> We design websites that link up your business to people.</li>
                    <li><i class="fa fa-check"></i> Our Web and android application services are integrated with latest technologies that fit to your business needs.</li>
                    <li><i class="fa fa-check"></i> We aim to be an essential contributor to the growth of our clients operations delivering strategic and effective solutions for a prosperouses.</li>
                    <li><i class="fa fa-check"></i> Make your brand standing out in the market.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tutorial">
        <h2>How to use</h2>
        <img src="{{ asset('images/portfolios/tutorial.jpg') }}" alt="">
    </div>
    <div class="faq">
        <h2>FAQ</h2>
        <div class="faq__body">
            
            <div class="questions">
                @foreach ($faq as $question)
                <div class="question" id="{{ $question['id'] }}">
                    <h3>{{ $question['question'] }}</h3>
                    <img src="{{ asset('images/ui/right-arrow.svg') }}" height="16" width="16" alt="">
                </div>
                @endforeach
            </div>           
            <div class="answer">
                <div class="answer_container">
                    <h3 class="question_txt"></h3>
                    <p class="answer_txt"></p>
                </div>
            @foreach ($faq as $question)
                <div id="a{{$question['id']}}" class="answer_container" style="display: none;">
                <h3 class="question" id="q{{$question['id']}}">{{ $question['question'] }}</h3>
                <p id="at{{$question['id']}}">{{ $question['answer'] }}</p>
                </div>
            @endforeach
            </div>            
        </div>
    </div>
</div>
{{-- <div class="owl-carousel single-project-featured">
    <div> Your Content </div>
    <div> Your Content </div>
    <div> Your Content </div>
    <div> Your Content </div>
    <div> Your Content </div>
    <div> Your Content </div>
    <div> Your Content </div>
  </div> --}}
@include('footer')