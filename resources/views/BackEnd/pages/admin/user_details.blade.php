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

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                  <th>User ID </th>
                                  <th>User Name </th>
                                  <th>Fist Name  </th>
                                  <th>Last Name </th>
                                  <th>User Email </th>
                                  <th>User Lavel </th>
                                  <th>User </th>
                                  <th>User </th>
                                  <th>User </th>
                                  <th>User </th>

                                 </tr>
                                </thead>

                        </table>

</section>




@endsection
