<h1>Find Specific Student</h1>

@if (isset($success))
    <p style="color:green">{{ $success }}</p>
@endif

@if (isset($error))
    <p style="color:red">{{ $error }}</p>
@endif

<form action="/students/findStudent" method="POST">
    @csrf
    ID:
    <input type="number" name="id" value="{{ old('id') }}">
    <button type="submit">Find</button>
</form>

@if (isset($student))
    <h2>Student Details:</h2>
    <p>ID: {{ $student->id }}</p>
    <p>Name: {{ $student->name }}</p>
    <p>Email: {{ $student->email }}</p>
@endif