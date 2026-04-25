<h1>User Form</h1>
<form action="/submit" method="POST">
    @csrf
    Name: <input type="text" name="name" value="{{ old('name') }}"><br><br>
    Email: <input type="email" name="email" value="{{ old('email') }}"><br><br>
    Age: <input type="number" name="age" value="{{ old('age') }}"><br><br>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="submit">Submit</button>
</form>