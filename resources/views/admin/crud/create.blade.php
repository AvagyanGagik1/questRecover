@include('admin.UI.header')
<section class="content">
<div class="container-fluid">
    <form action="">
        <div class="row">
            <div class="col-6">
                @include('admin.UI.input',['id'=>'asd1','label'=>'Enter name','type'=>'text','placeholder'=>'enter name','name'=>'name'])
                @include('admin.UI.editor')
            </div>
        </div>
    </form>
</div>
</section>
<script>
    // new Editor.ck()
</script>
