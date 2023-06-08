<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($examples as $example)
        <tr>
            <td>{{ $example->id }}</td>
            <td>{{ $example->name }}</td>
            <td>{{ $example->created_at }}</td>
            <td>{{ $example->updated_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
