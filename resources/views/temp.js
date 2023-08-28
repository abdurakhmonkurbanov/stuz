@if(Session::has('xabar'))
onload = "success_user('{{Session::get('xabar')}}')"
@endif