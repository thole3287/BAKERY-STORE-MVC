@extends("Layout.masterAdmin")
@section("content")
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sửa thông tin slide
            <small>Danh sách</small>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            {{$error}} <br />
            @endforeach
        </div>
        @endif
        @if(Session::has("thongbao"))
        <div class="alert alert-success">{{Session::get("thongbao")}}</div>
        @endif
        @if(Session::has("loi"))
        <div class="alert alert-danger">{{Session::get("loi")}}</div>
        @endif
        <form action="{{route('editslide', $editSlide->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Đường link</label>
                <input class="form-control" name="link" value="{{$editSlide->link}}" />
            </div> 
            <div class="form-group">
                <label>Hình ảnh</label>
                <p>
                    <img src="resources/FrontEnd/image/slide/{{$editSlide->image}}" height="250px"
                        alt="{{$editSlide->image}}" />
                </p>
                <input type="file" class="form-control" name="image" />
            </div>
            <button type="submit" class="btn btn-success">Cập nhật</button>
            <button type="reset" class="btn btn-success">Nhập lại</button>
        </form>
    </div>
</div>
@endsection