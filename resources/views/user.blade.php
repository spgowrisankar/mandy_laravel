<h1>User Account</h1>
<!-- @if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $err)
        <li>{{$err}}</li>
        @endforeach
    </ul>
</div>
@endif -->
<form action="companyController" method="post">
    <label for="">Select</label>
    <select class="" name="id">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <label for="name">Name:</label>
    <input type="text" name="name">
    <br>
    @error('name')
    <span style="color:red;">{{$message}}</span>
    @enderror
    <br>
    <br>
    <label for="roles">Role:</label>
    <input type="roles" name="roles">
    <br>
    @error('roles')
    <span style="color:red;">{{$message}}</span>
    @enderror
    <br>
    @csrf
    <br>
    <input type="submit" value="Submit">

</form>
