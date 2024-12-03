(function($){
    "use strict"
    var HT = {};



    HT.province = () => {
       $(document).on('change', '.province', function(){
        let _this = $(this);    
        let province_id = _this.val();
        $.ajax({
            url: 'ajax/location/getLocation',
            type: 'GET', //loại yêu cầu (GET, POST, PUT, DELETE,...)
            data: {
                'province_id' : province_id
            },
            dataType: 'json', //kiểu dữ liệu mong đợi trả về(json,xml,html,...)
            success: function(res){
                //xử lý dữ liệu trả về khi yêu cầu thành công
                //ví dụ : hiển thị dữ liệu trên trang
               $('.districts').html(res.html)
            },
            error: function(jqXHR, textStatus, errorThrown){
                // xử lý yêu cầu khi gặp lỗi
                console.log('Lỗi' + textStatus + ' ' + errorThrown);
            }

        });
       })
    }
    
   
    $(document).ready(function(){
    HT.province();
    })
})(jQuery);