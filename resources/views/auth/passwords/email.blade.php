@extends('layouts.app')
@section('custom_css')
<style>
body>#app{
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
body>#app>nav{
    width: 100%;
    border-radius: 0px;
}
body>#app>.container{
   flex-shrink: 1;
   flex-grow: 1;
   display: flex;
   justify-content: center
}

#btn{
    background-color: #FFB20C;
        border-radius: 10px;
        color: white;
    }

    #btn:hover{
    filter: brightness(80%)
        color: white;
    }
  .border{
    border-radius: 10px;
  }

  div#container{
    padding-top: 15rem;
  }


  .card{
    border-radius:20px;
    padding: 3rem;
}
</style>
@endsection
@section('content')
<div class="container" id="container">
    <div class="col-lg-5 col-md-6 col-sm-10 col-xs-12">
        <div class="card shadow text-reset">
            <div class="card-header">
                <div class="card-title h3 my-2 text-center fw-bolder">Reset Password</div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">Email</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn fw-bold" id="btn">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
