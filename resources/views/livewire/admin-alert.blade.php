    {{-- Be like water. --}}
    <a class="text-danger" wire:click="$emit('triggerDelete', {{ $adminId }})"><i data-feather="trash-2"></i> </a>

 @push('AdminAlert')
 <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('triggerDelete', guruId => {
            Swal.fire({
                title: 'Anda Yakin?',
                text: 'Data admin akan dihapus',
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#aaa',
                confirmButtonText: 'Ya Hapus!'
            }).then((result) => {
                // Jika pengguna mengklik hapus
                if (result.isConfirmed) {
                    // Panggil metode destroy untuk menghapus
                    @this.call('destroy', guruId)
                    // Tanggapan sukses
                    Swal.fire({
                        title: 'Hapus Data Sukses!',
                        text: 'Data admin telah dihapus',
                        icon: 'success',
                        showConfirmButton: true,
                        timer: 2500
                    });
                } else {
                    Swal.fire({
                        title: 'Hapus Data dibatalkan!',
                        text: 'Data admin tidak dihapus',
                        icon: 'error',
                        timer: 2500
                    });
                }
            });
        });
    })
</script>

@endpush    