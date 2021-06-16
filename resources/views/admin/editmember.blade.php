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
        Create Member
        </h3>
    </div>
    <div class="page-content">
        <div class="row">
            <div class="create-project col-sm">
                <form action="{{ route('admin-edit-member') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $member->id }}">
                    <div class="mb-3">
                        <label for="member-firstname" class="form-label">Firstname</label>
                        <input type="text" value="{{ $member->firstname }}" class="form-control" id="member-firstname" name="member-firstname">
                    </div>
                    <div class="mb-3">
                        <label for="member-lastname" class="form-label">Lastname</label>
                        <input type="text" value="{{ $member->lastname }}" class="form-control" id="member-lastname" name="member-lastname">
                    </div>
                    <?php 
                        $member_designation = [
                            "Web Developer" => "",
                            "Android Developer" => "",
                            "UI Designer" => ""
                        ];
                        $member_designation[$member->designation] = "selected";
                    ?>
                    <div class="mb-3">
                        <label for="member-lastname" class="form-label">Select Designation</label>
                        <div class="col-sm">
                            <select class="form-select" aria-label="Default select example" name="member-designation">
                                <option selected>Open this select menu</option>
                                <option value="Web Developer" {{$member_designation["Web Developer"]}}>Web Developer</option>
                                <option value="Android Developer" {{$member_designation["Android Developer"]}}>Android Developer</option>
                                <option value="UI Designer" {{$member_designation["UI Designer"]}}>UI Designer</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="member-facebook" class="form-label">Facebook profile link</label>
                        <input type="text" value="{{ $member->facebook }}" class="form-control" id="member-facebook" name="member-facebook">
                    </div>
                    <img src="{{ asset('images') . '/members/' . $member->image }}" height="100" alt="">
                    <div class="mb-3 mt-2">
                        <label for="formFile" class="form-label">Choose member image</label>
                        <input class="form-control" type="file" id="formFile" name="member_image">
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