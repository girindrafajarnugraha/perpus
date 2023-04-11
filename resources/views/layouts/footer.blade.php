<footer class="main-footer">
    <strong>Copyright Indra Ganteng <i> (Jare Ibukku)</i>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  @include('sweetalert::alert')
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('AdminLTE')}}/plugins/jquery/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{asset('AdminLTE')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('AdminLTE')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('AdminLTE')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('AdminLTE')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('AdminLTE')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('AdminLTE')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('AdminLTE')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminLTE')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('AdminLTE')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('AdminLTE')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('AdminLTE')}}/dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('AdminLTE')}}/dist/js/pages/dashboard.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    {{-- <script src="asset('js\jquery.dataTables.js')"></script> --}}
    <script type="text/javascript" charset="utf8" src="{{asset('js\jquery.dataTables.js')}}"></script>
{{-- Datatables --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script
    src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-html5-2.3.6/b-print-2.3.6/date-1.4.0/fh-3.3.2/r-2.4.1/sc-2.1.1/sb-1.4.1/sp-2.1.2/datatables.min.js">
</script>


<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
    });

    $('.select2bs4').select2({
      theme: 'bootstrap4'
    });

    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });

    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });

    
</script>
<script type="text/javascript">
    $(document).ready(function() {
          $('.dinamis').change(function() {
            if($(this.val() != '') {
              var pilih = $(this).attr('id')
              var nilai = $(this).val()
              var depend = $(this).data('dependent')
              var token = $("input[name = '_token']").val();
              $.ajax({
                url: "{{route('jabar')}}",
                method: 'POST',
                data: { pilih: pilih, nilai: nilai, depend: depend, _token: token},
                success: function (res){
                  $('#'+depend).html(res)
                }
              })
            }
          })
      })
</script>

<script>
    $(document).ready(function () {
        $('#kategori_buku').multiselect({
            nonSelectedText: 'Pilih Kategori',
            buttonWidth: '100%',

            onChange: function (option,selected){
              var kategori_buku = this.$select.val();
              var token = $("input[name='_token']").val();
              if (kategori.length > 0) {
                $.ajax({
                    url : "{{route('jabar')}}",
                    method : 'POST',
                    data : {kategori_buku:kategori_buku, _token:token},
                    success : function(data) {
                        $('#kode_buku').html(data)
                        $('#kode_buku').multiselect('rebuild')
                    }
                })
              }
            }
        });
        $('#kode_buku').multiselect({
          nonSelectedText: 'Pilih Kode Buku',
          buttonWidth : '100%'
        });
        $('#kode_pinjam').change(function(){
          var kode = $('#kode_pinjam').val()
          var token = $("input[name='_token']").val();
          $.ajax({
            url : "{{route('cari')}}",
            method : 'POST', 
            data : {id:kode, _token:token},
            success : function(res){
              // console.log(res.data);
              $('#id_anggotas').val(res.data.id_anggotas)
              $('#tanggal_pinjam').val(res.data.tanggal_pinjam)
              $('#tanggal_kembali').val(res.data.tanggal_kembali)
              $('#id_bukus').val(res.data.id_bukus)
            }
          })
        })
    })
</script>

<script>
  console.log('pdaa');
</script>
</body>
</html>