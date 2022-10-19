$( document ).ready(function() {
    $(document).on('click','.action-delete',function (){
        $('#deleteModal').find('form').attr('action',$(this).data('action'))
        $('#deleteModal').modal('show')
        $('#deleteModalTitle').html($(this).data('title'))
        console.log($(this).data('action'))
    })
});
