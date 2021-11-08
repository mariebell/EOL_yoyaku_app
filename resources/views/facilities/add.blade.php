@extends('layout')

@section('content')
<div class="container">
<h2>施設新規登録</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('facilities.create')}}" method="get">
  <div class="row">
    <div class="six columns">
      <label for="FacilityName">施設名</label>
      <input class="u-full-width" type="text" id="FacilityName" name="name">
      <label for="FacilityPhone">電話番号</label>
      <input class="u-full-width" type="text" id="FacilityPhone" name="phone">
      <label for="FacilityMail">メールアドレス</label>
      <input class="u-full-width" type="text" id="FacilityEmail"  name="email">
    </div>
    <div class="six columns">
      <label for="FacilityPrefecture">都道府県</label>
      <input class="u-full-width" type="text" id="FacilityPrefecture"  name="prefecture_id">
      <label for="FacilityMunicipality">市区町村</label>
      <input class="u-full-width" type="text" id="FacilityMunicipality" name="municipality_id">
      <label for="FacilityUrl">URL</label>
      <input class="u-full-width" type="text" id="FacilityUrl" name="url">
    </div>
  </div>
  <input type="submit" class="button-primary" value="save">
</form>
</div>


@endsection