<?php
/*
    rep2 - �z�X�g�P�ʂł̃A�N�Z�X����/���ۂ̐ݒ�t�@�C��

    ���̃t�@�C���̐ݒ�́A�K�v�ɉ����ĕύX���Ă�������
    �iIP�A�h���X�ш�� lib/HostCheck.php�j
*/


$GLOBALS['_HOSTCHKCONF'] = array();

// �z�X�g���Ƃ̐ݒ� (0:����; 1:����;)
// $_conf['secure']['auth_host'] == 0 �̂Ƃ��A�`�F�b�N���Ȃ��B
// $_conf['secure']['auth_host'] == 1 �̂Ƃ��A�l��1�i�^�j�̃z�X�g�̂݋��B
// $_conf['secure']['auth_host'] == 2 �̂Ƃ��A�l��0�i�U�j�̃z�X�g�̂݋��ہB
// @ref lib/HostCheck.php
$GLOBALS['_HOSTCHKCONF']['host_type'] = array(
    // p2�����삵�Ă���}�V��
    'localhost' => 1,
    // �N���XA�`C�̃v���C�x�[�g�A�h���X
    'private'   => 1,
    // i���[�h
    'docomo'    => 1,
    // ezWEB
    'au'        => 1,
    // SoftBank(Vodafone Live!)
    'SoftBank'  => 1,
    // WILLCOM(Air H")
    'AirH'      => 1,
    // iPhone
    'iPhone'    => 0,
    // ���[�U�[�ݒ�
    'custom'    => 1,
);

// �A�N�Z�X��������IP�A�h���X�ш�
// �gIP�A�h���X => �}�X�N�h�`���̘A�z�z��
$GLOBALS['_HOSTCHKCONF']['custom_allowed_ips'] = array(
    '0.0.0.0' => 0,
);

// �A�N�Z�X�����ۂ���IP�A�h���X�ш�
// �gIP�A�h���X => �}�X�N�h�`���̘A�z�z��
$GLOBALS['_HOSTCHKCONF']['custom_denied_ips'] = array(
    //'192.168.0.0' => 24,
);

// BBQ�L���b�V���̗L������ (�b���Ŏw��A0�Ȃ�i�v�Ă�)
$GLOBALS['_HOSTCHKCONF']['auth_bbq_burned_expire'] = 0;

// ��xBBQ�`�F�b�N������ł����z�X�g�ɑ΂���BBQ�F�؃p�X�X���[�̗L������ (�b���Ŏw��A0�Ȃ疈��m�F)
$GLOBALS['_HOSTCHKCONF']['auth_bbq_passed_expire'] = 3600;

// ���O�����igethostbyaddr(), gethostbyname()�j�̃L���b�V����ۑ�����b��
$GLOBALS['_HOSTCHKCONF']['gethostby_expires'] = 0;
