

<a href="{{ route('admin.author.edit',$model)}}" class="btn btn-outline-warning" > Edit</a>
<button href="{{ route('admin.author.destroy',$model)}}" class="btn btn-outline-danger" id="delete" > Delete</button>
<!--Alert Delete-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!--Hapus-->
<script>
    $('button#delete').on('click',function(e){
        e.preventDefault();
        //buat variabel
        var action = $(this).attr('href');
        //buat trigger alert submit
        Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.value) {
                    document.getElementById('deleteForm').action = action;
                    document.getElementById('deleteForm').submit();
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                        )
                    }
                    })

    })
</script>
