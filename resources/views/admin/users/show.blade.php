@extends('layouts.admin-app')

@section('scripts')
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endsection

@section('content')
    <div class="container col-md-10 mt-md-4">
        <div class="row m-y-2">
            <div class="col-lg-7 offset-md-1">
                <div class="card shadow-lg">
                    <div class="card-title">
                        <div class="col-md-12">
                            <div class="tab-content p-b-3">
                                <div class="row mt-md-3">
                                    <div class="col-md-12 mx-auto text-center">
                                        <h3>User ID: <br> <small>{{ $user->id }}</small></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="tab-content p-b-3">
                                <div class="row mt-md-3">
                                    <div class="col-md-12 mx-auto text-center">
                                        <h3>Name: <br> <small>{{ $user->name }}</small></h3>
                                    </div>
                                    <br>
                                    <div class="col-md-12 mx-auto text-center">
                                        <h4>Email:</h4>
                                        <div class="text-center col-md-12 p-sm-2">{{ $user->email }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @can('Edit User Permissions')
            <br>
            <br>
            <div class="row m-y-2">
                <div class="col-lg-7 offset-md-1">
                    <div class="card shadow-lg">
                        <div class="card-title">
                            <div class="col-md-12">
                                <div class="tab-content p-b-3">
                                    <div class="row mt-md-3">
                                        <div class="col-md-12 mx-auto text-center">
                                            <h3>Edit User:</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="tab-content p-b-3">
                                    <div class="row mt-md-3">
                                        <div class="col-md-12 mx-auto text-center">
                                            <h3>:</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endcan
    </div>

    <script type="text/javascript">
        function preset_message(clicked_id)
        {
            var message = document.getElementById(clicked_id).value;

            var textarea = document.getElementById("comment");

            textarea.value = message;

            $("body").getNiceScroll().resize();
        }
    </script>
@endsection
