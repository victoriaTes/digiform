@extends('layouts.main')

@section('title', 'Dashboard CS | Registrasi')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('menu') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
<div>
    <h3 style="color: #CE2222;">
        <a href="{{ route('menu') }}" style="text-decoration: none; color: #CE2222;">
            <i class="fa fa-arrow-left mr10"></i>
            <strong>Kembali</strong>
        </a>
    </h3>
</div>
    <div class="row">
        <div class="center mb30">
            <h1 style="color: #CE2222;">Verifikasi Pengambilan Kartu ATM</h1>
        </div>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Input NIK & No. Rekening</span>
                </div>
                <div class="panel-body">
                    @csrf
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 text-right mr10">
                            <div class="form-group">
                                <label for="nik" class="control-label form-horizontal mt5">NIK</label>
                            </div>
                            <div class="form-group">
                                <label for="noAccount" class="control-label mt10">No. Rekening</label>
                            </div>
                            <div class="form-group">
                                <label for="result1" class="control-label mt5">Result:</label>
                            </div>
                            <div class="form-group">
                                <label for="image" class="control-label" style="margin-top: 100px;">Take Photo</label>
                            </div>
                            <div class="form-group">
                                <label for="dukcapilResult" class="control-label" style="margin-top: 395px;">Result:</label>
                            </div>
                            <div class="form-group">
                                <label for="otp" class="control-label mt5">Input OTP</label>
                            </div>
                            <div class="form-group">
                                <label for="result3" class="control-label" style="margin-top: 5px;">Result:</label>
                            </div>
                        </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" id="nik" name="nik" type="text" min="15" max="16" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="noAccount" name="noAccount" min="10" max="10" type="text" autofocus>
                                </div>
                                <div>
                                    <div id="verificationResult" name="verificationResult" style="min-height: 30px;"></div> <!-- Empty div for displaying verification result -->
                                    <input id="noHp" name="noHp" type="text" style="display: none">
                                    <input id="alamat" name="alamat" type="text" style="display: none">
                                </div>
                                <div class="form-group" style="position: relative;">
                                    <div id="my_camera" style="width: 100%; height: 250px;"></div>
                                    <div id="overlay" class="overlay">
                                        <div class="overlay-top"></div>
                                        <div class="overlay-bottom"></div>
                                        <div class="overlay-left"></div>
                                        <div class="overlay-right"></div>
                                    </div>
                                    <div id="results" style="position: relative; margin-top: 10px; width: 100%; height: 250px;"></div>
                                    <br/>
                                    <input type="hidden" id="image" name="image" class="image" style="width: 330px; height: 250px;">
                                </div>
                                <div>
                                    <div id="dukcapilResult" name="dukcapilResult" style="min-height: 30px;"></div> <!-- Empty div for displaying verification result -->
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="token" name="token" style="margin-top: 10px;" type="text">
                                </div>
                                <div class="form-group">
                                    <input id="transactionId" name="transactionId" type="text" hidden>
                                    <div id="tokenResult" name="tokenResult" style="min-height: 30px;"></div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-primary" id="save">Cetak</button>
                                </div>  
                            </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 ml10">
                            <div class="form-group d-flex flex-column">
                                <button class="btn btn-primary h-100 ml-auto" id="verifyCustomer">Verify Customer</button>
                                <div style="height: 50px;"></div> <!-- Adjust the height to create spacing -->
                                <input type="button" value="Take Snapshot" id="snapshot" class="btn btn-primary ml-auto" style="margin-top: 60px;" onClick="take_snapshot()">
                                <button class="btn btn-primary ml-auto" id="verifyDukcapil" style="margin-top: 270px;" disabled>Verify Dukcapil</button>
                                <div style="height: 55px;"></div> <!-- Adjust the height to create spacing -->
                                <button class="btn btn-primary ml-auto" id="sendOTP" style="margin-top: 110px;">Send OTP</button>
                                <button class="btn btn-primary ml-auto" id="verifyOTP" style="margin-top: 5px;" disabled>Verify OTP</button>
                            </div>
                        </div> 
                        <div class="col-lg-1 col-md-1 col-sm-1">
                            <label id="countdownTimer"></label>
                        </div>                       
                    </div>
                </div>                               
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    var countdownTimer;

    Webcam.set({
        width: 330,
        height: 250,
        image_format: 'jpeg',
        jpeg_quality: 90
    });

    $(document).ready(function() {
        $("#verifyCustomer").on('click', function() {
            var nik = $("#nik").val();
            var noAccount = $("#noAccount").val();

            $("#verifyCustomer").prop('disabled', true);

            if (nik === '' || noAccount === '') {
                alert('NIK dan No. Rekening harus diisi');
                $("#verifyCustomer").prop('disabled', false);
                return;
            }
            // Periksa apakah NIK dan noAccount hanya terdiri dari angka
            var regex = /^[0-9]+$/;
            if (!regex.test(nik) || !regex.test(noAccount)) {
                alert('NIK dan No. Rekening hanya boleh terdiri dari angka');
                $("#verifyCustomer").prop('disabled', false);
                return;
            }

            $.ajax({
                url: "{{ route('atm.checknik') }}",
                data: {
                    "nik": nik,
                    "noAccount": noAccount
                },
                type: 'post', // Corrected the type to 'post'
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    $("#verificationResult").html(response.result);
                    $("#noHp").val(response.noHp); // Menampilkan noHp di input dengan id "noHpInput"

                    if (response.result === 'Data Sesuai') {
                        $("#verificationResult").css('color', 'green');
                        $("#nik").prop('disabled', true);
                        $("#noAccount").prop('disabled', true);
                    }
                    else{
                        $("#verificationResult").css('color', 'red');
                        $("#verifyCustomer").prop('disabled', false);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });
            if ($("#verificationResult").text() === 'Data Sesuai') {
                // Jika nilai #verificationResult adalah 'Data Sesuai', nonaktifkan tombol verifyCustomer
                $("#verifyCustomer").prop('disabled', true);
            }
        });

        $("#verifyDukcapil").on('click', function() {
            var nik = $("#nik").val();
            var image = $("#image").val(); // Corrected variable name

            $("#snapshot").prop('disabled', true);
            $("#verifyDukcapil").prop('disabled', true);

            if (nik === '') {
                alert('NIK harus diisi');
                $("#snapshot").prop('disabled', false);
                $("#verifyDukcapil").prop('disabled', false);
                return;
            }
            // Periksa apakah NIK dan noAccount hanya terdiri dari angka
            var regex = /^[0-9]+$/;
            if (!regex.test(nik)) {
                alert('NIK dan No. Rekening hanya boleh terdiri dari angka');
                $("#snapshot").prop('disabled', false);
                $("#verifyDukcapil").prop('disabled', false);
                return;
            }

            console.log("Base64 Image Data:", image);
            $.ajax({
                url: "{{ route('atm.checkdukcapil') }}",
                data: {
                    "nik": nik,
                    "image": image
                },
                type: 'post', // Corrected the type to 'post'
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(result) {
                    $("#dukcapilResult").html(result);
                    if (result === 'Sudah Sesuai') {
                        $("#dukcapilResult").css('color', 'green');
                        $("#overlay").css('display', 'none');
                        Webcam.reset();
                    }
                    else{
                        $("#dukcapilResult").css('color', 'red');
                        $("#snapshot").prop('disabled', false);
                        $("#verifyDukcapil").prop('disabled', false);
                    }
                }
            });
        });
    });

    Webcam.attach('#my_camera');

    function take_snapshot() {
        Webcam.snap(function(data_uri) {
            $("#verifyDukcapil").prop('disabled', false);
            
            var base64Image = data_uri.split(',')[1]; // Split at the comma and take the second part

            // Set the extracted base64 image data to the hidden input field (#image)
            $("#image").val(base64Image);

            // Display the snapshot result within the results div
            $("#results").html('<img src="' + data_uri + '" style="width: 100%; height: 100%; object-fit: cover;">');
            $("#results").show(); // Show the results div

            console.log(base64Image);
        });
    }

    $("#sendOTP").on('click', function() {
        var noHp = $("#noHp").val();
        var nik = $("#nik").val();
        var noAccount = $("#noAccount").val();
        if (nik === '' || noAccount === '') {
            alert('NIK dan No. Rekening harus diisi');
            return;
        }
        // Periksa apakah NIK dan noAccount hanya terdiri dari angka
        var regex = /^[0-9]+$/;
        if (!regex.test(nik) || !regex.test(noAccount)) {
            alert('NIK dan No. Rekening hanya boleh terdiri dari angka');
            return;
        }

        $(this).prop('disabled', true);
        $("#verifyOTP").prop('disabled', false);

        // Set the countdown duration in seconds (90 seconds = 90000 milliseconds)
        var countdownDuration = 90; // 90 seconds
        var timerInterval = 1000; // 1 second interval

        countdownTimer = setInterval(function() {
            // Update the countdown timer text
            $('#countdownTimer').text(countdownDuration + ' seconds');

            // Decrease the countdown duration
            countdownDuration--;

            // Check if countdown is complete
            if (countdownDuration < 0) {
                // Re-enable the button
                $("#sendOTP").prop('disabled', false);

                // Clear the countdown timer
                clearInterval(countdownTimer);

                // Clear the countdown timer text
                $('#countdownTimer').text('');
            }
        }, timerInterval);
        
        $.ajax({
            url: "{{ route('atm.sendotp') }}",
            data: {
                "noHp": noHp
            },
            type: 'post', // Corrected the type to 'post'
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $("#transactionId").val(response.transId);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

    $("#verifyOTP").on('click', function() {
        var transactionId = $("#transactionId").val();
        var token = $("#token").val();

        $("#verifyOTP").prop('disabled', true);

        $.ajax({
            url: "{{ route('atm.token') }}",
            data: {
                "transactionId": transactionId,
                "token": token
            },
            type: 'post', // Corrected the type to 'post'
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                // $("#tokenResult").val(response.message);
                $("#tokenResult").html(response.message);
                
                if (response.message === 'Success') {
                    $("#tokenResult").css('color', 'green');
                    $("#save").prop('disabled', false);
                    // Re-enable the button
                    $("#sendOTP").prop('disabled', true);
                    clearInterval(countdownTimer);
                    $('#countdownTimer').text('');
                }
                else{
                    $("#tokenResult").css('color', 'red');
                    $("#verifyOTP").prop('disabled', false);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });

    $("#save").on('click', function() {
        var nik = $("#nik").val();
        var image = $("#image").val();

        $.ajax({
            url: "{{ route('atm.save') }}",
            data: {
                "nik": nik,
                "image": image
            },
            type: 'post', // Corrected the type to 'post'
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                alert('Form submitted successfully! Click OK to continue.');

                // Construct the URL with the dynamic nik value
                var printAtmUrl = "{{ route('print.atm', ['nik' => ':nik']) }}";
                printAtmUrl = printAtmUrl.replace(':nik', nik);
                
                // Redirect to the print.atm page with the dynamic nik value
                window.location.href = printAtmUrl;
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
</script>
@endsection
