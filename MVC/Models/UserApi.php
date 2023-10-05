<?php

class UserApi
{
    public function getData()
    {
        $url = 'http://localhost:3002/user';
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            // Xử lý lỗi khi gọi API
            echo "Error: " . $error;
        } else {
            $data = json_decode($response, true);
            // Xử lý dữ liệu từ API
            var_dump($data);
        }

        curl_close($curl);
    }
    
    public function AddUser($taikhoan,$matkhau,$ten,$tuoi,$gioitinh,$email,$diachi,$sdt )
    {
        $url = 'http://localhost:3002/user/Insert';
        $data = array(
            'taikhoan' =>$taikhoan,
            'matkhau' =>$matkhau,
            'ten' =>$ten,
            'tuoi' =>$tuoi,
            'gioitinh' =>$gioitinh,
            'email' =>$email,
            'diachi' =>$diachi,
            'sdt' =>$sdt
        );

        // Convert dữ liệu thành định dạng JSON
        $json_data = json_encode($data);

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $json_data);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            echo "Error: " . $error;
            return false;
        }

        $result = json_decode($response, true);

        if ($result) {
            return true; // Trả về true nếu thêm mới thành công
        } else {
            return false; // Trả về false nếu thêm mới thất bại
        }
    }

    public function CheckMauser($taikhoan)
    {
        $url = 'http://localhost:3002/user/Check?taikhoan=' . $taikhoan;

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPGET, true);

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            echo "Error: " . $error;
            return false;
        }

        $data = json_decode($response, true);

        return $data;
    }
}
