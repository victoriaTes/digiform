@extends('layouts.main')

@section('title', 'Dashboard CS')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('menu') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
    @if (session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="admin-form theme-info center">
        <div class="panel-body bg-light p50" style="border-radius: 10px;width:70%;">

            <div class="center bg-light mb30">
                <h1 style="color: #CE2222;">UBAH PASSWORD</h1>
            </div>
            <div class="row">
                <form id="contact" method="POST"  action="{{ route('reset') }}">
                    @csrf
                    <div class="panel-body bg-light p30">
                        <div class="row">
                            <div class="col">
                                <div class="section" style="display: none">
                                    <label for="id" class="field-label text-muted fs18 mb10">id</label>
                                    <label for="id" class="field prepend-icon">
                                        <input type="text" name="id" id="id" class="gui-input"
                                            placeholder="Enter new password" value="{{ auth()->user()->id }}"  required autofocus>
                                        <label for="id" class="field-icon"><i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="section">
                                    <label for="npassword" class="field-label text-muted fs18 mb10">New Password</label>
                                    <label for="npassword" class="field prepend-icon">
                                        <input type="password" name="npassword" id="npassword" class="gui-input"
                                            placeholder="Enter new password" minlength="6" required autofocus>
                                        <label for="npassword" class="field-icon"><i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                                <div class="section">
                                    <label for="cpassword" class="field-label text-muted fs18 mb10 mt30">Confirm Password</label>
                                    <label for="cpassword" class="field prepend-icon">
                                        <input type="password" name="cpassword" id="cpassword" class="gui-input"
                                            placeholder="Enter confirm password" minlength="6" required>
                                        <label for="cpassword" class="field-icon"><i class="fa fa-lock"></i>
                                        </label>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end .form-body section -->
                    <div class="clearfix p20 ph15 text-center bg-light">
                        <button type="submit" class="button mx-auto" id="login">Ubah Password</button>
                        <a href="{{ route('menu') }}" class="button mx-auto ml20" id="login">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $("#success-alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 2000);

        });
    </script>
    <script>
        $(document).ready(function() {
          $('#contact').submit(function(e) {
            var npassword = $('#npassword').val();
            var cpassword = $('#cpassword').val();
      
            if (npassword !== cpassword) {
              e.preventDefault();
              alert("New Password dan Confirm Password berbeda!");
            }
          });
        });
      </script>
@endsection
