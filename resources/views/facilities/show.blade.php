@extends('layout')

@section('content')
<div class="container">
<h2>施設詳細</h2>
<a href="{{ route('facilities.edit', ['id' => $facility->id]) }}" class="button button-primary">編集</a>
  <div class="row">
    <div class="six columns">
    <label for="FacilityName">施設名</label>
    <p>{{ $facility->name}}</p>
    <label for="FacilityPhone">電話番号</label>
    <p>{{ $facility->phone}}</p>
    <label for="FacilityMail">メールアドレス</label>
    <p>{{ $facility->email}}</p>
    </div>
    <div class="six columns">
      <label for="FacilityPrefecture">都道府県</label>
      <p>{{ $facility->prefecture_id }}</p>
      <label for="FacilityMunicipality">市区町村</label>
      <p>{{ $facility->municipality_id }}</p>
      <label for="FacilityUrl">URL</label>
      <p>{{ $facility->url }}</p>
    </div>
  </div>
</div>


@endsection