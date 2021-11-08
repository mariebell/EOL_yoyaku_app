@extends('layout')

@section('content')
<div class="container">
<h2>施設一覧</h2>
<a href="{{route('facilities.add')}}" type="button" class="button button-primary">add</a>
<table>
<thead>
  <th>ID</th>
  <th>施設名</th>
  <th>TEL</th>
  <th>Mail</th>
  <th>都道府県</th>
  <th>市区町村</th>
  <th>URL</th>
  <th></th>
</thead>
<tbody>
@foreach($facilities as $facility)
<tr>
  <td >{{ $facility->id }}</td>
  <td>{{ $facility->name }}</td>
  <td>{{ $facility->phone }}</td>
  <td>{{ $facility->email }}</td>
  <td>{{ print_r($prefectures->where('id', $facility->prefecture_id)->toArray())}}</td>
  <td>{{ $facility->municipality_id }}</td>
  <td>{{ $facility->url }}</td>
  <td><a href="{{ route('facilities.show', ['id' => $facility->id]) }}" class="button">detail</a></td>
</tr>
@endforeach
</tbody>

</div>


@endsection