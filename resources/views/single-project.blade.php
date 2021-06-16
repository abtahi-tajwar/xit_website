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
            @if($images !== [])
            <div class="intro__project-slideshow">
                {{-- <img class="owl_img" src="{{ asset('images/portfolios/1.png') }}" alt=""> --}}
                <div class="owl-carousel owl-theme">
                    @foreach ($images as $image)
                    <div class="item"><img class="owl_img" src="{{ asset('images/portfolios/'.$image['images']) }}" alt=""></div>
                    @endforeach
                </div>
            </div>
            @endif
            @isset($description)
            <div class="intro__project-desc">
                <?php print_r($description[0]['description']) ?>
                <ul>
                    <?php 
                        $feature_list = explode(";;;", $description[0]['feature_list']);    
                    ?>
                    @foreach ($feature_list as $feature)
                    <li><i class="fa fa-check"></i> {{ $feature }}</li>
                    @endforeach
                </ul>
            </div>
            @endisset
        </div>
    </div>
    @if($img !== [])
    <div class="tutorial">
        <h2>How to use</h2>
        <img src="{{ asset('images/portfolios/'.$img[0]['image']) }}" alt="">
    </div>
    @endif
    @if($faq !== [])
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
    @endif
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