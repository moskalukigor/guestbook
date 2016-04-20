@extends('index')

@section('content')

@include('_common._form')
<hr>

<div class="text-left text-right">

    
</div>
   <div class="text-right"> <b>Всьго повідомлень:</b> <i class="badge">{{$count}}</i></div><br/>

    @include('pages.messages._items')
@stop