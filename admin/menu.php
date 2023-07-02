<?php
    $dbclass = new dbclass();
    $menus = $dbclass->get_rs("SELECT * FROM menu_main ORDER BY autoid ASC");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Menu</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm menu</h6>
        <hr>
        <form class="user" action="action_menu.php" method="post">
            <div class="form-group row">
                <div class="col-sm-2 mb-3 mb-sm-0">                    
                    <input type="number" class="form-control form-control-user" id="exampleFirstName" name="autoid"
                        placeholder="Thứ tự" required="">
                </div>
                <div class="col-sm-2">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" name="name"
                        placeholder="Tên hiển thị" required="">
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLink" name="link"
                        placeholder="Liên kết" required="">
                </div>
                <div class="col-sm-2">
                    <input type="submit" value="Thêm menu" class="btn btn-primary btn-user">
                </div>
            </div>            
            
        </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tên menu</th>
                        <th>Thứ tự</th>
                        <th>Tên hiển thị</th>
                        <th>Liên kết</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <!--  load danh sách menu lên bảng  -->
                    <?php
                        while ($menu = $menus->fetch_assoc())
                        {
                            echo "<tr>";
                            echo "<td>Menu chính</td>";
                            echo "<td>".$menu['autoid']."</td>";
                            echo "<td>".$menu['name']."</td>";
                            echo "<td><a href='".$menu['link']."'>".$menu['link']."</a></td>";
                            echo "<td><a href='action_menu.php?delete=".$menu['autoid']."'>Xóa</a> | ";
                            echo "<a href='#' data-toggle='modal' data-target='#editmenu' data-autoid='".$menu['autoid']."' data-name='".$menu['name']."' data-link='".$menu['link']."'>Chỉnh sửa</a></td>";
                            echo "</tr>";
                        }
                    ?>                  
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="editmenu" tabindex="-1" role="dialog" aria-labelledby="ditmenu" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="action_menu.php" method="post">
                        <div class="form-group">
                            <label for="autoid_old" class="col-form-label">ID:</label>
                            <input type="number" class="form-control" id="autoid_old" name="autoid_old" readonly>
                        </div>

                        <div class="form-group">
                            <label for="autoid" class="col-form-label">Thứ tự:</label>
                            <input type="number" class="form-control" id="autoid" name="autoid">
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-form-label">Tên hiển thị:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-form-label">Liên kết:</label>
                            <input type="text" class="form-control" id="link" name="link">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <input type="submit" value="Cập nhật" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->