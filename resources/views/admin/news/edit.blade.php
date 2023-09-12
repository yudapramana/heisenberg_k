@extends('layouts.admin.master')
@section('title', $title)


@section('_styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script> --}}
{{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script> --}}
@endsection





@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>{{ $title }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{ $br1 }}</a></li>
                <li class="breadcrumb-item active">{{ $br2 }}</li>
            </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create {{$title}}</h5>

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show my-1" role="alert">
                                        {{ session('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <form action="{{route('news.update', $post->id)}}" method="POST"
                                        enctype="multipart/form-data">
                                        <input type="hidden" name="_method" value="PUT">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <label for="cover">Cover</label>

                                            <div class="col-sm-10">
                                                <input class="form-control" type="hidden" name="cover" id="cover"
                                                    value="{{ $post->cover }}">
                                                <button type="button" id="cover_image_url_btn"
                                                    class="btn btn-secondary btn-sm" @if($post->cover)
                                                    style="display:none;" @else style="display:block;" @endif>Unggah
                                                    Cover</button>

                                                <div class="show-cover-box" @if($post->cover) style="display:block;"
                                                    @else style="display:none;" @endif >
                                                    <img class="mb-2" id="preview-cover" src="{{$post->cover}}"
                                                        alt="logo_instansi" height="200"><br>
                                                    <div class="mb-2">
                                                        <button type="button" id="retry-cover-btn"
                                                            class="btn btn-secondary btn-sm">Hapus & Unggah
                                                            Ulang</button>
                                                    </div>
                                                </div>
                                            </div>@error('cover')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        {{-- <div class="form-group mb-3">
                                            <label for="is_news">Apakah Berita</label>
                                            <select name="is_news" id="is_news"
                                                class="form-control form-select select2 @error('is_news') is-invalid @enderror"
                                                required>
                                                <option value="" disabled @if($post->is_news == '') selected
                                                    @endif>Choose one</option>
                                                <option value="no" @if($post->is_news == 'no') selected @endif>Tidak
                                                </option>
                                                <option value="yes" @if($post->is_news == 'yes') selected @endif>Ya
                                                </option>

                                            </select>
                                            @error('category')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div> --}}

                                        <div class="form-group mb-3">
                                            <label for="title">Title</label>
                                            <input type="text" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                value="{{old('title') ? old('title') : $post->title}}" required>
                                            @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="slug">Slug</label>
                                            <input type="text" name="slug"
                                                class="form-control @error('slug') is-invalid @enderror"
                                                value="{{old('slug') ? old('slug') : $post->slug}}" required>
                                            @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="desc">Description</label>
                                            <textarea name="desc" id="desc" cols="50" rows="30"
                                                class="ckeditor form-control @error('desc') is-invalid @enderror"
                                                required>{{old('desc') ? old('desc') : $post->desc}}</textarea>
                                            @error('desc')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="category">Category</label>
                                            <select name="category" id="category"
                                                class="form-control form-select select2 @error('category') is-invalid @enderror"
                                                required>
                                                <option value="" disabled selected>Choose one</option>
                                                @foreach ($categories as $category)
                                                <option {{ $category->id == $post->category_id ? 'selected' : '' }}
                                                    value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="tag">Tags</label>
                                            <select name="tags[]" id="tag"
                                                class="form-control form-select select2 @error('tags') is-invalid @enderror"
                                                required multiple>
                                                @foreach ($post->tags as $tag)
                                                <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                @endforeach
                                                @foreach ($tags as $tags)
                                                <option value="{{ $tags->id }}">{{ $tags->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('tags')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="keywords">Keywords</label>
                                            <input type="text" name="keywords"
                                                class="form-control @error('keywords') is-invalid @enderror"
                                                value="{{old('keywords') ? old('keywords') : $post->keywords}}"
                                                required>
                                            @error('keywords')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="meta_desc">Meta Desc</label>
                                            {{-- <input type="text" name="meta_desc"
                                                class="form-control @error('meta_desc') is-invalid @enderror"
                                                value="{{old('meta_desc') ? old('meta_desc') : $post->meta_desc}}"
                                                required> --}}
                                            <textarea class="form-control" name="meta_desc" id="meta_desc" cols="5"
                                                rows="5" @error('meta_desc') is-invalid @enderror
                                                value="{{old('meta_desc') ? old('meta_desc') : $post->meta_desc}}"
                                                required>{{old('meta_desc') ? old('meta_desc') : $post->meta_desc}}</textarea>

                                            @error('meta_desc')
                                            <div class=" invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('admin.posts._modal')


</main>



@endsection


@section('_scripts')


<!-- Styles -->
{{--
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" /> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<!-- Or for RTL support -->
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />

<!-- Scripts -->
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>





<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap5.min.js"></script>

<script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://upload-widget.cloudinary.com/global/all.js" type="text/javascript"></script>
<script src="{{ asset('assets/js/classic_ckeditor.js') }}"></script>

<script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor' ),{
                ckfinder: {
                    uploadUrl: '{{route('image.upload').'?_token='.csrf_token()}}',
                },
                image: {
                    styles: [
                        { className: 'post-image-styles' }
                    ]
                }
            })
            .catch( error => {
                console.error( error );
            } );
    // $(document).ready(function() {
    //     $('.ckeditor').ckeditor();
    // });

    // CKEDITOR.replace('desc', {
    //     filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}"
    //     , filebrowserUploadMethod: 'form'
    // });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.select2').select2({
        theme: 'bootstrap-5'
    , });


    // Cover
    var coverWidget = cloudinary.createUploadWidget({
        cloudName: 'dezj1x6xp'
        , uploadPreset: 'pandanviewmandeh'
        , theme: 'minimal'
        , multiple: false
        , max_file_size: 10048576
        , background: "white"
        , quality: 20
    }, (error, result) => {
        if (!error && result && result.event === "success") {
            console.log('Info Arsip Masuk: ', result.info);
            var linklogo = result.info.secure_url;
            $('#cover').val(linklogo);

            $('#cover_image_url_btn').hide();

            $('.show-cover-box').show();
            $('#preview-cover').attr("src", linklogo);

        }
    });

    document.getElementById("cover_image_url_btn").addEventListener("click", function() {
        coverWidget.open();
    }, false);



    $(document).on('click', '#retry-cover-btn', function(e) {
        $('#cover_image_url_btn').show();
        $('.show-cover-box').hide();
    });

</script>
@endsection