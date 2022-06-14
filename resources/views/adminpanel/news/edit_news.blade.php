@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit News</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" style="margin: 6px; padding: 10px" role="alert">{{ $error }}</div>
                            @endforeach
                        @endif

                        <form method="post" action="{{url('update_news', $news->id)}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{--<input type="hidden" name="_method" value="PUT">--}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="author">Author</label>
                                        <input type="text"
                                               name="author"
                                               id="author"
                                               class="form-control input-paf only_alpha"
                                               placeholder="Author"
                                               minlength="3"
                                               value="{{ $news->author }}"
                                               required />
                                        @if ($errors->has('author'))
                                            <span class="text-danger">{{ $errors->first('author') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="title">Title</label>
                                        <input type="text"
                                               name="title"
                                               id="title"
                                               class="form-control input-paf"
                                               value="{{ $news->title }}"
                                               placeholder="#" />
                                        @if ($errors->has('title'))
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="image">
                                            @if ($news->image != '')
                                                <img src="{{asset('uploads/news/'.$news->image)}}" width="50" />
                                            @else
                                                Image
                                            @endif
                                        <input type="file" name="image" id="image" class="btn btn-default">
                                        </label>
                                        @if ($errors->has('image'))
                                            <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="label-paf" for="description">Description</label>
                                        <textarea name="description"
                                                  id="description"
                                                  class="form-control input-paf"
                                                  placeholder="Description">{{ $news->description }}</textarea>
                                        @if ($errors->has('description'))
                                            <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="label-paf" for="status">Status</label>
                                        <select class="form-control input-paf" name="status" id="status">
                                            <option value="Y" {{$news->status == "Y" ? "selected" : ""}}>Active</option>
                                            <option value="N" {{$news->status == "N" ? "selected" : ""}}>In-Active</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="label-paf" for="btn_submit"> &nbsp; </label>
                                        <button type="submit" id="btn_submit" class="btn btn-info">
                                            <i class="fa fa-check"> Update</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $(document).on("change", "#district_id", function () {
                var district = $("#district_id option:selected").text();
                $("#district").val(district);
            });

            $(document).on("change", "#province_id", function () {
                var name = 'district_id';
                var id = 'div_district';
                var selected = 0;
                var province_id = $(this).val();
                var province = $("#province_id option:selected").text();
                $("#province").val(province);
                getDistrict(id, selected, name, province_id);
            });
        });

        function getDistrict(tr_id, selected, name, province_id) {
            var postData = {
                "_token": "{{ csrf_token() }}",
                "province_id": province_id,
                "default": selected,
                "name": name
            };
            $.ajax({
                url: 'ajax/get_district',
                type: 'POST',
                data: postData,
                success: function (data) {
                    id = "#" + tr_id;
                    $("#" + tr_id).show();
                    $("#" + tr_id).html(data);
                    $(".select2").select2({theme: "default"});
                }
            });
        }

    </script>
@endsection