<html>
<head>
    <title>
    </title>
    
    </head>
    <body>
    <table>
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>E-mail</th>
            <th>Gender</th>
        <th>Profession</th>
        <th>Mobile</th>
        </tr>
       
        </thead>
        <tbody>
            @foreach($users as $user)
            
            <tr>
            <td>
                {{ $user->id }} .
                </td>
                 <td>
                {{ $user->name }}
                </td>
                 <td>
                {{ $user->email }}
                </td>
                  <td>
                {{ $user->gender }}
                </td>
                  <td>
                {{ $user->profession }}
                </td>
                <td>
                {{ $user->mobile }}
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </body>
</html>