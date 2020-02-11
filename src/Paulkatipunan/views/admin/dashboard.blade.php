@extends('admin.layout.master')

@section('title','Dashboard')
<style type="text/css">
    .small-card {
        width: 15rem;
        height: 10rem;
    }
    .small-card > span {
        margin-left: 10%;
        margin-top: 10%;
        font-size: 2rem;
    }
</style>
@section('content')
    <!--End-breadcrumbs-->

    <!--Action boxes-->

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button class="btn btn-sm btn-outline-secondary">Share</button>
            <button class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header">
              Featured
            </div>
            <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
        </div>
    </div>
@endsection