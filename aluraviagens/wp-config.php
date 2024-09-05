<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'aluraviagens' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']=yP#nP:oQ@)Cr?UL7;=GnMrh+7IhsUbo%[3S~QYKf}-pz~}lR7]Vzy!rN4F{hU{' );
define( 'SECURE_AUTH_KEY',  'h~sYWU?!pL7Kcd+P}!7H&-asnK[?Duo;P;ari{]!6w5U?5,N]3jV-hq:,PQcYkcj' );
define( 'LOGGED_IN_KEY',    'fglPniQVsp<b~6j/>nV$qX.XTrO@Sx_;3q6sE3V>Vd-?6m*BiAZ^>{Ta1vhc|4Br' );
define( 'NONCE_KEY',        '+;Kr~c&eV~:<Q=KI8SV&h> 1pE ^Yh/&i=AzG*gMW!=:.(=C#A*//##n=<sT72g(' );
define( 'AUTH_SALT',        ')ZEdFQE)^eq=}X8RA)T657)J/CHuu-vUn}aEc}v4ro?_O>Fsa~=8vMZ^gz6ltrz!' );
define( 'SECURE_AUTH_SALT', '!(KfnEp1!VD~ElH>+^800xW0tz.]_utG2QW_k+nSSy(0JVoy4d{V!WH5ZNW5arUf' );
define( 'LOGGED_IN_SALT',   '*LesxO_!fQAd[Q2v?%)Xgb8V:}f4KSbSf8qTwySmao|FT2n57t?uP7@wBqiL1HG|' );
define( 'NONCE_SALT',       'jx}FHO} x/q!(vpLC=,l^p4]*|o4Ede!EPeMs?lFjnptaGqkM3FHXMFg:-ANd:C{' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
