@extends('layout')

@section('content')

<div class="text-center eid-card">

<h2>🎁 তুমি ঈদি পেয়েছো</h2>

<p>খামটা খুলে দেখো ভিতরে কত টাকা আছে 😄</p>

<button onclick="openSalami()" class="btn btn-warning btn-lg">

📩 খাম খুলুন

</button>

<h1 class="mt-4" id="result"></h1>

</div>

<script>

function openSalami(){

let amount=Math.floor(Math.random()*200)+20;

document.getElementById("result").innerHTML=
"🎉 অভিনন্দন! তুমি পেয়েছো "+amount+" টাকা";

confetti();

}

</script>

@endsection