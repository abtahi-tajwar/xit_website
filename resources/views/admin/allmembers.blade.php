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
                        <th>Image</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $member)
                    <tr>
                        <td><img src="{{ asset('images/members')."/".$member['image'] }}" height="50" alt=""></td>
                        <td>{{ $member['firstname'] }} {{ $member['lastname'] }}</td>
                        {{-- <td><a href="{{ route('admin-editmember-view', ['id' => $member['id']]) }}" class="btn btn-warning">Edit</a></td>
                        <td><a href="{{ route('admin-delete-member', ['id' => $member['id']]) }}" class="btn btn-danger">Delete</a></td> --}}

                        <td><a href="{{ route('admin-edit-member-get', ['id' => $member['id']]) }}" class="btn btn-warning">Edit</a></td>
                        <td><a href="{{ route('admin-delete-member', ['id' => $member->id]) }}" class="btn btn-danger">Delete</a></td>
                        <td>
                            <form action="" id="activateFrom_{{$member['id']}}">
                                @csrf
                                <label class="form-switch">
                                    <input type="checkbox" id="activate_{{$member['id']}}" class="activate_member" {{ $member['current']==1 ? 'checked' : '' }}>
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