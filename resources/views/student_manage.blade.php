@extends('layouts.app')
@section('main-content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 style="text-align: center">Student List</h1>
            <table class="table mt-3 text-left">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" class="pr-5">Fullname</th>
                        <th scope="col">birthday</th>
                        <th scope="col">Address</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{!! $student->id !!}</td>
                            <td class="pr-5 text-right">{!! $student->fullname !!}</td>
                            <td>{!! $student->birthday !!}</td>
                            <td>{!! $student->address !!}</td>
                            <td>
                                <a href="{{ url('/students/' .$student->id) }}">
                                    <button type="button" class="btn btn-outline-warning">Edit</button>

                                </a>

                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="3"></td>
                        </tr>

                    @endforelse
                </tbody>

            </table>
        </div>

    </div>

</div>
