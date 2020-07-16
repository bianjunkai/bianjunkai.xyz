<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'www_mbemr_com' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'www_mbemr_com' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'HWaGcfhK8mrakdfZ' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(U#<s`&f5OkgKaZ;-(w?TgtYD;ihjo)Mjycr{#qhjjU9)#`|:HHWWc9KJW/G_nL!' );
define( 'SECURE_AUTH_KEY',  'E@{O_pw&4u){iuh UAPYfJJKyJI,d)8x, =VzN,Lq6{i{ `7~=WJ{JOyiWiC5&If' );
define( 'LOGGED_IN_KEY',    'AdlhTa~J}ve`_r!$M u9TfE;3] tf*Z)IUrwLY>bVA|^9O7nh5G0SB>L-J[mcH|`' );
define( 'NONCE_KEY',        ';XM?lQVMJkqd*@(L$419j<]Wkg8C>f!zSNAQV7 [+Nu+td69! 4b<}]:- xQr&Qd' );
define( 'AUTH_SALT',        'n|nX`3MN._&$W,3F<7;vv+a*X8pD7@Rm{5{<mQE:$hPI,ob:V/yV$u[|=9qZe!!<' );
define( 'SECURE_AUTH_SALT', 'n@w4;;ux9^3|iK%3!]AY*tI|]%a-EayOZXHd82gDz.!o?mUP7XE853`a]]2bgY_x' );
define( 'LOGGED_IN_SALT',   '8o|C8r{gpuQ2VP_Pev,j!W15kU`Od(m8Tn>udToT6L+S}(zep1qFXW*<?k,:Ha{_' );
define( 'NONCE_SALT',       'I#8Sub#4~C2o5`[FC_Bbp uPH<sz.=v8eLp^Ze}3XYh%fk0j!F;@^fE~=OMPqAi)' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
