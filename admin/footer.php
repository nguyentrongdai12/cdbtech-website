            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; CDB TECH 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script>
        $('#editmenu').on('show.bs.modal', function (event) {
        var a = $(event.relatedTarget) // Button that triggered the modal
        var autoid = a.data('autoid') // Extract info from data-* attributes
        var name = a.data('name')
        var link = a.data('link')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-body #autoid_old').val(autoid)
        modal.find('.modal-body #autoid').val(autoid)
        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #link').val(link)
        })
    </script>
    <script>
        $('#editservices').on('show.bs.modal', function (event) {
        var a = $(event.relatedTarget) // Button that triggered the modal
        var autoid = a.data('autoid') // Extract info from data-* attributes
        var icon = a.data('icon')
        var title = a.data('title')
        var description = a.data('description')
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-body #autoid_old').val(autoid)
        modal.find('.modal-body #icon').val(icon)
        modal.find('.modal-body #title').val(title)
        modal.find('.modal-body #description').val(description)
        })
    </script>
</body>

</html>