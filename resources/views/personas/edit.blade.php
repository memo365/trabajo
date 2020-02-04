<form action="{{url('/personas/'.$i->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}

    <label for="Name">{{'Name'}}</label>
    <input type="text" name="Name" id="Name" value="{{$i->name}}">
    

    <label for="email">{{'email'}}</label>
    <input type="email" name="email" id="email" value="{{$i->email}}">
    

    <label for="Phone">{{'Phone'}}</label>
    <input type="text" name="Phone" id="Phone" value="{{$i->phone}}">
    

    <label for="Specialist">{{'Specialist'}}</label>
    <input type="text" name="Specialist" id="Specialist" value="{{$i->specialist}}">

    <input type="submit" value="Update">

</form>