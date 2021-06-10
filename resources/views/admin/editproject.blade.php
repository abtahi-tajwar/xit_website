{{-- @include('admin.sidebar') --}}
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
        @if(isset($req)) 
        {{ var_dump($req) }} 
        @endif
        </h3>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="create-project col-sm">
                <form action="{{ route('admin-edit-project') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $project[0]['id'] }}">
                    <div class="mb-3">
                        <label for="project-title" class="form-label">Project Title</label>
                        <input type="text" class="form-control" id="project-title" name="project-title" value="{{$project[0]['title']}}">
                    </div>
                    <div class="mb-3">
                        <label for="project-description" class="form-label">Project Description</label>
                        <textarea class="form-control" name="project-description" id="project-description" rows="3">{{$project[0]['description']}}</textarea>
                    </div>
                    <div class="project-feature-list">
                        <?php $features = explode(',', $project[0]['feature_list']) ?>
                        @foreach ($features as $feature)
                            <div class="input-group mb-3 item">
                                <span class="input-group-text" id="basic-addon1">Project Featue</span>
                                <input type="text" name="project-feature[]" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="{{$feature}}">
                            </div>
                        @endforeach                        
                    </div>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-success" id="add-project-feature">Add More Items</button>
                    </div>
                    
                    <div class="mb-3">
                        <label for="project-description" class="form-label">Fill up the input box to add more items</label>
                    </div>
                    <?php 
                        $project_category = array(
                            'website'=>'',
                            'android'=>'',
                            'ui'=>''
                        );
                        $project_category[$project[0]['category']] = 'selected';
                    ?>
                    <div class="row">
                        <div class="col-sm">
                            <select class="form-select" aria-label="Default select example" name="project-category">
                                <option>Open this select menu</option>
                                <option value="website" {{$project_category['website']}}>Web Development</option>
                                <option value="android" {{$project_category['android']}}>Android Development</option>
                                <option value="ui" {{$project_category['ui']}}>UI Design</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <input type="date" class="form-control" name="project-date" id="project-date" value={{$project[0]['date']}}>
                        </div>
                    </div>
                    <div class="mb-3">
                        <img src="{{asset('images').'/portfolios/'.$project[0]['image']}}" height="100" alt="">
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="formFile" class="form-label">Edit Project Image</label>
                        <input class="form-control" type="file" id="formFile" name="featured_image">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="preview col-sm">

            </div>
        </div>
</div>
{{-- @include('admin.footer') --}}
<?php use App\Http\Controllers\AdminFooter;
echo AdminFooter::init(); ?>