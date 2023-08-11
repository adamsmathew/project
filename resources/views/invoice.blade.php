<table>
    <thead>
        <th>Sl.no</th>
        <th>Name</th>
        <th>Email</th>
        <th>date of birth</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->date_of_birth}}</td>
            <td>{{$user->status}}</td>
    
        </tr>
        @endforeach
    </tbody>

</table>