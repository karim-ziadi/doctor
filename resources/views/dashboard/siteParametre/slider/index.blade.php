@extends('layouts.app')
@section('content')
            
            <div class="content-body">
                
                <section id="modal-examples">
                    <div class="row">
                        <div class="float-right">
                            <form action="{{route('slider.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75 waves-effect waves-float waves-light">Ajouter</label>
                                <input type="file" id="account-upload" hidden="" name="image" onchange="this.form.submit()">
                            </form>
                            
                                            
                        </div>
                        <!-- add new card  -->
                        <div class="col-md-4">
                            
                            <div class="card">
                                <div class="card-body text-center">
                                    
                                    <img src="{{asset('front/images/slider/2.png')}}" alt="" style="max-width: 100%;">
                                    

                                    <!-- modal trigger button -->
                                    <button type="button" class="btn btn-danger waves-effect waves-float waves-light mt-2" >
                                        Supprimer
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- / add new card  -->
                    </div>
                </section>
                <!-- add new card modal  -->
                <div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-sm-5 mx-50 pb-5">
                                <img src="{{asset('front/images/slider/2.png')}}" alt="" style="max-width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ add new card modal  -->
            </div>
@endsection