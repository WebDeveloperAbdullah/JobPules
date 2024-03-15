@extends('BackEnd.layout.onwer')

@section('content');

<section class="no-padding-bottom">

    <i style="color: #fff">Update User For Website</i>

<div class="divFrom">

    <form action="{{ route('user_update') }}" class="form-validate" method="POST">
        @csrf
        <div class="row">

          <div class="col-sm-9">

            <div class="form-group-material">

                @php
                if(session('name')){
                    $name=session('name');
                }
                @endphp
                 @php
                 if(session('id')){
                     $id=session('id');
                 }
                 @endphp
                <input type="hidden" name="id" value="{{ $id }}">
                <label for="register-username1" class="label-material">Carunt User Is  {{ $name }} </label>

              </div>

            <div class="form-group-materia">
                <select name="role_id" class="form-select" aria-label="Default select example">
                    <option selected disabled> select Admin</option>
                    @foreach ($data as $data )
                    <option value="{{ $data->id }}">{{ $data->name }}</option>
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
