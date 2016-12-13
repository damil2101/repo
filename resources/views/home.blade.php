@extends('layouts.app')

@section('content')
<html>
<head>
    <title>Request form</title>
</head>
<body>
<h1>Request for information</h1>
<div>
    @if($errors->any())
        <ul>@foreach($errors->all() as $error)
        <li>{{$error}}</li>
                @endforeach
        </ul>
        @endif
</div>
<form action="{{URL('./submit')}}" method="post">
    {{csrf_field()}}
    <table border="0" cellspacing="3" cellpadding="0" style="width: 450px;">
        <tbody>
        <tr>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p>First name</p> </td>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p><input type="TEXT" size="50" name="fname" value=""></p> </td>
        </tr>
        <tr>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p>Last name</p> </td>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p><input type="TEXT" size="50" name="lname" value=""></p> </td>
        </tr>
        <tr>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p>Postal Code</p> </td>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p><input type="TEXT" size="50" name="postalCode" value=""></p> </td>
        </tr>
        <tr>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p>Phone Number</p> </td>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p><input type="TEXT" size="50" name="phone" value=""></p> </td>
        </tr>
        <tr>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p>Email</p> </td>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p><input type="TEXT" size="50" name="email" value=""></p> </td>
        </tr>
        <tr>
            <td style="padding: .75pt .75pt .75pt .75pt;"> <p>Please send me information on the following product</p> </td>
            <td>
            @foreach($products as $product)
                <input type="radio" name="insurance" value="{{$product->id}}">{{$product->product}}
            @endforeach
            </td>
        </tr>
        <tr>
            <td colspan="2" style="padding: .75pt .75pt .75pt .75pt;"> <p><input type="submit" action="form-info.php" method="post"></p> </td>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>

@endsection
