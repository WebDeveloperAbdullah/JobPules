@extends('BackEnd.layout.app')

@section('content');

<section class="no-padding-bottom">

    <i style="color: #fff">Create A new Admin For Website</i>

<div class="divFrom">

    <form action="{{route('adminAdd')}}" class="form-validate" method="POST">
        @csrf
        <div class="row">

          <div class="col-sm-9">
            <div class="form-group-material">
              <input id="register-username" type="text" name="email" required class="input-material">
              <label for="register-username" class="label-material"> New Admin email </label>
            </div>

            <div class="form-group-materia">
                <select name="adminLavel" id="register-username">
                    <option selected disabled >Select </option>
                    <option value="owner">Owner</option>
                    <option value="admin">Admin</option>
                    <option value="companie">Companie</option>
                </select>
                <label for="" class="label-material"> New Admin email </label>
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
