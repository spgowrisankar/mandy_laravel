<h1>Welcome {{$data['name']}}!!</h1>
<!-- {{$data['name']}}
<br>
{{$data['age']}}
<br>
{{$data['email']}} -->
@foreach($data as $key => $item)
<h2>{{$key}}:{{$item}}</h2>
@endforeach
@if($data['age'] >= 20)
<h1>Valid User And The User age is:{{$data['age']}}</h1>
@else
<h1>Invalid User And The User age is:{{$data['age']}}</h1>
@endif
<!-- @for($i = 0; $i <= 10; $i++ )
<h3>The values Are: {{$i}}</h3>
@endfor -->
