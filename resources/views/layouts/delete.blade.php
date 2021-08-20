<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">Apakah Anda Yakin Ingin Menghapus Data?
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <form id="form-delete" action="" method="post">
                @csrf
                @method('delete')
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Hapus Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@section('script')
<script>
    $('.delete').on('click', function(e){

    var route = $(this).data('route');
    $('#form-delete').attr('action',route);
    });
</script>
@endsection