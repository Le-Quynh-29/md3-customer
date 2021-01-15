<table>
    <thead>
    <tr>
        <td>STT</td>
        <td>title</td>
        <td>content</td>
        <td>create at</td>
        <td>date</td>
    </tr>
    </thead>
    <tbody>
    @foreach($tasks as $key =>$task)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $task['title'] }}</td>
            <td>{{ $task['content'] }}</td>
            <td>{{ $task['created_at'] }}</td>
            <td>{{ $task['due_date'] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
