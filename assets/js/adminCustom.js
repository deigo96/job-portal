$(function (){
    $(document).ready(function(){
        $('.delcat').click(function(){
            var id = $(this).data('id');
            var text = $(this).data('text');
            $.ajax({
                type : 'POST',
                url: surl+'admin/deleteCategory',
                data: {
                    id:id,
                    text:text
                },
                success:function (data){
                    console.log(data);
                },
                error:function(){

                }
            });
        });
        $(function(){
            $('.add_spec').click(function(){
                var sp_count = $('.sp_cn').length;
                var items = "";
                items +="<div class='form-group spec rmov="+sp_count+"'>";
                items +="input type='text' class='form-control' placeholder='Spec Value'>";
                items +="<a href='javascript:void(0)' class='remove_spec'>-</a>";
                items +="</div>";

                if(sp_count <= 10){
                    $('.sp_cn').append(items)
                }
            });
        });
    });
})