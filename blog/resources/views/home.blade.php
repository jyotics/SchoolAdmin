@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <!-- <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div> -->

                <?php if(auth()->user()->isAdmin == 1){?>
<div class="panel-body">
<a href="{{url('admin/routes')}}">Admin</a>
</div><?php } else echo '<div class=”panel-heading”>Normal User</div>';?>

            </div>
        </div>
    </div>
</div>
@endsection
