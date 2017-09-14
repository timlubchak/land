<div style="display:block; margin:0 auto;">

<form class="form" action="{{ route('tim') }}" method="post">
    <input  type="text"   name="name" >
    <input  type="submit"  name="submit" >
    <input type="hidden" class="inp-btn" id="btn-1" name="_token" value="{{ csrf_token() }}">
    {{ csrf_field() }}


</form>
</div>