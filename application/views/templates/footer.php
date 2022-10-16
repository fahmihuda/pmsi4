        </div>
        <!-- ./Container-fluid -->
        </div>
        <!-- ./Content -->
        </div>
        <!-- ./wrapper -->

        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>


        <!-- Sweet Alert 2 -->
        <div class="flashdata" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        <div class="flashdata-success" data-flashdata="<?= $this->session->flashdata('message-success'); ?>"></div>
        <div class="flashdata-failed" data-flashdata="<?= $this->session->flashdata('message-failed'); ?>"></div>
        <!-- ./Sweet Alert 2 -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= base_url('assets/vendor/jquery/jquery-3.4.1.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/jquery/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/jquery/jquery.easing.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/jquery/popper.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/chartjs/Chart.bundle.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/datatables/datatables/js/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/datatables/datatables/js/dataTables.bootstrap4.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/fancybox/jquery.fancybox.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/fontawesome/js/all.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/sweetalert2/sweetalert2.all.min.js'); ?>"></script>
        <script src="<?= base_url('assets/vendor/select2/select2.min.js'); ?>"></script>


        <!-- Config JavaScript -->
        <script src="<?= base_url('assets/js/config-datatables.js'); ?>"></script>
        <script src="<?= base_url('assets/js/config-fancybox.js'); ?>"></script>
        <script src="<?= base_url('assets/js/config-sweetalert2.js'); ?>"></script>
        <script src="<?= base_url('assets/js/config-sidebar.js'); ?>"></script>
        <script src="<?= base_url('assets/js/config-select2.js'); ?>"></script>
        <script>
          let isOpenSideBar = true;
          $('#dl').on('click', function() {
            if ($('#dl').is(':checked')) {
              $('body').css('background-color', '#222');
              // $('#top-nav').removeClass('bg-light');
              // $('#top-nav').addClass('bg-dark');
              $('#o-text').addClass('text-white');
              // $('[class=card]').each(function() {
              //   $(this).removeClass('text-dark');
              //   $(this).removeClass('bg-white');
              //   $(this).addClass('text-white');
              //   $(this).addClass('bg-dark');
              // })
              // $('table').each(function() {
              //   $(this).removeClass('text-dark');
              //   $(this).addClass('text-white');
              // })
            } else if (!$('#dl').is(':checked')) {
              $('body').css('background-color', '#fff');
              // $('#top-nav').removeClass('bg-dark');
              // $('#top-nav').addClass('bg-light');
              $('#o-text').removeClass('text-white');
              // $('[class=card]').each(function() {
              //   $(this).removeClass('text-white');
              //   $(this).removeClass('bg-dark');
              //   $(this).addClass('text-dark');
              //   $(this).addClass('bg-white');
              // });
              // $('table').each(function() {
              //   $(this).removeClass('text-white');
              //   $(this).addClass('text-dark');
              // })
            }
          });

          $('#sidebarCollapse').on('click', function() {
            if (isOpenSideBar) {
              $('#sidebar-icon').removeClass('fa-chevron-left');
              $('#sidebar-icon').addClass('fa-chevron-right');
              isOpenSideBar = false;
            } else {
              $('#sidebar-icon').removeClass('fa-chevron-right');
              $('#sidebar-icon').addClass('fa-chevron-left');
              isOpenSideBar = true;
            }
          });

          $('#biaya_tambahan_transaksi').on('keyup', function() {
            let t = $(this).val();
            t = t.replace(/[^0-9]/g, '')
            t = parseInt(t).toLocaleString();
            $(this).val(t);
          })

          $('#uang_yg_dibayar').on('keyup', function() {
            let t = $(this).val();
            t = t.replace(/[^0-9]/g, '')
            t = parseInt(t).toLocaleString();
            $(this).val(t);
          })
        </script>
        </body>

        </html>