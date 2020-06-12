@extends('layouts.app')

@section('content')
<div class="container">
     <div class="row">
      <div class="col-1">
        id
       </div>
       <div class="col-3">
         ФИО
       </div>
       <div class="col-3">
         Почта
       </div>
       <div class="col-3">
         Зарегистрирован
       </div>
     </div>
    <div class="row">
      @foreach($users as $user)
        <div class="col-1">
          {{ $user->id }}
        </div>
        <div class="col-4">
          {{ $user->name }}
        </div>
        <div class="col-4">
          {{ $user->email }}
        </div>
        <div class="col-3">
          {{ $user->created_at }}
        </div>
        <hr>
        @endforeach
    </div>
</div>
@endsection
