@extends('layout')

@section('content')

@if (count($listings)==0)
    <p>No listings available</p>
@else

@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @foreach($listings as $list)

    <x-listing-card :list="$list" />

    <?php endforeach; ?>
</div>
@endif

@endsection

