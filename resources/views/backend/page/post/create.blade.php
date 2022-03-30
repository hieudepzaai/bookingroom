@extends('backend.layout.mainLayout')

@section('title')
    Create new post
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <form class="w-100" method="post" action="{{route('post.create')}}">
                @csrf

                <div class="mb-3 mt-3">
                    <label for="email">title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
                </div>
                <div class="col-md-12 mb-3 mt-3">
                    <label for="email">description</label>
                    <textarea class="form-control" id="description" placeholder="Enter description" name="description"
                              cols="30" rows="10"></textarea>
                </div>


                <div class="mb-3 mt-3">
                    <label for="email">category_id</label>
                    <select class="select_category_id form-select " id="category_id" name="category_id">
                        <option></option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3 mt-3">
                        <label for="email">City</label>
                        {{--                <input type="text" class="form-control" id="province_id" placeholder="Enter province_id" name="province_id">--}}
                        <select class="select_province_id form-select " id="province_id" name="province_id">
                            <option></option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3 mt-3">
                        <label for="email">District</label>
                        <select class="select_district_id form-select " id="district_id" name="district_id">
                            <option></option>
                        </select>

                    </div>
                    <div class="col-md-3 mb-3 mt-3">
                        <label for="email">Ward</label>
                        <select class="select_ward_id form-select " id="ward_id" name="ward_id">
                            <option></option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3 mt-3">
                        <label for="email">Street</label>
                        <select class="select_street_id form-select " id="street_id" name="street_id">
                            <option></option>
                        </select>
                    </div>


                </div>


                <div class="mb-3 mt-3">
                    <label for="email">address_detail</label>
                    <input type="text" class="form-control" id="address_detail" placeholder="Enter address_detail"
                           name="address_detail">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">price</label>
                    <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">price_type</label>
                    <input type="text" class="form-control" id="price_type" placeholder="Enter price_type"
                           name="price_type">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">is_disabled</label>
                    <input type="text" class="form-control" id="is_disabled" placeholder="Enter is_disabled"
                           name="is_disabled">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">area</label>
                    <input type="text" class="form-control" id="area" placeholder="Enter area" name="area">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">priority</label>
                    <input type="text" class="form-control" id="priority" placeholder="Enter priority" name="priority">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">expired_at</label>
                    <input type="text" class="form-control" id="expired_at" placeholder="Enter expired_at"
                           name="expired_at">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">deposit_amount</label>
                    <input type="text" class="form-control" id="deposit_amount" placeholder="Enter deposit_amount"
                           name="deposit_amount">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">status</label>
                    <input type="text" class="form-control" id="status" placeholder="Enter status" name="status">
                </div>

                <div class="mb-3 mt-3">
                    <label for="email">created_by</label>
                    <input type="text" class="form-control" id="created_by" placeholder="Enter created_by"
                           name="created_by">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>


    </div>

@endsection
@section('script')
    @parent
    <script>
        function initSelect2() {
            $('#province_id').select2();
            $('#district_id').select2({
                placeholder: "please select"
            });
            $('#ward_id').select2();
            $('#street_id').select2();

        }
        initSelect2();

        $.ajax({
            url: '/admin/categories',
            type: 'get',
            dataType: 'json',
            async: true,

        }).done(function (data) {
            let results = $.map(data, (item) => {

                return {
                    text: item.name,
                    id: item.id,
                    data: item
                };
            });
            $('.select_category_id').select2({
                data: results,
                allowClear: true,
                placeholder: "please select"
            });
        });
        $.ajax({
            url: '/admin/provinces',
            type: 'get',
            dataType: 'json',
            async: true,

        }).done(function (data) {
            let results = $.map(data, (item) => {

                return {
                    text: item.name,
                    id: item.id,
                    data: item
                };
            });
            $('#province_id').select2({
                data: results,
                allowClear: true,
                placeholder: "please select"
            });
        });


        $('#province_id').on('change', function (e) {
            // Do something
            console.log("change")
            // $('#district_id').select2("destroy");

            $('#district_id').empty();
            $('#ward_id').val(null).trigger("change");
            $('#street_id').val(null).trigger("change");

            let province = $('#province_id').select2('data')[0];
            $.ajax({
                url: '/admin/district/provinces/' + province.id,
                type: 'get',
                dataType: 'json',


            }).done(function (data) {
                console.log(data)
                let results = $.map(data, function (item) {

                    return {
                        text: item.name,
                        id: item.id,
                        data: item
                    };
                });
                $('#district_id').select2({
                    data: results,
                    allowClear: true,
                    placeholder: "please select"
                });
            });

        });



        $('#district_id').on('change', function (e) {
            $('#ward_id').val(null).trigger("change");
            $('#street_id').val(null).trigger("change");
        });


        $('#ward_id').select2({
            minimumInputLength: 2,
            placeholder: 'Please select',
            allowClear: true,
            ajax: {
                url: function () {
                    let district = $('#district_id').select2('data')[0];
                    if (district == undefined || district == null || district == "") {
                        console.log("please select district and city");
                        return;
                    }
                    // console.log(district)
                    return '/admin/ward/getWardByDistrictId/' + district.id;
                },
                delay: 0,
                quietMillis: 0,
                method: "get",
                dataType: 'json',
                cache: true,
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            console.log(item)
                            return {
                                text: item.name,
                                id: item.id,
                                data: item
                            };
                        }),
                    };
                }
            },


        });
        $('#ward_id').on('select2:open', function (e) {
            // $('#district_id').val(null).trigger("change");
            $('#street_id').val(null).trigger("change");
        });


        $('#street_id').select2({
            minimumInputLength: 2,
            ajax: {
                url: '/admin/street/getByName',
                delay: 300,
                quietMillis: 0,
                method: "get",
                dataType: 'json',
                cache: true,
                data: function (params) {
                    // Query parameters will be ?search=[term]&type=public
                    var query = {
                        name: params.term,
                    }
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                },
                processResults: function (data, params) {
                    // Transforms the top-level key of the response object from 'items' to 'results'
                    return {
                        results: $.map(data, function (item) {
                            console.log(item)
                            return {
                                text: item.name,
                                id: item.id,
                                data: item
                            };
                        }),


                    };
                }
                // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
            },
            placeholder: 'Please select',

        });


    </script>
@endsection
