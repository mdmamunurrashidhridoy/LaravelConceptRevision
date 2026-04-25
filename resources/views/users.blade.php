<h1>User Page</h1>

@if (count($manushjon) > 0)
    <strong>Total User: {{ count($manushjon) }}</strong>
    @foreach ($manushjon as $manush)
        <p>Name: {{ $manush['name'] }} | Email: {{ $manush['email'] }}</p>
        @if ($manush['name'] === 'Ali')
            <strong>Special User</strong>
        @endif
    @endforeach
@else
    <strong>No User Available</strong>
@endif