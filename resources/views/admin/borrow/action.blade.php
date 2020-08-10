
<button href="{{ route('admin.borrow.return',$model)}}" class="btn btn-outline-danger" id="return" > Pengembalian</button>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!--Hapus-->
<script>
    $('button#return').on('click',function(e){
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
                    confirmButtonText: 'Yes, data has been checked!'
                    }).then((result) => {
                    if (result.value) {
                    document.getElementById('returnForm').action = action;
                    document.getElementById('returnForm').submit();
                    Swal.fire(
                    'Deleted!',
                    'User has been return the book.',
                    'success'
                        )
                    }
                    })

    })
</script>
