@extends('layouts.main')
@section('content')
<div>
    <a href="#">Добавить</a>
</div>
    @if(isset($workers))
        @foreach($workers as $worker)
            <div>
                <p>Имя: {{$worker->name}}</p>
                <p>Фамилия: {{$worker->surname}}</p>
                <p>Возраст: {{$worker->age}}</p>
                <p>Email: {{$worker->email}}</p>
                <p>Общая информация: {{$worker->description}}</p>
                <p>Семейное положение: {{isset($worker->is_married)?'Состоит в браке':'Не состоит в браке'}}</p>
            </div>
            <br>
        @endforeach
        {{$workers->links()}}
    @endif
@endsection
