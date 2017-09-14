<div style="display:block; margin:0 auto;">
    <br>
    <br><br><br>
    <br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br><br>
    <br><br><br>
    <br>
    <br><br><br>
    <br>
    <br><br><br>

<h1>MIR</h1>

    <form class="form" action="{{ route('mir') }}" method="post">
        <input  type="text"  style="border:1px solid red;" name="name" >
        <input  type="submit"  name="submit" >
        <input type="hidden" class="inp-btn" id="btn-1" name="_token" value="{{ csrf_token() }}">
        {{ csrf_field() }}


    </form>
</div>