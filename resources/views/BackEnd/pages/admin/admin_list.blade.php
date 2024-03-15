@extends('BackEnd.layout.onwer')
@section('content');
<section class="no-padding-bottom">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="mdi mdi-check-all me-2"></i>
                {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                            @endif
                            <div class="col-lg-12 col-xxl-12 col-xl-12 col-md-12 col-sm-12 col-12">
                                <div class="block margin-bottom-sm">
                                  <div class="title"><strong>Website All User List </strong></div>
                                  <div class="search-panel">
                                    <div class="search-inner d-flex align-items-center justify-content-center">

                                      <form id="searchForm" action="{{ route('search') }}" method="GET">
                                        <div class="form-group">
                                          <input type="search" class="search" name="search" placeholder=" searching for...">
                                          <button type="submit" class="btn btn-success">Search</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                    <div class="table-responsive">
                                    @php
                                    if(session('role_id')){
                                        $role_id=session('role_id');

                                    }
                                    @endphp

                                    @if ($role_id==1)
                                    <a class="btn btn-sm btn-success" href="{{ route('create_admin') }}">User Add</a>

                                    @endif


                                 <table class="table table-striped">
                                        <thead>
                                        <tr>
                                          <th>User ID</th>
                                          <th>Active</th>
                                          <th>Action</th>
                                          <th>User Email</th>
                                          <th>User Lavel</th>



                                         </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datas as $index => $data )
                                            @php
                                            $roleID=$data->role_id;
                                            $active=$data->active;

                                            $user_id=$data->id;
                                            @endphp
                                            <tr>
                                                <th >{{ $index+1;}}</th>
                                                <td>

                                                    @if ($active==1)
                                                    <a class="btn btn-sm btn-success btn-sm" href="{{url('admin_active',[$data->id,$active])}}">Active</a>
                                                    @else
                                                    <a class="btn btn-sm btn-danger btn-sm" href="{{url('admin_active',[$data->id,$active])}}">DeActive</a>
                                                    @endif

                                                    </td>
                                                    <td>

                                                        <a class="btn btn-info btn-sm" href="{{ url('admin_edit_page',$data->id) }}">Edit</a>
                                                        <a class="btn btn-info btn-sm" href="{{ url('admin_details',$data->id) }}">Details</a>
                                                        @php
                                                        if(session('role_id')){
                                                            $role_id=session('role_id');
                                                        }
                                                        @endphp

                                                      @if ($role_id==1)
                                                        <a class="btn btn-danger btn-sm" href="{{ url('user_delete',$data->id) }}">Delete</a>
                                                        @endif
                                                        </td>

                                                    <td>{{ $data->email }}</td>
                                                    <td>
                                                        @if ($roleID==1)
                                                            Owner
                                                        @endif
                                                        @if ($roleID==2)
                                                        Admin
                                                        @endif
                                                        @if ($roleID==3)
                                                        companie
                                                        @endif
                                                        @if ($roleID==4)
                                                            Empoly
                                                        @endif
                                                        @if ($roleID==5)
                                                        Candidate
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                </table>

                                   <div>
                                    {{ $datas->links() }}




                                   </div>
                            </div>
                        </div>
                </div>
        </section>
@endsection
