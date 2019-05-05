@if (($msg = session('status')) || ($msg = session('message')) || ($msg = session('info')))
    <div class="alert alert-info" role="alert">{{ $msg }}</div>
@endif

@if ($msg = session('success'))
    <div class="alert alert-success" role="alert">{{ $msg }}</div>
@endif

@if ($msg = session('warning'))
    <div class="alert alert-warning" role="alert">{{ $msg }}</div>
@endif

@if ($msg = session('error'))
    <div class="alert alert-danger" role="alert">{{ $msg }}</div>
@endif
