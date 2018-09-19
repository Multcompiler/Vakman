@extends("main")

@section("title","| Search")

@section("main-content")
    <div class="padding">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="panel box no-border mb-2">
                        <div class="box-header p-y-sm">
                           Click the image to view house details
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header" style="padding-bottom: 0;">
                        <h2><i class="fa fa-search"></i> Horizontal form</h2>
                    </div>
                    <div class="box-body">
                                <div class="box-divider m-0"></div>
                                <div class="box-body">
                                <form>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <select class="form-control" required>
                                                <option> -- Select Region -- </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <select class="form-control" required>
                                                <option> -- Select District -- </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <select class="form-control" required>
                                                <option> -- Category -- </option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <select class="form-control" required>
                                                <option> -- Price -- </option>
                                            </select>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn primary btn-block">Search</button>
                                </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row row-xs">
                    <div class="col-sm-6 order-sm-1">
                        <div class="py-3 text-center text-sm-left">
                            <a href="#" class="d-inline-block px-3 text-center">
                                <span class="text-md d-block" style="font-size: 1.0rem;">Showing: 3</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 order-sm-2">
                        <div class="py-3 text-center text-sm-right">
                            <div class="d-inline-block px-3 text-center">
                                <select class="form-control" onchange="if (this.value) window.location.href=this.value">
                                    <option value="">Sort by</option>
                                    <option value="low_to_high">Price: Low to High</option>
                                    <option value="high_to_low">Price: High to Low</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row row-xs">
                    <div class="col-6 col-sm-3 col-md-3">
                        <div class="box p-1"><a href="#"><img src="../assets/images/a0.jpg" alt="" class="w-100"></a>
                            <div class="p-2">
                                <div class="text-ellipsis">Skyline collection</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 col-md-3">
                        <div class="box p-1"><a href="#"><img src="../assets/images/a1.jpg" alt="" class="w-100"></a>
                            <div class="p-2">
                                <div class="text-ellipsis">Morbi nec nunc condimentum</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="btn-group mr-3">
                        <button type="button" class="btn btn-sm white"><i class="fa fa-angle-left"></i></button>
                        <button type="button" class="btn btn-sm white"><i class="fa fa-angle-right"></i></button>
                    </div>
                    Showing <strong>8</strong> of 25
                </div>
            </div>
        </div>
    </div>
@endsection


@section("page-script")

@endsection