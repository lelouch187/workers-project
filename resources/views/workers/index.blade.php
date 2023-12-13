@extends('layouts.main')
@section('content')
<div>
    <a href="{{route('workers.create')}}">Добавить</a>
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
        <div class="nav">{{$workers->links()}}</div>
    @endif
@endsection
