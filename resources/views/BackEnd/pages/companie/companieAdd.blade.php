@extends('BackEnd.layout.app')

@section('content');

<section class="no-padding-bottom">

    <i style="color: #fff">Create A new Admin For Companie </i>

<div class="divFrom">

    <form action="{{route('adminPanal.companieAddCore')}}" class="form-validate" method="POST">
        @csrf
        <div class="row">

          <div class="col-sm-9">
            <div class="form-group-material">
              <input id="register-username" type="text" name="email" required class="input-material">
              <label for="register-username" class="label-material"> Companie  email </label>
            </div>

            <div class="form-group-material">
              <input class="btn btn-success" type="submit" value="Add">
            </div>
          </div>
        </div>
      </form>
</div>








</section>




@endsection
