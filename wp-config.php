<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'q`M@~hEJw4aBR9NwckTHTp;vY){(ImvsCNtJ;k@D3G$-1h,Nir:GY?k& 9T?}r}g' );
define( 'SECURE_AUTH_KEY',  '&]rN<]F&LyQoYK2P1+bU^tsHgP>z1F.hwV1i(urtoauj~1;VU)xFZj=cV;3-0JTn' );
define( 'LOGGED_IN_KEY',    '>9}af6M[Vy/gt~gN98iX|LU_cAk:;Pq4<enbWpl#Qw=tui|OQA9<*?R^=k{gB0N%' );
define( 'NONCE_KEY',        '3goO^7?2s>cI#u(6,Nq`z +dP<Pq_SQe$#7I4{GxL)|r66a.vf,M!%M{=]f(EYXU' );
define( 'AUTH_SALT',        ')eX3bY@xypIT./SL9@]uaSb-%fb-uF>M}j*aF83oI8i~XlGXs(7kfIl_iG$$2nGO' );
define( 'SECURE_AUTH_SALT', '%xk?(P-PxLkXK]?QwU61@m-i`Jj5 C8:$q#e<R;`t|NM]>6IMQuU3&Y$x@YPS^Vc' );
define( 'LOGGED_IN_SALT',   'q IX!lpON._N*bwU9PlaKvC%+GN,JuL7O%<.xAUfB4HJC=Z9LpUCOIa[E8Ee)v8}' );
define( 'NONCE_SALT',       '|Rx0()[lK|%Uze=`[WtQzd<}*oxa iL5A*93g`#N!3(k5qre = <VUaiE79^88/z' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
