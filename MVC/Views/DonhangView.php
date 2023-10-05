<div class="container-fluid mt-3">
    <h2 style="text-align: center;color: blue;">Cập nhật thông tin đơn hàng</h2>
    <h6 style="text-align: center;color: red;">
        <?php
        if (isset($data['result'])) {
            if ($data['result'] == true) echo "Thêm mới thành công!";
            else echo "Thêm mới thất bại";
        }
        if (isset($data['thongbao'])) {
            echo $data['thongbao'];
        }
        ?>
    </h6>
    <form method="post" action="http://localhost/QLS_MVC_API/Donhang/themdonhang">
        <!-- Vertical -->
        <div class="form-group" style="height: 400px;">
            <div style="color: red;" id="thongbao"></div>
            <label for="mymasach">Chọn sách</label>
            <select for="mymasach" name="masach" class="form-control">
                <option value="">--Chọn sách--</option>
                <?php
                foreach ($data['masach'] as $row) {
                    $selected = ($row['idsach'] == $idsach) ? 'selected' : '';
                    echo "<option value='" . $row['idsach'] . "' " . $selected . ">" . $row['tensach'] . "</option>";
                }
                ?>
            </select>
            
            <label for="mysoluong">Sô lượng</label>
            <input type="number" id="mysoluong" name="soluong" class="form-control" placeholder="Nhập số lượng sách">
            <label for="mygia">Giá</label>
            <input type="number" id="mygiatien" name="giatien" class="form-control" placeholder="Nhập giá đơn hàng">
            <label for="mysdt">SDT</label>
            <input type="number" id="mysdt" name="sdt" class="form-control" placeholder="Nhập SDT người nhận">
            <label for="mydiachi">Địa chỉ</label>
            <input type="text" id="mydiachi" name="diachigiaohang" class="form-control" placeholder="Nhập địa chỉ giao hàng">
            <label for="mytrangthai">Chọn trạng thái</label>
            <select id="mytrangthai" name="trangthai" class="form-control">
                <option value="Chưa thanh toán">Chưa thanh toán</option>
                <option value="Đã thanh toán">Đã thanh toán</option>
            </select>
            
            <br>
            <button type="submit" name="btn_Luu" class="btn btn-primary"> Lưu </button>
        </div>
    </form>

</div>