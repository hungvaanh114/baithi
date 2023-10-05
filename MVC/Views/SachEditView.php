<div class="container-fluid mt-3">
    <h2 style="text-align: center;color: blue;">Cập nhật thông tin sách</h2>
    <h6 style="text-align: center;color: red;">
        <?php
        if (isset($data['result'])) {
            if ($data['result']) echo "Sửa thành công!";
            else echo "Sửa thất bại!";
        }
        ?>
    </h6>
    <?php
    foreach ($data['edit'] as $row) { ?>
        <form method="post" style="height: 350px;    padding-bottom: 20px;" action="http://localhost/QLS_MVC_API/Danhsachsach/UpdateS/<?php echo $row['idsach'] ?>">
            <!-- Vertical -->
            <div class="form-group">
                <label for="myidsach">Mã sách</label>
                <input type="text" id="myidsach" name="idsach" class="form-control" placeholder="Nhập mã sách" value="<?php echo $row['idsach'] ?>" disabled>
                <label for="mytensach">Tên sách</label>
                <input type="text" id="mytensach" name="tensach" class="form-control" placeholder="Nhập tên sách" value="<?php echo $row['tensach'] ?>">
                <label for="mytheloai">Chọn Thể loại</label>
                <select id="mytheloai" name="theloai" class="form-control">
                    <?php
                    foreach ($data['theloai'] as $theloaiRow) {
                        if ($theloaiRow['idtheloai'] == $row['idtheloai']) {
                            echo "<option value=" . $theloaiRow['idtheloai'] . " selected>" . $theloaiRow['tentheloai'] . "</option>";
                        } else {
                            echo "<option value=" . $theloaiRow['idtheloai'] . ">" . $theloaiRow['tentheloai'] . "</option>";
                        }
                    }
                    ?>
                </select>
                <label for="mysoluong">Sô lượng</label>
               <input type="text" id="mysoluong" name="soluong" class="form-control" placeholder="Nhập số lượng sách">
               <label for="mygia">Giá</label>
               <input type="text" id="mygia" name="gia" class="form-control" placeholder="Nhập giá sách">
           
                <br>
                <button type="submit" name="btn_Luu" class="btn btn-primary"> Lưu </button>
                <button type="submit" name="btn_Thoat" class="btn btn-warning"> Đóng </button>
            </div>
        </form>
    <?php
    }
    ?>
</div>