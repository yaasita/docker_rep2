<?php
/*
    rep2 - �Ǘ��җp�ݒ�t�@�C��
    
    ���̃t�@�C���̐ݒ�́A�K�v�ɉ����ĕύX���Ă�������
*/

// ----------------------------------------------------------------------
// {{{ �f�[�^�ۑ��f�B���N�g���̐ݒ�

// (���ꂼ��p�[�~�b�V������ 707 or 777 �ɁBWeb���J�O�f�B���N�g���ɐݒ肷��̂��]�܂����ł�) 

// p2�Ŏg�p�����{�̃f�[�^�ۑ��f�B���N�g��
$_conf['data_dir'] = './data';      // ('./data')

// �擾�X���b�h�� dat �f�[�^�ۑ��f�B���N�g��
$_conf['dat_dir']  = $_conf['data_dir'];

// �擾�X���b�h�� idx �f�[�^�ۑ��f�B���N�g��
$_conf['idx_dir']  = $_conf['data_dir'];

// �����ݒ�f�[�^�ۑ��f�B���N�g��
$_conf['pref_dir'] = $_conf['data_dir'];


// �����I�ɂ͈ȉ��̂悤�ɂ�����
// $_conf['dat_dir']  = $_conf['data_dir'] . '/dat';
// $_conf['idx_dir']  = $_conf['data_dir'] . '/idx';
// $_conf['pref_dir'] = $_conf['data_dir'] . '/pref';

// }}}
// ----------------------------------------------------------------------
// {{{ �Z�L�����e�B�@�\

/**
 * �z�X�g�`�F�b�N�̏ڍאݒ�� conf/conf_hostcheck.php �ŁB
 * �������t�@�C�A�E�H�[����httpd.conf/.htaccess�̕����_��ɐݒ�ł��邵
 * �摜��conf.php�����[�h���Ȃ�php�X�N���v�g���A�N�Z�X������
 * �Ώۂɂł���̂ŁA�\�Ȃ炻�������g���ق��������B
 */

// �z�X�g�`�F�b�N������ (0:���Ȃ�; 1:�w�肳�ꂽ�z�X�g�̂݋���; 2:�w�肳�ꂽ�z�X�g�̂݋���;)
$_conf['secure']['auth_host'] = 1;  // (1)

// BBQ�𗘗p���ăv���L�V���ۂ����� (0:���Ȃ�; 1:����;)
$_conf['secure']['auth_bbq'] = 0;   // (0)

// �������݂��f���T�[�o�Œ��ڍs���悤�� �i����:1, ���Ȃ�:0�j
$_conf['disable_res'] = 0;          // (0)

// �M���ł���f���T�C�g�i2ch���j��DAT����HTML�^�O���t�B���^�����̑ΏۂɁi����:1, ���Ȃ�:0�j
$_conf['strip_tags_trusted_dat'] = 1; // (1)

// }}}
// ----------------------------------------------------------------------
$_conf['enable_shirokuma'] = 1; // ��ID�̑����offlaw2.so��shiro=kuma�ŉߋ����O���擾�i����:1, ���Ȃ�:0�j

// �Z�b�V�������g�p����ꍇ�́APHP�̐ݒ�� session.use_trans_sid ��L���ɂ��邱�Ƃ𐄏��B
// ��$_conf['use_session']��0�ɂ����docomo�̌ŗL�[���F�؂͎g���Ȃ��Ȃ�̂Œ��ӁB
$_conf['use_session'] = 2;          // (2) �Z�b�V�����𗘗p�i����:1, ���Ȃ�:0, cookie�F�؂����p����Ă��Ȃ����݂̂���:2�j

$_conf['session_save'] = 'p2';      // ('p2') session�f�[�^�̕ۑ��Ǘ� (PHP�f�t�H���g:'', p2�Ńt�@�C���Ǘ�:'p2')

$_conf['fsockopen_timeout'] = 6; // (6) �l�b�g���[�N�ڑ��^�C���A�E�g���� (�b)

$_conf['default_socket_timeout'] = 20; // ini_set('default_socket_timeout', )

$_conf['dlSubjectTotalLimitTime'] = 20; // (20) subject.txt�̃_�E�����[�h�ɔ�₷���v�������ԁi�b�j

// �i���o�C���\�����jsubject.txt�̃_�E�����[�h�ɔ�₷���v�������ԁi�b�j
$_conf['dlSubjectTotalLimitTimeM'] = 10; // (10) 

// pecl_http �����p�ł���ꍇ�AHttpRequestPool �ɂ�����_�E���[�h��L���ɂ���i��PHP5�ȏ�̂݉j
// ���̐ݒ��L���ɂ����ꍇ�́A$_conf['dlSubjectTotalLimitTime*'] �̐ݒ肪�����ƂȂ�B
// (off:0, on:1, ���o�C�����̂�on:3) // cli:2 �͖��Ή�
$_conf['expack.use_pecl_http'] = 0; // (0)

$_conf['updatan_haahaa'] = 1;       // (1) p2�̍ŐV�o�[�W�����������`�F�b�N(����:1, ���Ȃ�:0)

$_conf['display_threads_num'] = 150; // (150) �X���b�h�T�u�W�F�N�g�ꗗ�̃f�t�H���g�\���� (100, 150, 200, 250, 300, 400, 500, "all")
$_conf['rec_res_log_secu_num'] = 0; // (0) �Ǘ��p�ɋL�^���鏑�����݃��O�̐��i�ő�L�^���X���B0�Ȃ�L�^���Ȃ��j
//$_conf['posted_rec_num'] = 1000;    // (1000) �������񂾃��X�̍ő�L�^�� // ���̐ݒ�͌��݂͋@�\���Ă��Ȃ�
$_conf['menu_dl_interval'] = 1;     // (1) �� menu �̃L���b�V�����X�V�����ɕێ����鎞�� (hour)

$_conf['sb_dl_interval'] = 180;     // (180) subject.txt �̃L���b�V�����X�V�����ɕێ����鎞�� (�b)

// $_conf['dat_dl_interval'] = 20;  // (20) dat �̃L���b�V�����X�V�����ɕێ����鎞�� (�b) // ���̐ݒ�͌��݂͋@�\���Ă��Ȃ�
$_conf['p2status_dl_interval'] = 360; // (360) p2status�i�A�b�v�f�[�g�`�F�b�N�j�̃L���b�V�����X�V�����ɕێ����鎞�� (��)

$_conf['login_log_rec'] = 1;        // (1) ���O�C�����O���L�^�i����:1, ���Ȃ�:0�j
$_conf['login_log_rec_num'] = 200;  // (200) ���O�C�����O�̋L�^��
$_conf['last_login_log_show'] = 1;  // (1) �O�񃍃O�C������\���i����:1, ���Ȃ�:0�j

$_conf['cid_expire_day'] = 60;      // (60) Cookie ID�̗L����������

$_conf['ngaborn_data_limit'] = 0;  // (0) NG���ځ[��ɓo�^�ł��鐔�i0�Ȃ琧���Ȃ��j

$_conf['force_through_ime_if_urlsid'] = 1; // (1) �Z�b�V����ID�̃��t�@���R���h�����߁AURL�ɃZ�b�V����ID���܂܂��ꍇ�́A�����I��ime��ʂ��B(Yes:1, No:0)

$_conf['enable_skin'] = 1;

$_conf['bbsmenu_url_for_mapping'] = 'http://kita.jikkyo.org/cbm/cbm.cgi/20.p0.m0/-all/bbsmenu.html'; // ��-�z�X�g�̑Ή��\���쐬���邽�߂Ɏg�p����bbsmenu��URL
// 'http://menu.2ch.net/bbsmenu.html'
// 'http://menu.70.kg/bbsmenu.html' // �q����Ȃ��Ȃ��Ă���

// {{{ �g�уA�N�Z�X�L�[

$_conf['k_accesskey']['matome'] = '3'; // �V�܂Ƃ�
$_conf['k_accesskey']['latest'] = '3'; // �V
$_conf['k_accesskey']['res']    = '7'; // ��
$_conf['k_accesskey']['above']  = '2'; // ��
$_conf['k_accesskey']['up']     = '5'; // �i�j
$_conf['k_accesskey']['prev']   = '4'; // �O
$_conf['k_accesskey']['bottom'] = '8'; // ��
$_conf['k_accesskey']['next']   = '6'; // ��
$_conf['k_accesskey']['info']   = '9'; // ��
$_conf['k_accesskey']['dele']   = '*'; // ��
$_conf['k_accesskey']['filter'] = '#'; // ��

// }}}
// {{{ PC�A�N�Z�X�L�[

// menu
$_conf['pc_accesskey']['setfav'] = 'f'; // ���C�ɃX���ɒǉ�/�O��
$_conf['pc_accesskey']['recent'] = 'h'; // �ŋߓǂ񂾃X��

// read
$_conf['pc_accesskey']['dores']  = 'p'; // ���X����
$_conf['pc_accesskey']['tuduki'] = 'r'; // �V�����X�̕\��/������ǂ�/�V���܂Ƃߓǂ݂̍X�V
$_conf['pc_accesskey']['midoku'] = 'u'; // ���ǃ��X�̕\��
$_conf['pc_accesskey']['motothre'] = 'o'; // ���X��
$_conf['pc_accesskey']['info']   = 'i'; // ���
$_conf['pc_accesskey']['dele']   = 'd'; // �폜
$_conf['pc_accesskey']['all']    = 'a'; // �S���\��

// }}}
// {{{ �p�[�~�b�V�����̐ݒ�

$_conf['data_dir_perm']   = 0707;   // �f�[�^�ۑ��p�f�B���N�g��
$_conf['dat_perm']        = 0606;   // dat�t�@�C��
$_conf['key_perm']        = 0606;   // key.idx �t�@�C��
$_conf['dl_perm']         = 0606;   // ���̑���p2�������I��DL�ۑ�����t�@�C���i�L���b�V�����j
$_conf['pass_perm']       = 0604;   // �p�X���[�h�t�@�C��
$_conf['p2_perm']         = 0606;   // ���̑���p2�̓����ۑ��f�[�^�t�@�C��
$_conf['palace_perm']     = 0606;   // �a������L�^�t�@�C��
$_conf['favita_perm']     = 0606;   // ���C�ɔL�^�t�@�C��
$_conf['favlist_perm']    = 0606;   // ���C�ɃX���L�^�t�@�C��
$_conf['rct_perm']        = 0606;   // �ŋߓǂ񂾃X���L�^�t�@�C��
$_conf['res_write_perm']  = 0606;   // �������ݗ����L�^�t�@�C��
$_conf['conf_user_perm']  = 0606;   // ���[�U�ݒ�t�@�C��

// }}}

$_conf['enable_ob_gzhandler'] = 0; // gzip���k�]����L���ɂ��邩�i���L���ɂ���ƒ����\�����ł��Ȃ��Ȃ�j�i����:1, ���Ȃ�:0, �g�т���:2�j



// ��̃��X���ɂ����郊���N�ϊ��̐����񐔁i�r�炵�΍�j�� ShowThread.php �� $str_to_link_limit �Őݒ�

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
