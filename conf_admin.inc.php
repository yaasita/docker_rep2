<?php
/*
    rep2 - 管理者用設定ファイル
    
    このファイルの設定は、必要に応じて変更してください
*/

// ----------------------------------------------------------------------
// {{{ データ保存ディレクトリの設定

// (それぞれパーミッションは 707 or 777 に。Web公開外ディレクトリに設定するのが望ましいです) 

// p2で使用する基本のデータ保存ディレクトリ
$_conf['data_dir'] = './data';      // ('./data')

// 取得スレッドの dat データ保存ディレクトリ
$_conf['dat_dir']  = $_conf['data_dir'];

// 取得スレッドの idx データ保存ディレクトリ
$_conf['idx_dir']  = $_conf['data_dir'];

// 初期設定データ保存ディレクトリ
$_conf['pref_dir'] = $_conf['data_dir'];


// 将来的には以下のようにしたい
// $_conf['dat_dir']  = $_conf['data_dir'] . '/dat';
// $_conf['idx_dir']  = $_conf['data_dir'] . '/idx';
// $_conf['pref_dir'] = $_conf['data_dir'] . '/pref';

// }}}
// ----------------------------------------------------------------------
// {{{ セキュリティ機能

/**
 * ホストチェックの詳細設定は conf/conf_hostcheck.php で。
 * ただしファイアウォールやhttpd.conf/.htaccessの方が柔軟に設定できるし
 * 画像やconf.phpをロードしないphpスクリプトもアクセス制限の
 * 対象にできるので、可能ならそっちを使うほうがいい。
 */

// ホストチェックをする (0:しない; 1:指定されたホストのみ許可; 2:指定されたホストのみ拒否;)
$_conf['secure']['auth_host'] = 1;  // (1)

// BBQを利用してプロキシ拒否をする (0:しない; 1:する;)
$_conf['secure']['auth_bbq'] = 0;   // (0)

// 書き込みを掲示板サーバで直接行うように （する:1, しない:0）
$_conf['disable_res'] = 0;          // (0)

// 信頼できる掲示板サイト（2ch等）のDAT内のHTMLタグもフィルタ除去の対象に（する:1, しない:0）
$_conf['strip_tags_trusted_dat'] = 1; // (1)

// }}}
// ----------------------------------------------------------------------
$_conf['enable_shirokuma'] = 1; // ●IDの代わりにofflaw2.soのshiro=kumaで過去ログを取得（する:1, しない:0）

// セッションを使用する場合は、PHPの設定で session.use_trans_sid を有効にすることを推奨。
// ※$_conf['use_session']を0にするとdocomoの固有端末認証は使えなくなるので注意。
$_conf['use_session'] = 2;          // (2) セッションを利用（する:1, しない:0, cookie認証が利用されていない時のみする:2）

$_conf['session_save'] = 'p2';      // ('p2') sessionデータの保存管理 (PHPデフォルト:'', p2でファイル管理:'p2')

$_conf['fsockopen_timeout'] = 6; // (6) ネットワーク接続タイムアウト時間 (秒)

$_conf['default_socket_timeout'] = 20; // ini_set('default_socket_timeout', )

$_conf['dlSubjectTotalLimitTime'] = 20; // (20) subject.txtのダウンロードに費やす合計制限時間（秒）

// （モバイル表示時）subject.txtのダウンロードに費やす合計制限時間（秒）
$_conf['dlSubjectTotalLimitTimeM'] = 10; // (10) 

// pecl_http が利用できる場合、HttpRequestPool による並列ダウロードを有効にする（※PHP5以上のみ可）
// この設定を有効にした場合は、$_conf['dlSubjectTotalLimitTime*'] の設定が無効となる。
// (off:0, on:1, モバイル時のみon:3) // cli:2 は未対応
$_conf['expack.use_pecl_http'] = 0; // (0)

$_conf['updatan_haahaa'] = 1;       // (1) p2の最新バージョンを自動チェック(する:1, しない:0)

$_conf['display_threads_num'] = 150; // (150) スレッドサブジェクト一覧のデフォルト表示数 (100, 150, 200, 250, 300, 400, 500, "all")
$_conf['rec_res_log_secu_num'] = 0; // (0) 管理用に記録する書き込みログの数（最大記録レス数。0なら記録しない）
//$_conf['posted_rec_num'] = 1000;    // (1000) 書き込んだレスの最大記録数 // この設定は現在は機能していない
$_conf['menu_dl_interval'] = 1;     // (1) 板 menu のキャッシュを更新せずに保持する時間 (hour)

$_conf['sb_dl_interval'] = 180;     // (180) subject.txt のキャッシュを更新せずに保持する時間 (秒)

// $_conf['dat_dl_interval'] = 20;  // (20) dat のキャッシュを更新せずに保持する時間 (秒) // この設定は現在は機能していない
$_conf['p2status_dl_interval'] = 360; // (360) p2status（アップデートチェック）のキャッシュを更新せずに保持する時間 (分)

$_conf['login_log_rec'] = 1;        // (1) ログインログを記録（する:1, しない:0）
$_conf['login_log_rec_num'] = 200;  // (200) ログインログの記録数
$_conf['last_login_log_show'] = 1;  // (1) 前回ログイン情報を表示（する:1, しない:0）

$_conf['cid_expire_day'] = 60;      // (60) Cookie IDの有効期限日数

$_conf['ngaborn_data_limit'] = 0;  // (0) NGあぼーんに登録できる数（0なら制限なし）

$_conf['force_through_ime_if_urlsid'] = 1; // (1) セッションIDのリファラ漏れを防ぐため、URLにセッションIDが含まれる場合は、強制的にimeを通す。(Yes:1, No:0)

$_conf['enable_skin'] = 1;

$_conf['bbsmenu_url_for_mapping'] = 'http://kita.jikkyo.org/cbm/cbm.cgi/20.p0.m0/-all/bbsmenu.html'; // 板-ホストの対応表を作成するために使用するbbsmenuのURL
// 'http://menu.2ch.net/bbsmenu.html'
// 'http://menu.70.kg/bbsmenu.html' // 繋がらなくなっている

// {{{ 携帯アクセスキー

$_conf['k_accesskey']['matome'] = '3'; // 新まとめ
$_conf['k_accesskey']['latest'] = '3'; // 新
$_conf['k_accesskey']['res']    = '7'; // 書
$_conf['k_accesskey']['above']  = '2'; // 上
$_conf['k_accesskey']['up']     = '5'; // （板）
$_conf['k_accesskey']['prev']   = '4'; // 前
$_conf['k_accesskey']['bottom'] = '8'; // 下
$_conf['k_accesskey']['next']   = '6'; // 次
$_conf['k_accesskey']['info']   = '9'; // 情
$_conf['k_accesskey']['dele']   = '*'; // 削
$_conf['k_accesskey']['filter'] = '#'; // 索

// }}}
// {{{ PCアクセスキー

// menu
$_conf['pc_accesskey']['setfav'] = 'f'; // お気にスレに追加/外す
$_conf['pc_accesskey']['recent'] = 'h'; // 最近読んだスレ

// read
$_conf['pc_accesskey']['dores']  = 'p'; // レスする
$_conf['pc_accesskey']['tuduki'] = 'r'; // 新着レスの表示/続きを読む/新着まとめ読みの更新
$_conf['pc_accesskey']['midoku'] = 'u'; // 未読レスの表示
$_conf['pc_accesskey']['motothre'] = 'o'; // 元スレ
$_conf['pc_accesskey']['info']   = 'i'; // 情報
$_conf['pc_accesskey']['dele']   = 'd'; // 削除
$_conf['pc_accesskey']['all']    = 'a'; // 全部表示

// }}}
// {{{ パーミッションの設定

$_conf['data_dir_perm']   = 0707;   // データ保存用ディレクトリ
$_conf['dat_perm']        = 0606;   // datファイル
$_conf['key_perm']        = 0606;   // key.idx ファイル
$_conf['dl_perm']         = 0606;   // その他のp2が内部的にDL保存するファイル（キャッシュ等）
$_conf['pass_perm']       = 0604;   // パスワードファイル
$_conf['p2_perm']         = 0606;   // その他のp2の内部保存データファイル
$_conf['palace_perm']     = 0606;   // 殿堂入り記録ファイル
$_conf['favita_perm']     = 0606;   // お気に板記録ファイル
$_conf['favlist_perm']    = 0606;   // お気にスレ記録ファイル
$_conf['rct_perm']        = 0606;   // 最近読んだスレ記録ファイル
$_conf['res_write_perm']  = 0606;   // 書き込み履歴記録ファイル
$_conf['conf_user_perm']  = 0606;   // ユーザ設定ファイル

// }}}

$_conf['enable_ob_gzhandler'] = 0; // gzip圧縮転送を有効にするか（※有効にすると逐次表示ができなくなる）（する:1, しない:0, 携帯だけ:2）



// 一つのレス内におけるリンク変換の制限回数（荒らし対策）は ShowThread.php の $str_to_link_limit で設定

/*
 * Local Variables:
 * mode: php
 * coding: cp932
 * tab-width: 4
 * c-basic-offset: 4
 * indent-tabs-mode: nil
 * End:
 */
// vim: set syn=php fenc=cp932 ai et ts=4 sw=4 sts=4 fdm=marker:
