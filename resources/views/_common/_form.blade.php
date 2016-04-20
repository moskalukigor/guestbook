@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

{!! Form::open(array('route' => 'message.store')) !!}
<div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                <label for="name">Ім'я: *</label>
                {!! Form::text('name', null, array('required', 'class'=>'form-control', 'placeholder'=>"Ім'я")) !!}
            </div>

            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                <label for="email">E-mail: *</label>
                {!! Form::email('email', null, array('required', 'class'=>'form-control','type'=>'email', 'placeholder'=>'E-mail')) !!}
            </div>

            <div class="form-group {{$errors->has('homepahe') ? 'has-error' : ''}}">
                <label for="homepage">Homepage: </label>
                {!! Form::text('homepage', null, array('class'=>'form-control', 'placeholder'=>'Homepage')) !!}
            </div>
    
            <div class="form-group {{$errors->has('message') ? 'has-error' : ''}}">
                <label for="message">Повідомлення: *</label>
                {!! Form::textarea('message', null, array('required', 'class'=>'form-control', 'placeholder'=>'Текст повідомлення')) !!}
            </div>

            <div class="form-group">
                 {!! Form::submit('Додати', array('class'=>'btn btn-primary')) !!}
            </div>
{!! Form::close() !!}