const imageTemplate = (src)=>{
    return `<img class="scale-images" src="${src}" alt="${src}">`
}

$( document ).ready(function() {
    $(document).on('change','.action-preview',function (e){
        const preview = $('#image-preview')
        const files = e.target.files
        preview.empty()
        Array.from(files).forEach((file)=>{
            const reader = new FileReader()
            reader.addEventListener('load',( async ()=>{
                 await preview.append(imageTemplate(reader.result))
            }))
            reader.readAsDataURL(file);
        })

        //
        // $('#imageScale').find('img').attr('src',src)
        // $('#imageScale').modal('show')
    })
});
