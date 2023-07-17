@extends('backend.layouts.app')

@section('title', 'Add Event')

@section('style')

@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Event</a></li>
                    <li class="breadcrumb-item active">Create Event</li>
                </ol>
            </div>
            <h4 class="page-title">Event</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="nama_event">Nama Event</label>
                        <input type="text" name="nama_event" class="form-control {{$errors->first('nama_event') ? "is-invalid": ""}}" placeholder="Nama Event" value="{{ old('nama_event') }}">
                        <div class="invalid-feedback">
                            {{$errors->first('nama_event')}}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Background </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button id="button-background" data-input="input_post_background"
                                    class="btn btn-primary" type="button">
                                    Browse
                                </button>
                            </div>
                            <input id="input_post_background" name="background" value="{{ old('background') }}" type="text" class="form-control {{$errors->first('background') ? "is-invalid": ""}}" placeholder="" readonly />
                            <div class="invalid-feedback">
                                {{$errors->first('background')}}
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Thumbnail </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button id="button-thumbnail" data-input="input_post_thumbnail"
                                    class="btn btn-primary" type="button">
                                    Browse
                                </button>
                            </div>
                            <input id="input_post_thumbnail" name="thumbnail" value="{{ old('thumbnail') }}" type="text" class="form-control {{$errors->first('thumbnail') ? "is-invalid": ""}}" placeholder="" readonly />
                            <div class="invalid-feedback">
                                {{$errors->first('thumbnail')}}
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama_penyelenggara">Nama Penyelenggara</label>
                        <input type="text" name="nama_penyelenggara" class="form-control {{$errors->first('nama_penyelenggara') ? "is-invalid": ""}}" placeholder="Nama Penyelenggara" value="{{ old('nama_penyelenggara') }}">
                        <div class="invalid-feedback">
                            {{$errors->first('nama_penyelenggara')}}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama_event">Tangal Event</label>
                        <input type="datetime-local" name="tanggal" class="form-control {{$errors->first('tanggal') ? "is-invalid": ""}}" placeholder="First name" value="">
                        <div class="invalid-feedback">
                            {{$errors->first('tanggal')}}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama_event">Summary</label>
                        <textarea name="summary" class="form-control {{$errors->first('summary') ? "is-invalid": ""}}" id="" cols="5" rows="5">{{ old('summary') }}</textarea>
                        <div class="invalid-feedback">
                            {{$errors->first('summary')}}
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="nama_event">Detail Event</label>
                        <textarea id="input_post_content" name="detail_event" class="form-control {{$errors->first('detail_event') ? "is-invalid": ""}}" id="" cols="5" rows="5"></textarea>
                        <div class="valid-feedback">
                            {{$errors->first('detail_event')}}
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('backend/assets/tinymce5/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script src="{{ asset('backend/assets/tinymce5/tinymce.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("#input_post_content").tinymce({
                relative_urls: false,
                language: "en",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table directionality",
                    "emoticons template paste textpattern",
                ],
                toolbar1: "fullscreen preview",
                toolbar2: "insertfile undo redo | styleselect | fontselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",


                file_picker_callback(callback, value, meta) {
                    let x = window.innerWidth || document.documentElement.clientWidth || document
                        .getElementsByTagName('body')[0].clientWidth
                    let y = window.innerHeight || document.documentElement.clientHeight || document
                        .getElementsByTagName('body')[0].clientHeight

                    let cmsURL = "{{ route('unisharp.lfm.show') }}" + '?editor=' + meta.fieldname;
                    if (meta.filetype == 'image') {
                        cmsURL = cmsURL + "&type=Images";
                    } else {
                        cmsURL = cmsURL + "&type=Files";
                    }

                    tinymce.activeEditor.windowManager.openUrl({
                        url: cmsURL,
                        title: 'Laravel File manager',
                        width: x * 0.8,
                        height: y * 0.8,
                        onMessage: (api, message) => {
                            callback(message.content, {
                                text: message.text
                            })
                        }
                    })
                }
            });

            //event : input background
            $('#button-background').filemanager('image');

             //event : input thumbnail
             $('#button-thumbnail').filemanager('image');
    });
    </script>
@endsection
