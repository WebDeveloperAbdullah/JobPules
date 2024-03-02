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




</section>




@endsection
