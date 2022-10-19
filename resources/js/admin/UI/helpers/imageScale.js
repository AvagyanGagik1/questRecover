$( document ).ready(function() {
    $(document).on('click','.scale-images',function (){
        let src  = $(this).attr('src');
        console.log(src)
        $('#imageScale').find('img').attr('src',src)
        $('#imageScale').modal('show')
    })
});
