<div>
    <button wire:click="confirmDelete" class="btn btn-danger btn-sm">
        <i data-feather="trash-2"></i>
    </button>
</div>

@push('DeleteGuru')
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        @this.on('triggerDelete', guruId => {
            Swal.fire({
                title: 'Anda Yakin?',
                text: 'Data guru akan dihapus',
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
                    .then(response => {
                        if (response === 'success') {
                            Swal.fire({
                                title: 'Hapus Data Sukses!',
                                text: 'Data guru telah dihapus',
                                icon: 'success',
                                showConfirmButton: true,
                                timer: 2500
                            });
                        } else {
                            Swal.fire({
                                title: 'Hapus Data Gagal!',
                                text: 'Guru dengan status aktif tidak dapat dihapus',
                                icon: 'error',
                                timer: 2500
                            });
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Hapus Data Dibatalkan!',
                        text: 'Data guru tidak dihapus',
                        icon: 'error',
                        timer: 2500
                    });
                }
            });
        });
    });
</script>
@endpush
