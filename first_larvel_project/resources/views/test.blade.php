@php
$name="haris";
$lname="naseer";
$age=17;

@endphp

<h1>NAME: {{$name." ".$lname}}</h1>
@if($age>=18)
<p>You Can Vote on 8 feb</p>
@else
<p>You Cannot Vote on 8 feb</p>

@endif