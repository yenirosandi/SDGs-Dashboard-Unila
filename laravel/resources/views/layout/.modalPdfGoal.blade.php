<div id="cetakpdf" class= "modal fade" role= "dialog">
    <div class="modal-dialog">
        <div class="modal=content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                <h4 class=" modal-title"> Cetak PDF Pencapaian</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('goalPdf)}}" method="post" target="_blank">
                    <table>
                        <tr>
                            <td>
                                <div class="form-group">Dari tahun</div>
                            </td>
                            <td align="center" width="5%">
                                <div class="form-group">:</div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="date" class="form-control" name="thn1" required>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>