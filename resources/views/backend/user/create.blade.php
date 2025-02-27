@include('backend.user.component.breadcrumb',['title' => $config['seo']['create']['title']])

<form action="" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-description">
                        <p>- Nhập thông tin chung của người dùng sử dụng</p>
                        <p>- Lưu ý: Những trường đánh dấu<span class="text-danger">(*)</span> là bắt buộc</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Email
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="email"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        id="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Họ tên
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="name"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        id="">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhóm thành viên
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <select name="user-catalogue_id" id="" class="form-control">
                                        <option value="0">[Chọn nhóm thành viên]</option>
                                        <option value="1">Quản trị viên</option>
                                        <option value="2">Cộng tác viên</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ngày sinh
                                    </label>
                                    <input
                                        type="date"
                                        name="birthday"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        id="">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Mật khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="password"
                                        name="password"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        id="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhập lại mật khẩu
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="password"
                                        name="re_password"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        id="">
                                </div>
                            </div>
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ảnh đại diện
                                    </label>
                                    <input
                                        type="text"
                                        name="image"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin liên hệ</div>
                    <div class="panel-description">
                       Nhập thông tin liên hệ của người dùng sử dụng
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Thành phố
                                    </label>
                                    <select name="province_id" class="form-control setupSelect2 province">
                                        <option value="0">[Chọn thành phố]</option>
                                      @if(isset($provices))
                                      @foreach ($provices as $provice)
                                      <option value="{{ $provice->code }}">{{ $provice->name }}</option>
                                      @endforeach
                                      @endif
                                    </select>        
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Quận/Huyện   
                                    </label>
                                    <select name="district_id"  class="form-control districts setupSelect2">
                                        <option value="0">[Chọn Quận/Huyện ]</option>
                                    </select>    
                                </div>
                            </div>
                          
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Phường/Xã   
                                    </label>
                                    <select name="ward_id" id="" class="form-control">
                                        <option value="0">[Chọn Phường/Xã  ]</option>
                                    </select>    
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Địa chỉ
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="address"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        id="">
                                </div>
                            </div>
                          
                        </div>
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Số điện thoại
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="phone"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        id="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Ghi chú
                                    </label>
                                    <input
                                        type="text"
                                        name="dercription"
                                        value=""
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                        id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right mb15">
            <button type="submit" class="btn btn-primary " name="send" value="send">Lưu lại</button>
        </div>
    </div>
</form>