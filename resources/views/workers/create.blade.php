<form action="{{route('workers.store')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="имя" value="{{old('name')}}">
    @error('name')
    <span>{{$message}}</span>
    @enderror
    <input type="text" name="surname" placeholder="Фамилия" value="{{old('surname')}}">
    @error('surname')
    <span>{{$message}}</span>
    @enderror
    <input type="number" name="age" placeholder="Возраст" value="{{old('age')}}">
    @error('age')
    <span>{{$message}}</span>
    @enderror
    <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
    @error('email')
    <span>{{$message}}</span>
    @enderror
    <textarea name="description" placeholder="Описание">{{old('description')}}</textarea>
    @error('description')
    <span>{{$message}}</span>
    @enderror
    <label>
        Женат/Замужем <input type="checkbox" name="is_married">
    </label>
    <input type="submit">
</form>
