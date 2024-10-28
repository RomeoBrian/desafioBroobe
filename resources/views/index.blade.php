@extends('layouts.plantilla')
@section('contenido')

    <h1>Metricas</h1>
<form action="/">
    @csrf
    <ul class="list-group">
        <li class="col-md-6 col-12 col-lg-6 list-group-item list-group-item-action d-flex justify-content-between">
            <div class="col-mb-3 col-12 col-lg-3">
                <span class="fs-4">URL</span>
            </div>
            <div class="col-mb-6 col-12 col-lg-6">
                <span class="fs-4">Categories</span>
            </div>
            <div class="col-mb-3 col-12 col-lg-3">
                <span class="fs-4">Strategy</span>
            </div>
        </li>
        <li class="col-md-6 col-12 col-lg-6 list-group-item list-group-item-action d-flex justify-content-between">
            <div class="col-mb-3 col-12 col-lg-3">
                <input type="text" name="url" id="url">
            </div>
            <div class="col-mb-6 col-12 col-lg-6">
                <input type="checkbox" name="category" id="PWA" value="PWA"><span class="fs-6">PWA</span>
                <input type="checkbox" name="category" id="SEO" value="SEO"><span class="fs-6">SEO</span>
                <input type="checkbox" name="category" id="PERFORMANCE" value="PERFORMANCE"><span class="fs-6">PERFORMANCE</span>
                <input type="checkbox" name="category" id="BEST-PRACTICES" value="BEST_PRACTICES"><span class="fs-6">BEST-PRACTICES</span>
                <input type="checkbox" name="category" id="ACCESIBILITY" value="ACCESIBILITY"><span class="fs-6">ACCESIBILITY</span>
            </div>
            <div class="col-mb-3 col-12 col-lg-3">
                <select name="strategy" id="strategy">
                    <option value="Mobile">Mobile</option>
                    <option value="Desktop">Desktop</option>
                </select>
            </div>
        </li>
    </ul>
    <br>
    <button type="button" class="btn btn-success" id="fetchData">GET METRICS</button>
</form>

<div class="col-12" id="result">
</div>


@endsection
