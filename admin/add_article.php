<?php
require '../includes/header.php';
?>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
            <form action="process_add_article.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="path" value="../images/article/">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Tiêu đề</span>
                    <input type="text" class="form-control" name="txtArtTitle">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Tên bài hát</span>
                    <input type="text" class="form-control" name="txtArtBh">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Mã thể loại</span>
                    <input type="text" class="form-control" name="txtArtTL">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Tóm tắt</span>
                    <input type="text" class="form-control" name="txtArtTt">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Nội dung</span>
                    <input type="text" class="form-control" name="txtArtContent">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Mã tác giả</span>
                    <input type="text" class="form-control" name="txtAutId">
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