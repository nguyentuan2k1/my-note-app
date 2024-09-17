<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <h1>Create New Note</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>
        </div>

        <div>
            <select>
                <option value="text" selected></option>
                <option value="link"></option>
            </select>
        </div>
        <button type="submit">Save Note</button>
    </form>
</x-app-layout>
