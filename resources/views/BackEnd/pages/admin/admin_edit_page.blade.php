@extends('BackEnd.layout.app')

@section('content');

<section class="no-padding-bottom">

    <i style="color: #fff">Create A new Admin For Website</i>

<div class="divFrom">

    <form action="" class="form-validate" method="POST">
        @csrf
        <div class="row">



            <div class="form-group-materia">

                <select name="role_id" class="form-select" aria-label="Default select example">
                    <option selected disabled> select Admin</option>
                    @foreach ($data as $data )
                    <option value="{{ $data->role_id }}">{{ $data->name }}</option>
                    @endforeach

                  </select>

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
