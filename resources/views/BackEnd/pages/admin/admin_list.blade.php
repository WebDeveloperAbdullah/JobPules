@extends('BackEnd.layout.app')
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

                                            <a class="btn btn-sm btn-success" href="{{ route('create_admin') }}">User Add</a>
                                 <table class="table table-striped">
                                        <thead>
                                        <tr>
                                          <th>User ID</th>
                                          <th>Active</th>
                                          <th>Action</th>
                                          <th>User Email</th>



                                         </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datas as $data )
                                            @php
                                            $active=$data->active;

                                            $user_id=$data->id;
                                            @endphp
                                            <tr>
                                                <th >{{ $user_id}}</th>
                                                <td>

                                                    @if ($active==1)
                                                    <a class="btn btn-sm btn-success btn-sm" href="{{url('admin_active',[$user_id,$active])}}">Active</a>
                                                    @else
                                                    <a class="btn btn-sm btn-danger btn-sm" href="{{url('admin_active',[$user_id,$active])}}">DeActive</a>
                                                    @endif

                                                    </td>
                                                    <td>

                                                        <a class="btn btn-info btn-sm" href="{{ url('admin_edit_page',$data->id) }}">Edit</a>

                                                        <a class="btn btn-info btn-sm" href="{{ url('adminDetails',$data->id) }}">Details</a>

                                                        <a class="btn btn-danger btn-sm" href="{{ url('adminDetails',$data->id) }}">Delete</a>

                                                        </td>

                                                    <td>{{ $data->email }}</td>



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
