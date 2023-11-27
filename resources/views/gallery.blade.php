@extends('layout.master')

@section('title', 'Gallery')

@section('menuGallery', 'active')


@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1>Gallery</h1>
    <div class="row">
        <div class="col-4">
            <img src="https://source.unsplash.com/cXUOQWdRV41/350x250" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://source.unsplash.com/kfwPlieZVI/358x250" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4">
            <img src="https://source.unsplash.com/8CqDvPuo_k1/358x250" class="img-thumbnail img-fluid">
        </div>
    </div>
    <div class="row">
        <div class="col-4 mt-4">
            <img src="https://source.unsplash.com/JdzHrfx4140/358x258" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="https://source.unsplash.com/T-tVt4xsCdE/358x250" class="img-thumbnail img-fluid">
        </div>
        <div class="col-4 mt-4">
            <img src="https://source.unsplash.com/F8t2VGn1471/350x250" class="img-thumbnail img-fluid">
        </div>
    </div>
</div>
@endsection
