if ($_POST['btn'])
        {
            // B1: Lấy thông tin
            $ten = isset($_POST['ten']) ? $_POST['ten'] : '';
            $password = isset($_POST['password']) ? $_POST['password'] : '';
             
            // B2: Kiểm tra dữ liệu
            if (!$password || !$ten){
                echo 'Bạn chưa nhập đủ thông tin';
            }
            else if ($password != 'thehalfheart' || $ten != 'freetuts.net'){
                echo 'Thông tin đăng nhập bị sai';
            }
            else{
                echo 'Đăng nhập thành công!';
            }
        }