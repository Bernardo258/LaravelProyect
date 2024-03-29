@extends('layout.layouts')

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush
@section('contenido')
    <div class="row">
            <div class="col-6 mb-6 text-center">
                <h4 class="mb-3">imagen aqui</h4>
            <!-- Example of a form that Dropzone can take over -->
            <form action="{{ route('imagenes') }}" enctype="multipart/form-data" id="dropzone"
                class="dropzone rounded border border-1 w-100 h-100 items-center 
        d-flex aling-items-cente justify-content-center">
                @csrf
            </form>
        </div>
        <div class="col-6">
            <form action="/posts" method="POST" novalidate>
                @csrf
                <div class="form-outline m-3">
                    <input type="text" id="typeText" class="form-control border border-dark" name="titulo" />
                    <label class="form-label" for="typeText">Titulo</label>
                </div>
                @error('titulo')
                    <p style="color: red">{{ $message }}</p>
                    @enderror
                    <div class="form-outline m-3">
                    <textarea class="form-control border border-dark" name="descripcion" id="textAreaExample" rows="4"></textarea>
                    <label class="form-label" for="textAreaExample">Mensaje</label>
                </div>
                @error('descripcion')
                <p style="color: red">{{ $message }}</p>
                @enderror
                <div>
                    <input name="imagen" id="imagen" type="hidden" value={{ old('imagen') }} />
                </div>
                @error('imagen')
                <p style="color:red">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-primary btn-block mb-4">Crear Publicacion</button>
            </form>
        </div>
    </div>
@endsection
