<table>
    <thead>
        <tr>
            <th>name</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($apprenants as $value)
            <tr>
                <td>{{$value->name}}</td>
                <td>
                    <form action="{{route('assign.store')}}" method="post">
                        @csrf
                        <input type="hidden" name="apprenant_id" value="{{$value->id}}">
                        <input type="hidden" name="brief_id" value="{{$id}}">
                        <button type="submit">+</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>