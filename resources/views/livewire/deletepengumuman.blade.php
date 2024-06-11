<div>
    <button wire:click="confirmDelete" class="btn btn-danger btn-sm">
        <i data-feather="trash-2"></i> 
    </button>
</div>@push('Deletepengumuman')
<script type="text/javascript">
   document.addEventListener('DOMContentLoaded', function () {
       @this.on('triggerDelete', pengumumanId => {
           Swal.fire({
               title: 'Anda Yakin?',
               text: 'Data pengumuman  akan dihapus',
               icon: "warning",
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#aaa',
               confirmButtonText: 'Ya Hapus!'
           }).then((result) => {
               // Jika pengguna mengklik hapus
               if (result.isConfirmed) {
                   // Panggil metode destroy untuk menghapus
                   @this.call('destroy', pengumumanId)
                   // Tanggapan sukses
                   Swal.fire({
                       title: 'Hapus Data Sukses!',
                       text: 'Data pengumuman  telah dihapus',
                       icon: 'success',
                       showConfirmButton: true,
                       timer: 2500
                   });
               } else {
                   Swal.fire({
                       title: 'Hapus Data dibatalkan!',
                       text: 'Data pengumuman  tidak dihapus',
                       icon: 'error',
                       timer: 2500
                   });
               }
           });
       });
   })
</script>

@endpush  