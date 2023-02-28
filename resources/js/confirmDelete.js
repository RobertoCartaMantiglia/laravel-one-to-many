const confirmDeleteButton = document.querySelectorAll("form.delete_form");

// per questa operazione fa utilizzato il querySelectorAll che prende tutti gli elemennti di cui necessito, a quel punto posso ciclarli in un foreach
confirmDeleteButton.forEach((elementToDelete) => {
    elementToDelete.addEventListener('submit', function (event) {
        event.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit() //bisogna richiamare l'evento se questo viene confermato per completare la delete
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    })
})

