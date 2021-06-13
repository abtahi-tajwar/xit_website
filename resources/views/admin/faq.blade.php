<?php use App\Http\Controllers\Sidebar;
echo Sidebar::init(); ?>

<div id="main">
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>
        Edit Project Slideshow
        </h3>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                @csrf
                <input type="text" id="searchProjects" placeholder="Search for projects..">
                <ul id="myUL">
                {{-- <li><a href="#">Adele</a></li>
                <li><a href="#">Agnes</a></li>
                <li><a href="#">Billy</a></li>
                <li><a href="#">Bob</a></li>
                <li><a href="#">Calvin</a></li>
                <li><a href="#">Christina</a></li>
                <li><a href="#">Cindy</a></li> --}}
                </ul>
            </div>
            <div class="row mb-10">
                <div class="row photos">
                    @if($id !== 0)
                        @if(count($faqs) === 0)
                        <div class="container">
                            <div class="jumbotron">
                              <h1>No Slideshow Image Found</h1>
                            </div>
                        </div> 
                        @else
                            @foreach ($faqs as $faq)
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      {{$faq['question']}}
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      {{$faq['answer']}}
                                    </div>
                                  </div>
                                </div>
                              </div>
                            @endforeach    
                        @endif
                    {{-- <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/zmzERpe.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/zmzERpe.jpg"></a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/gX11Vt5.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/gX11Vt5.jpg"></a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/pZcUS2Y.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/pZcUS2Y.jpg"></a></div>
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="https://i.imgur.com/06Ajq7f.jpg" data-lightbox="photos"><img class="img-fluid" src="https://i.imgur.com/06Ajq7f.jpg"></a></div>                         --}}
                    @else
                    <div class="container">
                        <div class="jumbotron">
                          <h1>No Project Selected</h1>
                          <p>Search and select a project to edit it's slideshow</p>
                        </div>
                      </div>   
                    @endif
                </div>
            </div>
            <form method="POST" action={{ route('admin-project-faqs-upload') }}>
                @csrf
                <input type="hidden" name="faq_id" value="{{$id}}">
                <div class="form-group">
                  <label for="exampleInputEmail1">Question</label>
                  <input type="text" name="faq_question" class="form-control" id="faq_question" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" name="faq_answer" id="faq_answer" rows="3"></textarea>
                  </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
<?php use App\Http\Controllers\AdminFooter;
echo AdminFooter::init(); ?>