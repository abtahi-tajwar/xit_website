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
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>Feature Image</th>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                        <td><img src="{{ asset('images/portfolios')."/".$project['image'] }}" height="50" alt=""></td>
                        <td>{{ $project['title'] }}</td>
                        <td><a href="{{ route('admin-editproject-view', ['id' => $project['id']]) }}" class="btn btn-warning">Edit</a></td>
                        <td><a href="{{ route('admin-delete-project', ['id' => $project['id']]) }}" class="btn btn-danger">Delete</a></td>
                        <td>
                            <form action="" id="activateFrom_{{$project['id']}}">
                                @csrf
                                <label class="form-switch">
                                    <input type="checkbox" id="activate_{{$project['id']}}" class="activate_project" {{ $project['active']==1 ? 'checked' : '' }}>
                                    <i></i>
                                </label>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

{{-- @include('admin.footer') --}}
<?php use App\Http\Controllers\AdminFooter;
echo AdminFooter::init(); ?>