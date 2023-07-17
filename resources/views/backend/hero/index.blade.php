@extends('backend.layouts.app')

@section('title', 'Hero')

@section('style')
<!-- Datatables css -->
<link href="{{ asset('backend/assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend/assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item active">Hero</li>
                </ol>
            </div>
            <h4 class="page-title">Hero</h4>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-centered mb-0">
                    <thead>
                        <tr>
                            <th>Judul Hero</th>
                            <th>Background</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($heroes as $hero)
                            <tr>
                                <td>{!! $hero->judul_hero !!}</td>
                                <td><img src="{{ asset($hero->gambar) }}" width="150px" alt=""></td>
                                <td>{{ $hero->deskripsi }}</td>
                                <td width="20%"><button type="button" class="btn btn-warning px-5 editButton" data-id="{{ $hero->id }}">Edit</button></td>
                            </tr> 
                        @empty
                            <tr>
                                <td class="text-center">Data Masih Kosong</td>
                                <td><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#centermodal">Create</button></td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <label class="form-label"> Thumbnail </label>
                    </div>
                    <div class="col-12 col-md-10 col-lg-10">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <button id="button-thumbnail" data-input="input_post_thumbnail"
                                    class="btn btn-primary" type="button">
                                    Browse
                                </button>
                            </div>
                            <input id="input_post_thumbnail" name="gambar" value="{{ old('gambar') }}" type="text" class="form-control {{$errors->first('gambar') ? "is-invalid": ""}}" placeholder="" readonly />
                            <div class="invalid-feedback">
                                {{$errors->first('gambar')}}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-2 col-lg-2">
                        <button type="submit" class="btn btn-info col-12 add-image">Submit</button>
                    </div>
                </div>
                <div class="row card-image">
                @forelse ($gambars as $gambar)
                
                    <div class="col-12 col-md-4 col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset($gambar->gambar) }}" style="display: block; height: auto; width: 100%;" alt="">
                            </div>
                            <div class="card-footer">
                                <button onclick="destroy(this.id)" id="{{$gambar->id}}"
                                    class="btn btn-danger col-12">Delete</button>
                            </div>
                        </div>
                    </div>
                
                @empty
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                Gambar Belum Dimasukkan
                            </div>
                        </div>
                    </div>
                @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@include('backend.hero.addmodal')
@include('backend.hero.editmodal')
@endsection



@section('js')
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>

<script>
     //event : input thumbnail
     $('#button-thumbnail').filemanager('image');

     $('#button-background').filemanager('image');

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
</script>

<script type="text/javascript">
    $(document).on('click','.add_teacher',function(e){
            e.preventDefault();
  			let formData= new FormData($('#addTeacherForm')[0]);
  			$.ajax({
  				method:'POST',
  				url:"{{route('hero.store')}}",
  				data:formData,
  				cache:false,
                contentType: false,
                processData: false,
  				success:function(response){
                    if (response.status == "success") {
                            Swal.fire({
                                icon: 'success',
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DITAMBAHKAN!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                location.reload();
                            });
                    } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DITAMBAHKAN!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                location.reload();
                            });
                        }
                    }
  			});
  	});
    
    //show data in edit modal
    $(document).on('click','.editButton',function(){
            let id=$(this).data('id');
            //alert(id);
            $('#editModal').modal('show');
            $.ajax({
                method:'GET',
                url:'hero/edit/'+id,
                success:function(response){
                   //console.log(response);
                    $('#judul_hero').val(response.hero.judul_hero);
                    $('#edit_id').val(id);
                }
            });
    });
    //show data in edit modal end
    //update hero
    $(document).on('click','.update_teacher',function(e){
            e.preventDefault();
            let id=$('#edit_id').val();
            //alert(id);
            let editFormData=new FormData($('#editTeacherForm')[0]);
            $.ajax({
                method:'POST',
                url:'hero/update/'+id,
                data:editFormData,
                contentType:false,
                processData:false,
                success:function(response){
                    if (response.status == "success") {
                            Swal.fire({
                                icon: 'success',
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIUBAH!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                location.reload();
                            });
                    } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DIUBAH!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                location.reload();
                            });
                        }
                }
                
            });
    })
    //update hero end
    $('.add-image').click(function () {
        var gambar = $('#input_post_thumbnail').val();

        $.ajax({
            url: '{{ route('heroImage.store') }}',
            type: 'POST',
            data: {
                product_id: $('#product_id').val(),
                gambar: $('#input_post_thumbnail').val()
            },
            success: function (response) {
                if (response.status == "success") {
                    Swal.fire({
                        icon: 'success',
                        title: 'BERHASIL!',
                        text: 'DATA BERHASIL DITAMBAHKAN!',
                        showConfirmButton: false,
                        timer: 3000
                    }).then(function () {
                        $(".card-image").load(location.href + ' .card-image'),
                        $("#input_post_thumbnail").val("")
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'GAGAL!',
                        text: 'DATA GAGAL DIUBAH!',
                        showConfirmButton: false,
                        timer: 3000
                    }).then(function () {
                        $('#input_post_thumbnail')[0].reset(),
                        $(".card-image").load(location.href + ' .card-image');
                    });
                }
            }
        });
    })
</script>
<script>
    function destroy(id) {
        var id = id;
        var token = $("meta[name='csrf-token']").attr("content");

        Swal.fire({
            title: 'APAKAH KAMU YAKIN ?',
            text: "INGIN MENGHAPUS DATA INI!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'BATAL',
            confirmButtonText: 'YA, HAPUS!',
        }).then((result) => {
            if (result.isConfirmed) {
                //ajax delete
                jQuery.ajax({
                    url: `hero/destroy/${id}`,
                    data: {
                        "id": id,
                        "_token": token
                    },
                    type: 'DELETE',
                    success: function (response) {
                        if (response.status == "success") {
                            Swal.fire({
                                icon: 'success',
                                title: 'BERHASIL!',
                                text: 'DATA BERHASIL DIHAPUS!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                $(".card-image").load(location.href + ' .card-image');
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'GAGAL!',
                                text: 'DATA GAGAL DIHAPUS!',
                                showConfirmButton: false,
                                timer: 3000
                            }).then(function () {
                                $(".card-image").load(location.href + ' .card-image');
                            });
                        }
                    }
                });
            }
        })
    }

</script>
@endsection
