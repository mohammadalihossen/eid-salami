@extends('layout')

@section('content')

<div class="text-center">

<h3>🎁 You received Eid Salami</h3>

<button onclick="openSalami()" class="btn btn-warning btn-lg">
Open Envelope
</button>

<h2 id="result"></h2>

</div>

<script>

function openSalami(){

let amount=Math.floor(Math.random()*200)+10;

document.getElementById("result").innerHTML=
"🎉 You got "+amount+" Tk";

}

</script>

@endsection