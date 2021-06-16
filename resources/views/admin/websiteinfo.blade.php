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
        Edit Websit Information
        </h3>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="create-project col-sm">
                <form action="{{ route('admin-website-info-update') }}" method="POST">
                    @csrf
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="website-name" class="form-label">Name</label>
                        <input type="text" value="{{$data->name}}" class="form-control" id="website-name" name="website-name">
                    </div>
                    <!-- Service List -->
                    <div class="mb-3">
                        <label for="website-service-list" class="form-label">Service</label>
                    </div>
                    <div class="project-service-list">
                        @foreach ($data->services as $service)
                            <div class="input-group mb-3 item">                            
                                <span class="input-group-text" id="basic-addon1">Services</span>
                                <input type="text" value="{{$service[0]}}" name="project-services-title[]" class="form-control project-services-title" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                <input type="text" value="{{$service[1]}}" name="project-services-subtitle[]" class="form-control project-services-subtitle" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>    
                        @endforeach                                          
                    </div>                    
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-success" id="add-project-service">Add More Items</button>
                    </div>
                    <!--  About -->                    
                    <div class="mb-3">
                        <label for="website-about" class="form-label">About Services</label>
                        <textarea class="form-control" name="website-about" id="website-about" rows="3">{{ $data->about }}</textarea>
                    </div>
                    <!--  About service list -->
                    <div class="about-service-list">
                        @foreach ($data->about_services as $about_service)
                            <div class="input-group mb-3 item">
                                <span class="input-group-text" id="basic-addon1">Project Featue</span>
                                <input type="text" value="{{ $about_service }}" name="about-services[]" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        @endforeach                        
                    </div>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-success" id="add-about-service">Add More Items</button>
                    </div>
                    <!-- Skill measurement section -->
                    <div class="row mb-3">
                        <div class="col-sm">
                            <label for="web_development_skill" class="form-label">Web Development</label>
                            <input type="number" value="{{$data->service_measure->web_development}}" name="web_development_skill" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="col-sm">
                            <label for="android_application_skill" class="form-label">Web Development</label>
                            <input type="number" value="{{$data->service_measure->android_application}}" name="android_application_skill" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="col-sm">
                            <label for="web_design_skill" class="form-label">Web Development</label>
                            <input type="number" value="{{$data->service_measure->web_design}}" name="web_design_skill" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                     </div>
                     <!-- Website Phone number -->
                     <div class="mb-3">
                        <label for="website-phone" class="form-label">Number List</label>
                    </div>
                     <div class="website-phone-list">
                         @foreach ($data->contact->phone as $phone)
                            <div class="input-group mb-3 item">
                                <span class="input-group-text" id="basic-addon1">Project Featue</span>
                                <input type="text" value="{{ $phone }}" name="phone-numbers[]" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                         @endforeach
                        
                    </div>
                    <div class="input-group mb-3">
                        <button type="button" class="btn btn-success" id="add-phone-number">Add More Items</button>
                    </div>
                    <!-- Available time -->
                    <div class="mb-3">
                        <label for="available-time" class="form-label">Available Time</label>
                        <input type="text" value="{{ $data->contact->time }}" class="form-control" id="available-time" name="available-time">
                    </div>
                    <!-- Website Email -->
                    <div class="mb-3">
                        <label for="website-email" class="form-label">Website Email</label>
                        <input type="text" value="{{ $data->contact->email }}" class="form-control" id="website-email" name="website-email">
                    </div>
                    <!-- Website address -->
                    <div class="mb-3">
                        <label for="website-address" class="form-label">Web Address</label>
                        <input type="text" value="{{ $data->contact->web }}" class="form-control" id="website-address" name="website-address">
                    </div>
                    <!-- Company Location -->
                    <div class="mb-3">
                        <label for="company-location" class="form-label">Company Location</label>
                        <input type="text" value="{{ $data->contact->location }}" class="form-control" id="company-location" name="company-location">
                    </div>
                    <!--  Social Media Links -->
                    <div class="mb-3">
                        <label for="company-location" class="form-label">Facbook</label>
                        <input type="text" value="{{ $data->contact->social_media->facebook }}" class="form-control" id="company-location" name="facebook">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
            <div class="preview col-sm">

            </div>
        </div>
</div>
{{-- @include('admin.footer') --}}
<?php use App\Http\Controllers\AdminFooter;
echo AdminFooter::init(); ?>