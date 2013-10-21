/***********************
 * Setup Instruction   *
 ***********************/

_ Vào /deef/config.php, cập nhật lại dbaccess
_ Thay đổi nội dung trong file .sql từ www.crosswordclub.org thành thư mục tương ứng trên local.


/***********************
 *  Migrating Report   *
 ***********************/

_ Tạo mới một database trong phpmyadmin.
_ Tạo mới hoàn toàn một phiên bản của phpBB3, download và cài đặt như bình thường, kết nối phpBB3 vào database vừa tạo.
_ phiên bản phpBB2, cả code lẫn database phải được giữ nguyên.
_ Sau khi cài đặt xong phpBB3, vào phần cài đặt, chọn convert từ phpBB2, chọn file source và database của phpBB2. Hệ thống sẽ tự động copy và convert nó sang phpBB3 (toàn bộ dữ liệu của phpBB2 không bị sửa hay xóa bất cứ gì).
_ Sau khi hoàn tất convert, phiên bản phpBB3 sẽ chứa toàn bộ dữ liệu tương ứng với phpBB2, trừ content index, do đó phải thực hiện re-index lại toàn bộ content để hỗ trợ search.