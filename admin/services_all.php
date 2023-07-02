<?php
    $dbclass = new dbclass();
    $services = $dbclass->get_rs("SELECT * FROM services ORDER BY autoid ASC");
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Dịch vụ</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Thêm dịch vụ</h6>
            <hr>
            <form class="user" action="action_services.php" method="post">
                <div class="form-group row">
                    <div class="col-sm-2 mb-3 mb-sm-0">                    
                        <input type="text" class="form-control " id="exampleFirstName" name="icon"
                            placeholder="BootStrap Icon" required="">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" class="form-control " id="exampleLastName" name="title"
                            placeholder="Tên dịch vụ" required="">
                    </div>
                    <div class="col-sm-6">
                        <textarea type="text" class="form-control " id="exampleLink" name="description"
                            placeholder="Mô tả" required=""></textarea>
                    </div>
                    <div class="col-sm-2">
                        <input type="submit" value="Thêm dịch vụ" class="btn btn-primary btn-user">
                    </div>
                </div>            
                
            </form>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>AutoID</th>
                        <th>BootStrap Icon</th>
                        <th>Tên dịch vụ</th>
                        <th>Mô tả</th>
                        <th>Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <!--  load danh sách menu lên bảng  -->
                    <?php
                        while ($service = $services->fetch_assoc())
                        {
                            echo "<tr>";
                            echo "<td>".$service['autoid']."</td>";
                            echo "<td>".$service['icon']."</td>";
                            echo "<td>".$service['title']."</td>";
                            echo "<td>".$service['description']."</td>";
                            echo "<td><a href='action_services.php?delete=".$service['autoid']."'>Xóa</a> | ";
                            echo "<a href='#' data-toggle='modal' data-target='#editservices' data-autoid='".$service['autoid']."' data-icon='".$service['icon']."' data-title='".$service['title']."' data-description='".$service['description']."'>Chỉnh sửa</a> | ";
                            echo "<a href='action_services.php?edit=".$service['autoid']."'>Sửa nội dung</a></td> ";
                            echo "</tr>";
                        }
                    ?>                  
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="editservices" tabindex="-1" role="dialog" aria-labelledby="editservices" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa dịch vụ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="action_services.php" method="post">
                        <div class="form-group">
                            <label for="autoid_old" class="col-form-label">ID:</label>
                            <input type="number" class="form-control" id="autoid_old" name="autoid_old" readonly>
                        </div>

                        <div class="form-group">
                            <label for="autoid" class="col-form-label">BootStrap Icon:</label>
                            <input type="text" class="form-control" id="icon" name="icon">
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-form-label">Tên dịch vụ:</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="form-group">
                            <label for="link" class="col-form-label">Mô tả:</label>
                            <textarea class="form-control" id="description" name="description"></textarea>
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