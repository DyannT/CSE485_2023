<?php
require '../includes/header.php';
require '../includes/database-connection.php';
require '../includes/functions.php';
$id = $_GET['id'];
$sql = "SELECT * FROM `baiviet` WHERE ma_bviet = " . ($id);
$recordByID = pdo($pdo, $sql)->fetchAll();
?>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa bài viết</h3>
            <form action="process_add_article.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="path" value="../images/article/">
            <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutId">Mã bài viết</span>
                    <input type="text" class="form-control" name="txtId" readonly value="<?php echo $recordByID[0]['ma_bviet'] ?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Tiêu đề</span>
                    <input type="text" class="form-control" value="<?php echo $recordByID[0]['tieude'] ?>" name="txtArtTitle">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Tên bài hát</span>
                    <input type="text" class="form-control" value="<?php echo $recordByID[0]['ten_bhat'] ?>" name="txtArtBh">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Mã thể loại</span>
                    <input type="text" class="form-control" value="<?php echo $recordByID[0]['ma_tloai'] ?>" name="txtArtTL">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Tóm tắt</span>
                    <input type="text" class="form-control" value="<?php echo $recordByID[0]['tomtat'] ?>" name="txtArtTt">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Nội dung</span>
                    <input type="text" class="form-control" value="<?php echo $recordByID[0]['noidung'] ?>" name="txtArtContent">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Mã tác giả</span>
                    <input type="text" class="form-control" value="<?php echo $recordByID[0]['ma_tgia'] ?>" name="txtAutId">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutImg">Hình ảnh</span>
                    <input type="file" class="form-control" name="img">
                </div>
                <div class="form-group float-end">
                    <input type="submit" value="Thêm" class="btn btn-success">
                    <a href="article.php" class="btn btn-warning">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
require '../includes/footer.php';
?>