<!DOCTYPE html>
<html>
<form class="" action="{{route('register.update',['user' => $user->id]) }}" method="POST">
@csrf
@method('PATCH')
<caption>Edit Profile</caption>
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name" id="name" value="{{$user->name}}"/></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email" id="email" value="{{$user->email}}"/></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><input type="text" name="age" id="age" value="{{$user->age}}" /></td>
        </tr>
        <tr>
            <th>Birthday</th>
            <td><input type="text" name="birthday" id="birthday" value="{{$user->birthday}}"/></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><input type="text" name="address" id="address" value="{{$user->address}}"/></td>
        </tr>
        <tr>
            <th>Phone</th>
            <td><input type="text" name="phone" id="phone" value="{{$user->phone}}"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="text" name="password" id="password" value="{{$user->password}}"/></td>
        </tr>
        <tr>
            <td>
                <button type="update">Update</button>
            </td>
        </tr>
    </table>
</form> 
</html>