<form action="{{url('/personas/')}}" method="post">
    @csrf

    <label for="Name">{{'Name'}}</label>
    <input type="text" name="Name" id="Name" value="">
    

    <label for="email">{{'email'}}</label>
    <input type="email" name="email" id="email" value="">
    

    <label for="Phone">{{'Phone'}}</label>
    <input type="text" name="Phone" id="Phone" value="">
    

    <label for="Specialist">{{'Specialist'}}</label>
    <input type="text" name="Specialist" id="Specialist" value="">

    <input type="submit" value="Add">

</form>