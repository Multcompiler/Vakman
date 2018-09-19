@extends("main")

@section("title","| Home")

@section("main-content")
    <div class="row">
        <div class="col-12 col-sm-12 order-sm-1">

            <div class="py-3 text-center text-sm-right">
                <p href="#" class="d-inline-block px-3 text-center">
                    <span class="text-md d-block">{{$jobs_total}}</span>
                    <small class="text-xs text-muted">All Jobs</small>
                </p>
                <p href="#" class="d-inline-block px-3 text-center">
                    <span class="text-md d-block">{{$available_jobs}}</span>
                    <small class="text-xs text-muted">Available Jobs</small>
                </p>

                <p href="#" class="d-inline-block px-3 b-l b-r text-center">
                    <span class="text-md d-block">{{$region_total}}</span>
                    <small class="text-xs text-muted">Total Regions</small>
                </p>
                <p href="#" class="d-inline-block px-3 text-center">
                    <span class="text-md d-block">{{$district_total}}</span>
                    <small class="text-xs text-muted">Total Districts</small>
                </p>
            </div>
        </div>
    </div>


    <div class="content-main" id="content-main">
        <div class="row" style="margin-bottom: 7px;">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="container">
                    <div class="row">
                        <div id="testimonial-slider" class="owl-carousel">
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="{{asset("img/iggatech.png")}}">
                                </div>
                                <div class="testimonial-profile">
                                    <h3 class="title">Igga Technologies</h3>
                                    <span class="post">Tech Company</span>
                                </div>
                                <p class="description">
                                    A tech company that deals with development of Android and website, hosting ,
                                    domain registration, and so much more
                                    <br/>
                                    More Info:<br/>
                                    Visit: <a href="https://www.iggatech.com" target="_blank">www.iggatech.com</a>
                                </p>
                            </div>
                            <div class="testimonial">
                                <div class="pic">
                                    <img src="{{asset("img/IMG-20170926-WA0007.jpg")}}">
                                </div>
                                <div class="testimonial-profile">
                                    <h3 class="title">Miande Creative</h3>
                                    <span class="post">Designing & Graphics</span>
                                </div>
                                <p class="description">
                                    Miande creative deals with logo creation, advertisements, web designing , branding
                                    and
                                    labeling , large format printing and so much more <br/>
                                    Contact: <br/>
                                    Phone: 0713 657 501 / 0688 831 666

                                </p>

                            </div>

                            <div class="testimonial">
                                <div class="pic">
                                    <img src="{{asset("img/vakman.jpg")}}">
                                </div>
                                <div class="testimonial-profile">
                                    <h3 class="title">VakMan</h3>
                                    <span class="post">Jobs and Profession Ads</span>
                                </div>
                                <p class="description">
                                    Vakman its a panel that deals with advertisements of careers and job applications
                                    for our
                                    customers e.g IT's,Engineers,Lawyer's,Companies e.t.c <br/>
                                    Contact: <br/>
                                    Phone: 0768 064 878
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div>
            {{--<div class="col-12" style="margin-top: 10px;">--}}
                {{--<ol class="breadcrumb">--}}
                    {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                    {{--<li class="breadcrumb-item"><a href="#">Library</a></li>--}}
                    {{--<li class="breadcrumb-item active">Data</li>--}}
                {{--</ol>--}}
            {{--</div>--}}

            <div class="row align-items-stretch">
                <div class="col-12 col-sm-7">
                    <div class="box">
                        <div class="box-header">
                            <h3>
                                Rent, Buy, Sell Houses
                                <a href="{{route("search")}}" style="height: 25px;float: right;padding-left: 0">
                                    <i class="fa fa-search fa-2x  faa-tada animated"></i>
                                </a>
                            </h3>

                            <small>In Tanzania</small>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-4 col-md-4">
                                    <div class="box-header" style="padding-right: 0;">
                                        <h3>Rent <img src="{{asset("img/house.png")}}" class="faa-flash" alt="logo" style="height: 25px;float: right;padding-left: 0"></h3>
                                    </div>
                                    <div class="col-sm-12 col-md-12">

                                        <div class="item-bg rounded-top">
                                            <img src="{{asset("img/log.jpg")}}" alt="." class="blur">
                                        </div>
                                        <div class="p-5 pos-rlt text-center" style="padding: 2rem !important;">
                                            @if($rental_check > 0)
                                            <img src="{{asset("img/".$picture)}}" alt="." class="circle w-56"
                                                 style="width: 160px;height: 110px;">
                                                @else
                                                <img src="{{asset("img/iggatech.png")}}" alt="." class="circle w-56"
                                                     style="width: 160px;height: 110px;">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="p-3 text-center">
                                        <h3 class="text-md mt-3 d-block">Short Description</h3>
                                        <p>Price:
                                            <small>{{number_format($rental_house["price"])}} tsh</small>
                                        </p>
                                        <p>Category:
                                            <small>{{\App\HouseCategory::where("id",$rental_house["room_category_id"])->pluck("name")->first()}}</small>
                                        </p>
                                        <p>
                                            <a href="{{URL::to("/Rooms/View/Category/".\App\HouseProcess::where("id",$rental_house["house_category_id"])->pluck("name")->first()."/Id/".$rental_house["id"]."")}}" class="btn btn-sm primary">
                                                Details
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="box-header" style="padding-right: 0;">
                                        <h3>Buy <img src="{{asset("img/house.png")}}" class="faa-flash" alt="logo" style="height: 25px;float: right;padding-left: 0"></h3>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="item-bg rounded-top">
                                            <img src="{{asset("img/log.jpg")}}" alt="." class="blur">
                                        </div>
                                        <div class="p-5 pos-rlt text-center" style="padding: 2rem !important;">
                                        @if($buy_check > 0)
                                            <img src="{{asset("img/".$picture1)}}" alt="." class="circle w-56"
                                                 style="width: 160px;height: 110px;">
                                        @else
                                            <img src="{{asset("img/iggatech.png")}}" alt="." class="circle w-56"
                                                 style="width: 160px;height: 110px;">
                                        @endif
                                        </div>
                                    </div>
                                    <div class="p-3 text-center">
                                        <h3 class="text-md mt-3 d-block">Short Description</h3>
                                        @if($buy_check > 0)
                                            <p>Price:
                                                <small> {{number_format($buy_house["price"])}} tsh</small>
                                            </p>
                                            <p>Category:
                                                <small>{{\App\HouseCategory::where("id",$buy_house["room_category_id"])->pluck("name")->first()}}</small>
                                            </p>
                                            <p>
                                                <a href="{{URL::to("/Rooms/View/Category/".\App\HouseProcess::where("id",$buy_house["house_category_id"])->pluck("name")->first()."/Id/".$buy_house["id"]."")}}" class="btn btn-sm primary">
                                                    Details
                                                </a>
                                            </p>
                                        @else
                                            <p>Price:
                                                <small> - tsh</small>
                                            </p>
                                            <p>Category:
                                                <small>-</small>
                                            </p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-4">
                                    <div class="box-header" style="padding-right: 0;">
                                        <h3>Sell <img src="{{asset("img/house.png")}}" class="faa-flash" alt="logo" style="height: 25px;float: right;padding-left: 0"></h3>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="item-bg rounded-top">
                                            <img src="{{asset("img/log.jpg")}}" alt="." class="blur">
                                        </div>
                                        <div class="p-5 pos-rlt text-center" style="padding: 2rem !important;">
                                        @if($sell_check > 0)
                                            <img src="{{asset("img/".$picture2)}}" alt="." class="circle w-56"
                                                 style="width: 160px;height: 110px;">
                                        @else
                                            <img src="{{asset("img/iggatech.png")}}" alt="." class="circle w-56"
                                                 style="width: 160px;height: 110px;">
                                        @endif
                                        </div>
                                    </div>
                                    <div class="p-3 text-center">
                                        <h3 class="text-md mt-3 d-block">Short Description</h3>
                                        @if($sell_check > 0)
                                            <p>Price:
                                                <small> {{number_format($sell_house["price"])}} tsh</small>
                                            </p>
                                            <p>Category:
                                                <small>{{\App\HouseCategory::where("id",$sell_house["room_category_id"])->pluck("name")->first()}}</small>
                                            </p>
                                            <p>
                                                <a href="{{URL::to("/Rooms/View/Category/".\App\HouseProcess::where("id",$sell_house["house_category_id"])->pluck("name")->first()."/Id/".$sell_house["id"]."")}}" class="btn btn-sm primary">
                                                    Details
                                                </a>
                                            </p>
                                        @else
                                            <p>Price:
                                                <small> - tsh</small>
                                            </p>
                                            <p>Category:
                                                <small>-</small>
                                            </p>
                                        @endif

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="p-5 pos-rlt text-center" style="padding: 2rem !important;">
                                            <div class="form-row">
                                                <div class="form-group col-md-12 alert_message" style="display: none;">
                                                    <div class="alert alert-success alert-dismissible" role="alert">
                                                        <strong> <i class="fa fa-spinner fa-2x  faa-spin animated"></i></strong>
                                                        <div> You will be redirected to <span id="message"></span> page shortly in <span id="countDiv"></span> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="house_selection" class="d-block">View All Rent, Buy, Sell Houses</label>
                                                    <select id="house_selection" class="custom-select w-100">
                                                        <option value=""> -- Choose Your Selection --</option>
                                                        <option value="rent">Rent</option>
                                                        <option value="buy">Buy</option>
                                                        <option value="sell">Sell</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-sm-5">
                    <div class="box">
                        <div class="box-header"><h3>Profession Profile Informations</h3>
                            <small>In Tanzania</small>
                        </div>
                        <div class="box-body">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputState" class="d-block">
                                            Choose Location (Region)
                                            <i id="loader-1" class="fa fa-spinner fa-2x  faa-spin animated" style="float: right;display: none;"></i>
                                        </label>
                                        <select id="regions" class="custom-select w-100">
                                            <option value=""> -- Default --</option>
                                            @foreach($all_regions as $region)
                                            <option value="{{$region->id}}">{{ucfirst($region->name)}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="professionals" class="d-block">
                                            Choose Profession
                                            <i id="loader-2" class="fa fa-spinner fa-2x  faa-spin animated" style="float: right;display: none;"></i>
                                        </label>
                                        <div id="region_selection"></div>
                                        <select id="professionals" class="custom-select w-100">
                                               <option selected="selected"> -- Default -- </option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row" id="view_profiles">

                    </div>
                </div>
            </div>


            <div class="white">
                <div class="row no-gutters">
                    <div class="col-sm-12">
                        <div class="p-lg-3">
                            <div class="box-header"><h3>Jobs </h3>
                                <small>In Tanzania</small>
                            </div>
                            <div class="box-divider"></div>
                            <div class="box-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputState" class="d-block">Choose Category</label>
                                            <select id="inputState" class="custom-select w-100">
                                                <option selected="selected"> -- Default --</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white" style="margin-top: 5px;">
                <div class="row no-gutters">
                    <div class="col-sm-12">
                        <div class="p-lg-3">
                            <div class="box-header"><h3>IT Jobs </h3>
                            </div>
                            <div class="box-divider"></div>
                            <div class="box">
                                <div class="box-header">
                                    <small>
                                        If your using small device scroll to view all info
                                    </small>
                                </div>
                                <table class="table table-striped b-t">
                                    <thead>
                                    <tr>
                                        <th>Company Name</th>
                                        <th>Category</th>
                                        <th>Location</th>
                                        <th>Total Needed</th>
                                        <th>Expire In</th>
                                        <th>Status</th>
                                        <th>Application</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
@endsection

@section("page-script")
    <script type="text/javascript">
        $(document).ready(function(){
            $("#house_selection").change(function(){
            var houseSelect = document.getElementById("house_selection").value;
            if(houseSelect == "rent"){
                document.getElementById("message").innerHTML = "Rent";
                $(".alert_message").css("display","block");
                function countDown (count) {
                    if (count > 0) {
                        var d = document.getElementById("countDiv");
                        d.innerHTML = count;
                        setTimeout (function() { countDown(count-1); }, 1000);
                    }
                    else
                        window.location.href = "{{route('rent_page')}}";
                }
                countDown(5);
            }
            else if(houseSelect == "buy"){
                document.getElementById("message").innerHTML = "Buy";
                $(".alert_message").css("display","block");
                function countDown (count) {
                    if (count > 0) {
                        var d = document.getElementById("countDiv");
                        d.innerHTML = count;
                        setTimeout (function() { countDown(count-1); }, 1000);
                    }
                    else
                        window.location.href = "{{route('buy_page')}}";
                }
                countDown(5);
            }
            else if(houseSelect == "sell"){
                document.getElementById("message").innerHTML = "Sell";
                $(".alert_message").css("display","block");
                function countDown (count) {
                    if (count > 0) {
                        var d = document.getElementById("countDiv");
                        d.innerHTML = count;
                        setTimeout (function() { countDown(count-1); }, 1000);
                    }
                    else
                        window.location.href = "{{route('sell_page')}}";
                }
                countDown(5);
            }
          });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#regions").change(function(){
                var region_selected = document.getElementById("regions").value;

                $.ajax({
                    url: "/get/professions",
                    type: 'GET',
                    beforeSend: function () {
                        $("#loader-1").css("display","block");
                    },
                    success: function (response) {
                        console.log(response.length);
                        var item = $('#professionals');
                        var item1 = $('#region_selection');
                        item.empty();
                        item1.empty();
                        item.append("<option value=''> -- Select Professional -- </option>");
                        item1.append("<input type='hidden' name='region_select' id='region_select' value='"+region_selected+"'>");
                        for (var i = 0; i < response.length; i++) {
                            item.append("<option value='" + response[i]['id'] + "'>" + response[i]['name'] + "</option>");
                        }

                    },
                    error: function (jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        console.log(response);

                    }
                });
            });
        });
        $(document).ajaxComplete(function(){
            $("#loader-1").css("display","none");
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#professionals").change(function(){
                var profession_id = document.getElementById("professionals").value;
                var region_id = document.getElementById("region_select").value;

                $.ajax({
                    url: "/get/professions/list/"+profession_id+"/"+region_id,
                    type: 'GET',
                    beforeSend: function () {
                        $("#loader-2").css("display","block");
                    },
                    success: function (response) {

                          console.log(response);
                        if(response.length == 0){
                            var item = $("#view_profiles");
                            item.empty();
                            var html = "";
                            html += "<div class=\"col-sm-12 col-md-12\">";
                            html += " <div class=\"box text-center\">";

                            html += "<p class=\"text-md d-block text-center\" style='padding: 20px;'>No available member in this selection</p>";

                            html +=   "</div>";
                            html +=   " </div>";
                            item.append(html);
                        }else{
                            var item1 = $("#view_profiles");
                            item1.empty();
                            for (var i = 0; i < response.length; i++) {
                                var region_data = response[i]['region_id'];
                                var html = "";
                                html += "<div class=\"col-sm-12 col-md-6\">";
                                html += " <div class=\"box text-center\">";
                                html +=  "<div class=\"p-4\"><p><img src=\"../assets/images/a4.jpg\"  class=\"circle w-56\">";
                                html += "</p><a href=\"#\" class=\"text-md d-block\">"+response[i]['firstname']+" " + response[i]['lastname']+"</a>";
                                html +="<p>";
                                html +="<small>Location: "+response[i]['location']+"</small>";
                                html +="<br/>";
                                html += "<small>"+response[i]['name']+"</small>";
                                html +="<br/>";
                                html +="<small></small>";
                                html +="<br/>";
                                html +="</p>";
                                html +="<a href=\"#\" class=\"btn btn-sm btn-outline btn-rounded b-accent\">View Profile</a>";
                                html +="</div>";
                                html +="<div class=\"row row-col no-gutters b-t rounded-bottom text-center\">";
                                html +=    "<div class=\"col-6 b-r\">";
                                html +=    "<a href=\"#\" class=\"py-3 d-block\" data-toggle-class>";
                                html +="<strong class=\"d-block\">100%</strong>";
                                html +=    "<span class=\"d-block\">Rating</span>";
                                html +=    "</a>";
                                html +=   " </div>";
                                html +=   " <div class=\"col-6 b-r\">";
                                html +=   " <a href=\"#\" class=\"py-3 d-block\" data-toggle-class>";
                                html +=" <strong class=\"d-block\">2</strong>";
                                html +=  " <span class=\"d-block\">Comments</span>";
                                html +=   " </a>";
                                html +=   " </div>";
                                html +=   " </div>";
                                html +=   "</div>";
                                html +=   " </div>";
                                item1.append(html);
                            }
                        }
                        //console.log(response);
                    },
                    error: function (jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        console.log(response);

                    }
                });
            });
        });
        $(document).ajaxComplete(function(){
            $("#loader-2").css("display","none");
        });
    </script>
@endsection