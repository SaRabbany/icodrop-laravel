
@extends('admin.includes.app')

@section('adminSection')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
        </div>

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card recent-sales">

                                <div class="card-body">
                                    <h5 class="card-title"> All Drops </h5>

                                    <table class="table table-borderless datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($allCards as $single)
                                                
                                 
                                            <tr>
                                                <th scope="row"><a href="#">{{$loop->iteration}} </a></th>
                                                <td>{{ $single->name }}</td>
                                                <td><a href="#" class="text-primary">{{ $single->card_type }}</a></td>
                                                <td>${{ $single->price }}</td>

                                                <td>
                                                    <div class="btn-group">

                                                        <a href="{{ route('card-update', $single->id) }}">
                                                            <button type="button" class="btn btn-warning btn-sm" >Update</button>
                                                        </a>

                                                        <form method="POST" action="{{ route('card-delete',  $single->id )}} " id="delete-form-{{ $single->id }}" style="display:none; ">
                                                            {{csrf_field() }}
                                                            {{ method_field("delete") }}
                                                        </form>
                    
                    
                                                        <button onclick="if(confirm('are you sure to delete this')){
                                                            document.getElementById('delete-form-{{ $single->id }}').submit();
                                                            }
                                                            else{
                                                            event.preventDefault();
                                                            }
                                                            " class="btn btn-danger btn-sm btn-raised">
                                                            Delete
                                                        </button>

                                                    </div>
                                                </td>
                                               

                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>

                 

                    </div>
                </div>


            </div>
        </section>

    </main>


    @endsection
    



