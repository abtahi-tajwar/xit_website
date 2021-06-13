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
                        @if(count($images) === 0)
                        <div class="container">
                            <div class="jumbotron">
                              <h1>No Slideshow Image Found</h1>
                            </div>
                        </div> 
                        @else
                            @foreach ($images as $image)
                                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ asset('images').'/portfolios/'.$image['images'] }}" data-lightbox="photos"><img class="img-fluid" src="{{ asset('images').'/portfolios/'.$image['images'] }}" height="100"></a></div>
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
            <form action="{{route('admin-project-slideshow-upload')}}" method="POST" class="row g-3" enctype="multipart/form-data">
                <div class="mb-3">
                    @csrf
                    <input type="hidden" value="{{$id}}" name="id">
                    <label for="formFile" class="form-label">Upload pictures for slideshow</label>
                    <input class="form-control mb-3" type="file" id="slideshow_images" name="slideshow_images[]" multiple>
                    <button type="submit" class="btn btn-primary">Upload</button>
                  </div>                  
            </form>
        </div>
    </div>
<?php use App\Http\Controllers\AdminFooter;
echo AdminFooter::init(); ?>