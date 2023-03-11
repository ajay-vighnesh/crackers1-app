<h1>Add members</h1>
@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif
<form method="POST" action="/add">
    @csrf

    <input type="text" name="name"  placeholder="Enter name"> <br> <br>
    <input type="email" name="email"  placeholder="Enter Email "> <br> <br>
    <input type="text" name="address"  placeholder="Enter address "> <br> <br>

    <button type="submit">Add Members</button>
 
</form>