<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Created</th>
            <th>Specialist</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
    @foreach ($personas as $i)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$i->name}}</td>
            <td>{{$i->email}}</td>
            <td>{{$i->phone}}</td>
            <td>{{$i->created_at}}</td>
            <td>{{$i->specialist}}</td>
        <td>
            <a href="{{url('/personas/'.$i->id.'/edit/')}}">Update</a> | 
            <form action="{{url('/personas/'.$i->id)}}" method="post">
                @csrf
                @method('DELETE')
            
                
                <input type="submit" onclick="return confirm('Do you want to delete?');">Delete</button>
            
            </form>
        </td>
        </tr>
    @endforeach    
    </tbody>
</table>