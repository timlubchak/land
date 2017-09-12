
@if(isset($pages) && is_object($pages))

@foreach($pages as $k=>$page)
    @if($k%2 == 0)
        <div class="main" id="home">

            <div class="first-block">
                <h1>WE CREATE AWESOME</h1>
                <h1>WEB TEMPLATES</h1>
                <p>
                    {{ $page->text }}
                </p>
                <button id="btn">READ MORE</button>
            </div>
            <div class="second-block">
                {!! Html::image('img/'.$page->img) !!}
            </div>
        </div>
    @else
        <div class="about" id="about-us">
            <div class="about1">
                <h1>{{ $page->name }}</h1>

                <p>

                    {{ $page->text }}

                </p>
                <p>
                    {{ $page->text }}

                </p>
                <button id="btn">READ MORE</button>
            </div>
            <div class="about2">
                <div class="about-img">
                   {!! Html::image('img/'.$page->img) !!}
                </div>
            </div>
        </div>
    @endif
@endforeach


@endif


    <div class="services" id="services">
        <h1>SERVICES</h1>
        @if (isset($services)&& is_object($services))

            @foreach($services as $k=>$service)

                @if($k == 0 || $k%3 == 0)

                    <div class="line" {{ $k!==0 }}></div>

                @endif

                    <div class="ser-block">
                        <div class="ser1">
                            <div class="ser-img">{!! Html::image('img/'.$service->icon) !!}</div>
                            <h3>{{$service->name}}</h3>
                            <p> {{ $service->text }}</p>
                        </div>
                    </div>
                {{--@if(($k+ 1)%3 == 0)--}}
                    {{--</div>--}}
                {{--@endif--}}

            @endforeach


    </div>

@endif


{{--portfolios--}}


<div class="portfolio" id="portfolio">
    <h1>PORTFOLIO</h1>

    @if(isset($tags) && is_object($tags))
        <div id="tabs" >
          <div class="tab-wrap">
        @foreach($tags as $tag)


                <div  class="tab " id="tab">{{ $tag->name }}</div>




        @endforeach
          </div>
                @foreach($tags as $tag)
                <div class="tabContent">
                    <div class="im1"><img src="{{asset('img/'.$tag->images)}}"></div>
                    <div class="im1"><img src="{{asset('img/'.$tag->images)}}"></div>
                    <div class="im1"><img src="{{asset('img/'.$tag->images)}}"></div>
                </div>
                @endforeach



            </div>

    @endif

</div>



    {{--<div id="tabs">--}}
        {{--<div class="tab first">ALL</div>--}}
        {{--<div class="tab">PROTOTYPE</div>--}}
        {{--<div class="tab">DESIGN</div>--}}
        {{--<div class="tab ">ANDROID</div>--}}
        {{--<div class="tab">APPLE IOS</div>--}}
        {{--<div class="tab">WEB-APP</div>--}}
        {{--<div class="tabContent">--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
        {{--</div>--}}
        {{--<div class="tabContent">--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
        {{--</div>--}}
        {{--<div class="tabContent">--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
        {{--</div>--}}
        {{--<div class="tabContent">--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
        {{--</div>--}}
        {{--<div class="tabContent">--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
        {{--</div>--}}
        {{--<div class="tabContent">--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<div class="im1"><img src="{{asset('img/p1.jpg')}}"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<div class="team" id="team">

    <h1>TEAM</h1>

    <p>Lorem ipsum dolor sit amet, per ei tamquam suavitate neglegentur</p>
@if(isset($position) && is_object($position))
    <div class="team-img">
     @foreach($position as $pos)
            <div class="ser2">
                <div class=" "><img src="{{asset('img/'.$pos->img)}}"></div>
                <h3>{!! $pos->name !!}</h3>
                <p> {!! $pos->text !!}</p>
            </div>

     @endforeach
@endif
        {{--<div class="ser2">--}}
            {{--<div class=" "><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<h3>APPLE IOS</h3>--}}
            {{--<p> Lorem ipsum dolor sit amet, per ei tamquam suavitate neglegentur,--}}
                {{--ut duo fugit adipiscing assueverit. Perpetua appellantur ne vim,--}}
                {{--est in harum intellegat.</p>--}}
        {{--</div>--}}
        {{--<div class="ser2">--}}
            {{--<div class=" "><img src="{{asset('img/p1.jpg')}}"></div>--}}
            {{--<h3>APPLE IOS</h3>--}}
            {{--<p> Lorem ipsum dolor sit amet, per ei tamquam suavitate neglegentur,--}}
                {{--ut duo fugit adipiscing assueverit. Perpetua appellantur ne vim,--}}
                {{--est in harum intellegat.</p>--}}
        {{--</div>--}}
        {{--<div class="ser2">--}}
            {{--<div class=" "><img src="{{asset('img/p2.jpg')}}"></div>--}}
            {{--<h3>APPLE IOS</h3>--}}
            {{--<p> Lorem ipsum dolor sit amet, per ei tamquam suavitate neglegentur,--}}
                {{--ut duo fugit adipiscing assueverit. Perpetua appellantur ne vim,--}}
                {{--est in harum intellegat.</p>--}}
        {{--</div>--}}

    </div>

</div>
<div class="contact-us" id="contact">
    <h1>CONTACT US</h1>
    <form class="form">
        <input type="text" name="name" placeholder="name.."><br><br>
        <input type="email" name="email" id="email" placeholder="email.."><br><br>
        <input type="textarea" name="textarea" id="textarea" placeholder="messanger..."><br><br>
        <input type="submit" id="btn-1" value="sand">
    </form>
</div>