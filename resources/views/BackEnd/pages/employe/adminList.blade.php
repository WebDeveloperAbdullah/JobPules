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
                                  <div class="title"><strong>Striped Table</strong></div>
                                  <div class="table-responsive">
                                    <table class="table table-striped">
                                      <thead>
                                        <tr>
                                          <th>#</th>
                                          <th>Email</th>
                                          <th>Active</th>
                                          <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($data as $data )
                                        @php
                                            $active=$data->active
                                        @endphp


                                        <tr>
                                          <th scope="row">{{ $data->id}}</th>
                                          <td>{{ $data->email }}</td>
                                          <td>
                                            @if ($active==1)

                                            <a class="btn btn-sm btn-success" href="{{url('adminActive',[$data->id,$active])}}">Active</a>



                                            @else

                                            <a class="btn btn-sm btn-danger" href="{{url('adminActive',[$data->id,$active])}}">DeActive</a>

                                            @endif

                                        </td>
                                          <td>
                                            <a class="btn btn-info" href="{{ url('adminDetails',$data->id) }}">Details</a>
                                          </td>
                                        </tr>
                                        @endforeach

                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              </div>





</section>




@endsection
