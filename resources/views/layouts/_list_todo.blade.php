<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    @php
        $no = 1;
    @endphp
    @foreach ($todos as $todo)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $todo->name }}</td>
            <td><a href="{{ route('todo.edit', $todo->id) }}">{{ __('Edit') }}</a></td>
            <td><a href="{{ route('todo.destroy', $todo->id) }}"
                onclick="event.preventDefault(); document.getElementById('delete-post-{{ $todo->id }}').submit();">
                {{ __('Delete') }}</a>
                <form action="{{ route('todo.destroy', $todo->id) }}" id="delete-post-{{ $todo->id }}" method="POST">
                    @csrf
                    @method('delete')
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $todos->links() }}