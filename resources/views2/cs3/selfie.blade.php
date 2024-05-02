@extends('layouts.main')

@section('title', 'Dashboard CS | Selfie')

@section('user', 'CS')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('menu') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
    <div class="progress mt10 mbn">
        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="80"
            aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            <span class="sr-only">80% Complete</span>
        </div>
    </div>
    <div class="center mb30">
        <h1 style="color: #CE2222;">Foto Nasabah</h1>
    </div>
    <div class="section">
        <div class="col-xs-12 col-sm-8 pl30  center-block">
            <div class="tray-bin pl10 mb10" style="min-height: 250px;">
                <h5 class="text-muted mt10 fw600 pl10"><i class="fa fa-exclamation-circle text-danger fa-lg pr10"></i>
                    Unggah Foto Diri </h5>
                <form class="dropzone dropzone-sm" id="dropZone" role="form" method="POST"
                    enctype="multipart/form-data"
                    action="{{ route('selfie.detail.post', ['id_nasabah' => $nasabah->id_nasabah]) }}">
                    @csrf
                    <input class="form-control" id="reg_id" name="reg_id" type="hidden" value="{{ $nasabah->reg_id }}">
                    <div class="fallback">
                        <input name="image" type="file" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clearfix p15 ph15 text-center">
        <button type="button" class="button mx-auto p8 w100" id="login">
            Simpan</button>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            Dropzone.options.dropZone = {
                paramName: "image",
                maxFilesize: 2,
                addRemoveLinks: true,
                dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
                                                                                       <span class="main-text"><b>Drop Files</b> to upload</span> <br /> \
                                                                                       <span class="sub-text">(or click)</span> \
                                                                                     ',
                dictResponseError: 'Server not Configured',
                autoProcessQueue: false,

                init: function() {
                    var myDropzone = this;
                    this.on("addedfile", function(file) {
                        if (this.files.length > 1) {
                            // Remove any additional files beyond the first one
                            this.removeFile(file);

                            // Display a clear message to the user
                            this.emit("error", {
                                message: "Only one file can be uploaded."
                            });
                        } else {
                            // Enable the "Simpan" button when a file is added
                            document.getElementById('login').disabled = false;
                        }
                    });

                    this.on("queuecomplete", function() {
                        window.location.href =
                            "{{ route('kirim.detail', ['id_nasabah' => $nasabah->id_nasabah]) }}";
                    });

                    this.on("removedfile", function(file) {
                        // Disable the "Simpan" button if all files are removed
                        if (this.files.length === 0) {
                            document.getElementById('login').disabled = true;
                        }
                    });
                }
            };

            document.getElementById('login').disabled = true;

            document.getElementById('login').addEventListener('click', function(e) {
                e.preventDefault();
                var myDropzone = Dropzone.forElement("#dropZone");

                // Process the queue
                myDropzone.processQueue();
            });

        });
    </script>
@endsection
