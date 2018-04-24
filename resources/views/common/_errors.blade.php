@foreach($errors->all() as $error)
<div class="container"><div class="alert alert-danger">{{ $error }}</div></div>
@endforeach
