@extends('layouts.app')

@section('title','Approved Document')

@section('content')

<div class="content-header">
    <div class="header-title"> 
        <h2>Approved Document</h2>
        <span> list data approved document</span>
    </div>
    <a href="{{ url('/dashboard') }}" class="btn">Excel</a>
</div>

<div class="table-wrapper">
    <div class="group-bar">
        Drag a column header and drop it here to group by that column
    </div>

    <table>
        <thead>
            <tr>
                <th>Approval</th>
                <th>Status</th>
                <th>Doc Number</th>
                <th>Ref Number</th>
                <th>Category</th>
                <th>Dari</th>
                <th>Subject</th>
            </tr>
            <tr>
                <th><input class="filter"></th>
                <th><input class="filter"></th>
                <th><input class="filter"></th>
                <th><input class="filter"></th>
                <th><input class="filter"></th>
                <th><input class="filter"></th>
                <th><input class="filter"></th>
            </tr>
        </thead>
        <tbody>
            {{-- data nanti dari database --}}
        </tbody>
    </table>
</div>

@endsection
