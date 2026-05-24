<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         'dvo6i8pgvhunm2ttloyq50cfx6caksgjkqxleuyu42szzycqox5brkkmtxpgi9g8' );
define( 'SECURE_AUTH_KEY',  'iq71gnnm8lz0ee26xn9nn129uvd7ya77ed38e2zcnv79szanfrewlftzeze2prco' );
define( 'LOGGED_IN_KEY',    'trv04mcmg94btpiapen9wh296m9ef1kscjlvwbhs9ew3ain0hpyvjyig4ova4aes' );
define( 'NONCE_KEY',        'u4a9k5dqhqp4yj9xr30gukqy9og3q7vfpl3ftbxeeayhcts7jl8rgbaz3xs6hxt1' );
define( 'AUTH_SALT',        'iujryn5j3uwa6pcngyaydeigczxqzyzydt6g2u5opyr0ub2usqxq0bhvk9bwerxa' );
define( 'SECURE_AUTH_SALT', 'p6a1fom35e3hkkeelgw4rcin68pec98i6iho31rw0pscjryyb4mdb2aptj9rrdz3' );
define( 'LOGGED_IN_SALT',   'lfwysykccefphssd0pq0f6hxoyn2zjsq7tvpdhwdp0mici6wm7va2w0qeezo4l99' );
define( 'NONCE_SALT',       'udy3u9vv099m4gamrjlcjx59onfkubem9q7g4q863xq5iy2ncohb0urm3rfq3lr7' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-454147e4-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-454147e4-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
