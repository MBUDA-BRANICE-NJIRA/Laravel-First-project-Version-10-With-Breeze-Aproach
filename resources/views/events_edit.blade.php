{{-- filepath: resources/views/events_edit.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Event</title>
</head>
<body>
    <h1>Edit Event</h1>
    <form method="POST" action="{{ route('events.update', $event->id) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Title:</label>
            <input type="text" name="title" value="{{ old('title', $event->title) }}" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description" required>{{ old('description', $event->description) }}</textarea>
        </div>
        <div>
            <label>Date:</label>
            <input type="date" name="date" value="{{ old('date', $event->date) }}" required>
        </div>
        <div>
            <label>Time:</label>
            <input type="time" name="time" value="{{ old('time', $event->time) }}" required>
        </div>
        <div>
            <label>Location:</label>
            <input type="text" name="location" value="{{ old('location', $event->location) }}" required>
        </div>
        <div>
            <button type="submit">Update Event</button>
        </div>
    </form>
    <a href="{{ route('events.index') }}">Back to Events</a>
</body>
</html>