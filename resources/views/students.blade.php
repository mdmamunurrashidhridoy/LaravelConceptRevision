<h1>Students</h1>
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

<a href="/students/findStudent">Search Student</a>

@forelse($students as $student)
    <p>
        Name: {{ $student->name }} |
        Email: {{ $student->email }} |
        Age: {{ $student->age }}

        <a href="/students/{{ $student->id }}/edit">Edit</a>

    <form action="/students/{{ $student->id }}/" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    </p>
@empty
    <p>No Students found</p>
@endforelse

<h3>
    <a href="/form">Add more students</a>
</h3>