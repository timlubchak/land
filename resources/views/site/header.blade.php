
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
        {{--<div class="nav">--}}
            {{--<ul>--}}
                {{--<li><a class="first" href="">HOME</a> </li>--}}
                {{--<li><a href="">ABOUT US</a> </li>--}}
                {{--<li><a href="">SERVICES</a> </li>--}}
                {{--<li><a href="">PORTFOLIO</a> </li>--}}
                {{--<li><a href="">CLIENTS</a> </li>--}}
                {{--<li><a href="">TEAM</a> </li>--}}
                {{--<li><a href="">CONTACT</a> </li>--}}

            {{--</ul>--}}
        {{--</div>--}}
    @endif

</div>