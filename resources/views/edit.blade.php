<h1>Edit Student</h1>

<form action="/students/{{ $student->id }}" method="POST">
    @csrf
    @method('PUT')

    Name:
    <input type="text" name="name" value="{{ $student->name }}">
    <br><br>

    Email:
    <input type="email" name="email" value="{{ $student->email }}">
    <br><br>

    Age:
    <input type="number" name="age" value="{{ $student->age }}">
    <br><br>

    <button type="submit">Update</button>
</form>