<h1>Listings {{ $headings }}</h1>

@if (count($listings)==0)
    <p>No listings available</p>
@else

    @foreach($listings as $list)

    <a href="{{ route('listing') }}"><h1> {{ $list['title'] }}</h1></a>
    <p> {{ $list['description'] }}</p>

    <?php endforeach; ?>

@endif

