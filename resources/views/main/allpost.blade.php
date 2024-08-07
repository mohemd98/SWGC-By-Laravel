@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <input style="background-color: #1C315E;font-size: 25px; color: white; " type="text" name="search_user" id="search_user" class="form-control fgfgggg input-sm mt-3" placeholder="ابحث عن المستخدمين" autocomplete="off" />
                <div class="list-group mt-2 " id="tgtg" style="max-height: 450px; overflow: auto;" >
                </div>
                <div class="card w-100">
                    <div class="card-body">
                        <h5 class="card-header">فلاتر</h5>

                        <!-- -------------------- -->

                        <div class="list-group">
                            <h3>محافظات</h3>
                            <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">

                                    @foreach($distinctCities as $city)
                                        <div class="list-group-item checkbox">
                                            <label><input type="checkbox" class="common_selector city" value="{{ $city }}"> {{ $city }}</label>
                                        </div>
                                    @endforeach
                            </div>
                        </div>

                        <div class="list-group">
                            <h3>نوع النشر</h3>
                            <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                                @foreach($distinctTypes as $type)
                                    <div class="list-group-item checkbox">
                                        <label><input type="checkbox" class="common_selector type" value="{{ $type }}"> {{ $type }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="list-group">
                            <h3>المطلوب</h3>
                            <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                                @foreach($distinctWants as $want)
                                    <div class="list-group-item checkbox">
                                        <label><input type="checkbox" class="common_selector want" value="{{ $want }}"> {{ $want }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="list-group">
                            <h3>الجنس</h3>
                            <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                                @foreach($distinctGenders as $gender)
                                    <div class="list-group-item checkbox">
                                        <label><input type="checkbox" class="common_selector gender" value="{{ $gender }}"> {{ $gender }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- ---------------------- -->

                    </div>

                </div>
            </div>
            <!-- ---------------------------------------------------------- -->
            <div class="col-md-8">
                <div class="card w-100">
                    <div class="card-body ">
                        <h5 class="card-header text-center" style="font-size: 26px; height: 50px;background-color: #1C315E; border-radius: 5px; color: white;">جميع المنشورات</h5>
                        <div id="post_list_all" class='filter_data'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
