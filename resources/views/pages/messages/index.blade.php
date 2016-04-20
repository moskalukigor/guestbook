@extends('index')

@section('content')

@include('_common._form')
<hr>

<div class="text-left text-right">
    {!! Form::open(array('method' => 'Get', 'route' => 'home')) !!}

    {!! Form::select('sort', array('id_desc' => 'За ідентифікатором ↑','id_asc' => 'За ідентифікатором ↓', 'name_desc' => 'за іменем ↑', 'name_asc' => 'за іменем ↓',
                'email_desc'=>'за поштою ↑','email_asc'=>'за поштою ↓','created_at_desc'=>'за датою ↑','created_at_asc'=>'за датою ↓'))!!}
    {!! Form::submit('Filter', array('class' => 'btn btn-success')) !!}
    
    {!! Form::close() !!}
</div>
   <div class="text-right"> <b>Всьго повідомлень:</b> <i class="badge">{{$count}}</i></div><br/>

    @include('pages.messages._items')
@stop