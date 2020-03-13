@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Corona Virus Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('coronas.store') }}">
          <div class="form-group">
              @csrf
              <label for="country_name">Country Name:</label>
              <input type="text" class="form-control" name="country_name"/>
          </div>
          <div class="form-group">
              <label for="symptoms">Symptoms :</label>
              <textarea rows="5" columns="5" class="form-control" name="symptoms"></textarea>
          </div>
          <div class="form-group">
              <label for="cases">Cases :</label>
              <input type="text" class="form-control" name="cases"/>
          </div>
          <button type="submit" class="btn btn-primary">Add Data</button>
      </form>
  </div>
</div>
@endsection