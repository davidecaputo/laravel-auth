@extends('layouts.app')
@section('content')
    <div class="sidebar d-flex">
        <div class="sidebar-left bg-primary d-flex flex-column gap-4">
            <a class="nav-link d-flex align-items-center gap-4" href="{{ route('admin.dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <a class="nav-link collapsed d-flex align-items-center gap-4" href="#" data-bs-toggle="collapse"
                data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Progetti
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('admin.works.index') }}">Lavori</a>
                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                </nav>
            </div>
        </div>
        <div class="sidebar-right p-5 bg-dark-subtle">
            <h1 class="text-center mb-5">Lavori</h1>
            <table class="table table-hover border mb-5">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Immagine</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Link</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($works as $work)
                        <tr>
                            <th>{{ $work->id }}</th>
                            <td>{{ $work->name }}</td>
                            <td>{{ $work->slug }}</td>
                            <td><img src="{{ $work->image }}" alt="{{ $work->name }}" class="img-thumbnail"></td>
                            <td>{{ $work->description }}</td>
                            <td><a href="{{ $work->link }}" class=" text-primary">{{ $work->link }}</a></td>
                            <td class="fs-4" style="width: 110px"><i class="fa-regular fa-eye me-2"></i><i class="fa-regular fa-pen-to-square me-2"></i><i class="fa-regular fa-trash-can" style="color: #e90c0c;"></i></td>
                        </tr>
                    @endforeach
                    <tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
