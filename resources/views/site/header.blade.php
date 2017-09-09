
<div class="header">
    <div class="nav1">
    </div>
    <div class="nav">
        <ul>
    @if(isset($menu))
        @foreach($menu as $item)

                <li class="active"><a  href="#{{$item['alias']}}">{{ $item['title'] }}</a> </li>


        @endforeach
        </ul>
    </div>

    @endif

</div>