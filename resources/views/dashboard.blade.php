@extends('layouts.app')
@section('content')
<table class="table">
    <thead>
      <tr>
      	<th>id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    	@if(count($datas))
        @foreach($datas as $data)
      <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->fname }}</td>
        <td>{{ $data->lname }}</td>
        <td>{{ $data->email }}</td>
      </tr>
     @endforeach
     @endif
    </tbody>
  </table>
</div>
@endsection