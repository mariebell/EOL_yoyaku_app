@extends('layout')

@section('content')
<div class="container">
<h2>施設詳細</h2>
<form action="{{ route('facilities.update', ['id' => $facility->id])}}" method="post">
  @csrf
  <div class="row">
    <div class="six columns">
      <label for="FacilityName">施設名</label>
      <input class="u-full-width" type="text" value="{{ $facility->name}}" id="FacilityName" name="name">
      <label for="FacilityPhone">電話番号</label>
      <input class="u-full-width" type="text" value="{{ $facility->phone}}" id="FacilityPhone" name="phone">
      <label for="FacilityMail">メールアドレス</label>
      <input class="u-full-width" type="text" value="{{ $facility->email}}" id="FacilityEmail"  name="email">
    </div>
    <div class="six columns">
      <label for="FacilityPrefecture">都道府県</label>
      <input class="u-full-width" type="text" value="{{ $facility->prefecture_id }}" id="FacilityPrefecture"  name="prefecture_id">
      <label for="FacilityMunicipality">市区町村</label>
      <input class="u-full-width" type="text" value="{{ $facility->municipality_id }}" id="FacilityMunicipality" name="municipality_id">
      <label for="FacilityUrl">URL</label>
      <input class="u-full-width" type="text" value="{{ $facility->url }}" id="FacilityUrl" name="url">
    </div>
  </div>
  <input type="submit" class="button-primary" value="save">
</form>
</div>


@endsection